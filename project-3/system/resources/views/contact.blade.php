<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="{{ url('public') }}/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ url('public') }}/assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url(' /')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{url('produk_1')}}"> Bantal Printing</a>
                                        <a class="dropdown-item" href="{{url('produk_2')}}"> Bantal rasfur</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{url('login')}}"> 
                                            login
                                            
                                        </a>
                                        <a class="dropdown-item" href="{{url('checkout')}}">Checkout</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="{{url('cart')}}">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Contact</h2>
                        <div class="d-inline-flex">
                        <p class="m-0"><a href="">Home</a></p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0">Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!-- ================ contact section start ================= -->
  <section class="checkout_area section_padding">
    <div class="container">
     
       
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">HUBUNGI KAMI</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Tulis Pesan'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Nama Anda'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Email Anda'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Deskripsi'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <a href="#" class="btn_3 button-contactForm">Kirim Pesan</a>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>INDONESIA</h3>
              <p>Ketapang, Kalimantan Barat</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>0895 1287 7305</h3>
              <p>Di Jam Kerja</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>vinidawvi@gmail.com</h3>
              <p>Aktif</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!--::footer_part start::-->
  <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="{{ url('public') }}/assets/img/logo.png" alt="#"></a>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ url('public') }}/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ url('public') }}/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ url('public') }}/assets/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ url('public') }}/assets/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ url('public') }}/assets/js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('public') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets/js/contact.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.form.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('public') }}/assets/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
</body>

</html>