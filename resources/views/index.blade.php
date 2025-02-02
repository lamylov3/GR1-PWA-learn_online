<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OneSchool &mdash; For The Future</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("web/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("web/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("web/css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("web/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("web/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("web/css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset("web/css/jquery.fancybox.min.css")}}">

    <link rel="stylesheet" href="{{asset("web/css/bootstrap-datepicker.css")}}">

    <link rel="stylesheet" href="{{asset("web/fonts/flaticon/font/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("web/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("web/css/style.css")}}">
    @laravelPWA
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="{{url("http://localhost:8000")}}">OneSchool</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#mentors-section" class="nav-link">Mentor</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>
    <div class="intro-section" id="home-section">
      <div class="slide-1" style=" background-image: url('{{asset('web/images/hero_1.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route('login') }}" class="btn btn-primary py-3 px-5 btn-pill">Tham gia ngay</a></p>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>Từ năm 2014 chương trình đào tạo được xây dựng mới theo hướng tiếp cận CDIO (Conceive Design Implement Operate) đáp ứng chuẩn đầu ra. Tổng số tín chỉ của chương trình đào tạo của các ngành trung bình là 142 tín chỉ với kế hoạch giảng dạy trong 8 học kỳ và 1 học kỳ thực tập tốt nghiệp.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset("web/images/undraw_youtube_tutorial.svg")}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset("web/images/undraw_teaching.svg")}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset("web/images/undraw_teacher.svg")}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="mentors-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Mentor</h2>
            <p class="mb-5">Thứ nhất, đội ngũ giảng viên đại học cần có trình độ chuyên môn cao, hiểu biết sâu rộng trên nhiều lĩnh vực.

              Cách mạng công nghiệp 4.0 đòi hỏi phải có nguồn nhân lực chất lượng cao, đáp ứng được các yêu cầu về kiến thức, kỹ năng và phẩm chất, vốn liên tục thay đổi trong môi trường lao động mới</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="mentor text-center">
              <img src="{{asset("web/images/avatar1.jpg")}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Nguyen Minh Quang</h3>
                <p class="position">Physics Teacher</p>
                <p>Cuộc đời này thật ngắn ngủi, đừng dành… dù chỉ một phút cho những người, những việc khiến bạn buồn.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="mentor text-center">
              <img src="{{asset("web/images/avatar3.jpg")}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Nguyen Tung Lam</h3>
                <p class="position">Leader Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="mentor text-center">
              <img src="{{asset("web/images/avatar2.jpg")}}" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Tran The Luat</h3>
                <p class="position">Physics Teacher</p>
                <p>Sự lợi hại thực sự không phải là bạn quen biết bao nhiêu người, mà là vào lúc bạn gặp hoạn nạn, có bao nhiêu người quen biết bạn.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5">Bạn có thể để lại thông tin chúng tôi sẽ liên lạc với bạn</p>

            <form method="POST" action="" data-aos="fade">
              @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input required type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name:" value="{{old("full_name")}}">
                  <p class="invalid-feedback text-danger">{{ $errors->first('full_name') }}</p>
                </div>
                <div class="col-md-6">
                  <input required type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" placeholder="Birthday:" value="{{old("birthday")}}">
                  <p class="invalid-feedback text-danger">{{ $errors->first('birthday') }}</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input required type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address:" value="{{old("address")}}">
                  <p class="invalid-feedback text-danger">{{ $errors->first('address') }}</p>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input required type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email:" value="{{old("email")}}">
                  <p class="invalid-feedback text-danger">{{ $errors->first('email') }}</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input required type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Number Phone:" value="{{old("phone")}}">
                  <p class="invalid-feedback text-danger">{{ $errors->first('phone') }}</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"> Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->
  <script src="{{asset("web/js/jquery-3.3.1.min.js")}}"></script>
  <script src="{{asset("web/js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("web/js/jquery-ui.js")}}"></script>
  <script src="{{asset("web/js/popper.min.js")}}"></script>
  <script src="{{asset("web/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("web/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("web/js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("web/js/jquery.countdown.min.js")}}"></script>
  <script src="{{asset("web/js/bootstrap-datepicker.min.js")}}"></script>
  <script src="{{asset("web/js/jquery.easing.1.3.js")}}"></script>
  <script src="{{asset("web/js/aos.js")}}"></script>
  <script src="{{asset("web/js/jquery.fancybox.min.js")}}"></script>
  <script src="{{asset("web/js/jquery.sticky.js")}}"></script>


  <script src="{{asset("web/js/main.js")}}"></script>

  </body>
</html>
