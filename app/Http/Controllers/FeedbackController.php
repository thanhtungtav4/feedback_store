<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
class FeedbackController extends Controller
{
  public function start(){
    return view('start');
  }

  public function index(){
    return view('feedback');
  }
  // store submit form
  public function store(FeedbackRequest $request){
    $feedback = Feedback::create([
        'name' => $request->input('name'),
        'datecheckin' => $request->input('datecheckin'),
        'phone' => $request->input('phone'),
        'question' => $request->input('question'),
        'question_bad' => $request->input('question_bad'),
        'question_02' => $request->input('question_02'),
        'question_bad_02' => $request->input('question_bad_02'),
        'question_03' => $request->input('question_03'),
    ]);
    session()->flash("success","Success Message");
    return redirect('/feedback');
  }
  
}
