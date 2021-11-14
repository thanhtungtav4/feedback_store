<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Caralens Feedback</title>
        <link href="/asset/common.css" rel="stylesheet">
        <link href="/asset/submit.css" rel="stylesheet">
        <link href="/asset/calendar.css" rel="stylesheet">
        <link href="/asset/star-rating.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="c-submit">
                <div class="c-submit_inner">
                    <div class="c-review_logo">
                        <img src="/asset/images/logo.png" title="caraslens " alt="caraslens">
                    </div>
                    <form action="/feedback" method="post">
                        {{ csrf_field() }}
                        <h3>I/ Thông tin cá nhân:</h3>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="name">Họ & Tên(*)</label>
                                <input type="text" class="form-control" id="name"  name="name">
                            </div>
                            <div class="form-group col-6">
                                <label for="phone">Số Điện Thoại(*)</label>
                                <input type="number" class="form-control" id="phone"  name="phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="datecheckin">Ngày đến showroom(*)</label>
                                <input type="text" id="datepicker" class="form-control"  name="datecheckin">
                            </div>
                        </div>
                        <h3>II/ Đánh giá:</h3>
                        <div class="form-group">
                            <p  class="question">1. Bạn có hài lòng về cách đón tiếp và thái độ của nhân viên tư vấn Caras không?</p>
                            <select class="star-rating question" id="question" name="question">
                                <option value="">Đánh giá chất lượng</option>
                                <option value="4">Rất Hài Lòng</option>
                                <option value="3">Hài Lòng</option>
                                <option value="2">Bình Thường</option>
                                <option value="1">Chưa Hài Lòng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Lý Do Khách Hàng Chưa Hài Lòng</label>
                            <textarea type="text" class="form-control" id="question_bad"  name="question_bad" rows="2" cols="50"></textarea>
                        </div>
                        <div class="form-group">
                            <p  class="question">2. Nhân viên Caras có tư vấn sản phẩm đúng theo nhu cầu sử dụng mong muốn của bạn không?</p>
                            <select class="star-rating question" name="question_02">
                                <option value="">Đánh giá chất lượng</option>
                                <option value="4">Rất Hài Lòng</option>
                                <option value="3">Hài Lòng</option>
                                <option value="2">Bình Thường</option>
                                <option value="1">Chưa Hài Lòng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Lý Do Khách Hàng Chưa Hài Lòng</label>
                            <textarea type="text" class="form-control" id="question_bad_02"  name="question_bad_02" rows="2" cols="50"> </textarea>
                        </div>
                        <p  class="question">3. Bạn có góp ý gì để Caras có thể hoàn thiện hơn về dịch vụ và sản phẩm không? Hãy chia sẻ giúp Caras nhé.</p>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="question_03"  name="question_03" rows="4" cols="50"></textarea>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="hover_bkgr_fricc">
                            <span class="helper"></span>
                            <div>
                                <div class="popupCloseButton">&times;</div>
                                <p>Add any HTML content<br />{{ session()->get('success') }}</p>
                            </div>
                        </div>
                            <div class="alert alert-danger">
                                <ul>
                                        <li>{{ session()->get('success') }}</li>
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="c-review_btn">Gửi</button>
                        
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <div class="c-footer_logo">
                <img src="/asset/images/logo.png" title="Khảo sát khách hàng" alt="Khảo sát khách hàng">
            </div>
            <ul class="c-footer_list">
                <li class="c-footer_item contact">
                  <div class="contact_inner">
                    <div class="img">
                        <img src="/asset/images/thongtin.jpg" title="Khảo sát khách hàng" alt="Khảo sát khách hàng">
                    </div> 
                    <div class="content">
                    <p class="label">HOTLINE</p>
                            <a href="tel:1900636304">1900 63 63 04</a>
                    </div>     
                  </div>
                </li>
                <li class="c-footer_item contact">
                  <div class="contact_inner">
                    <div class="img">
                        <img src="/asset/images/thongtin.jpg" title="Khảo sát khách hàng" alt="Khảo sát khách hàng">
                    </div> 
                    <div class="content">
                    <p class="label">EMAIL</p>
                            <a href="mailto:cskh@caraslens.com">cskh@caraslens.com</a>
                    </div>     
                  </div>
                </li>
                <li class="c-footer_item">
                    <ul class="c-footer_social">
                        <li>
                            <a href="">
                                <img src="/asset/images/facebook-svgrepo-com.svg" title="facebook" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="/asset/images/icons8-youtube-logo.svg" title="facebook" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="/asset/images/icons8-instagram.svg" title="facebook" alt="facebook">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </footer>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="/asset/calendar.js"> </script>
    <script src="/asset/star-rating.js"> </script>
    <script>
        var starRatingControl = new StarRating('.question', {
        maxStars: 4
        });
        // var starRatingControl = new StarRating('.question_02',{
        // maxStars: 4
        // });
       
    </script>
    <script>
        var picker = new Lightpick({
             field: document.getElementById('datepicker'),
             lang: 'vi',
            });
    </script>
</html>
