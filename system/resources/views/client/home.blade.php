<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Vegetables</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
 @include('client.section.header')
  <!-- end header section --> 
  
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                  <h1>
                    Kami Menjual <br>
                    Buah Terbaik
                  </h1>
                  <p>
                    Selamat datang di Fruttato Shop. Menjual berbagai buah-buah segar dengan kualitas terbaik dari yang terbaik.</p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                    <a href="" class="btn-2">
                      Hubung Kami
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-lg-7">
                <div class="img">
                  <img src="{{url('public')}}/images/1.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                <h1>
                    Kami Menjual <br>
                    Buah Terbaik
                  </h1>
                  <p>
                    Selamat datang di Fruttato Shop. Menjual berbagai buah-buah segar dengan kualitas terbaik dari yang terbaik.</p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                    <a href="" class="btn-2">
                      Hubungi Kami
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-10 col-lg-15">
                <div class="img-box">
                  <img src="{{url('public')}}/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="detail-box">
                <h1>
                    Kami Menjual <br>
                    Buah Terbaik
                  </h1>
                  <p>
                    Selamat datang di Fruttato Shop. Menjual berbagai buah-buah segar dengan kualitas terbaik dari yang terbaik.</p>
                  <div class="btn-box">
                    <a href="" class="btn-1">
                      Selengkapnya
                    </a>
                    <a href="" class="btn-2">
                      Hubungi Kami
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="img-box">
                  <img src="{{url('public')}}/images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        
      </ol>
    </div>
  </section>
  <!-- end slider section -->

  <!-- offer section -->

  <section class="offer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="{{url('public')}}/images/o1.jpg" alt="">
            <div class="detail-box">
              <h2>
                Diskon 20%
              </h2>
              <a href="">
                Beli Sekarang
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="{{url('public')}}/images/o2.jpg" alt="">
            <div class="detail-box">
              <h2>
                Diskon 10%
              </h2>
              <a href="">
                Beli Sekarang
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="{{url('public')}}/images/o3.jpg" alt="">
            <div class="detail-box">
              <h2>
                Diskon 15%
              </h2>
              <a href="">
                Beli Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <p>
          Kami juga mempunyai testimoni, dan ini adalah testimoni dari salah satu pelanggan.
        </p>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{url('public')}}/images/client.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Susi Marningsih
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Ini adalah pengalaman pertama saya membeli buah secara online. Karena mendapatkan usulan dari teman saya 
                        dan juga setelah melihat review banyak orang, akhirnya saya memberanikan diri untuk membeli buah secara online. Awalnya saya tidak berharap banyak.
                        Tetapi jauh melewati ekspetasi saya. Ini adalah toko buah online terbaik menurut saya. Buah yang sampai sangat segar dan terjamin kualitasnya.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{url('public')}}/images/client1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Eka Kuniasih
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        Saya sangat berlangganan dengan toko buah online ini. Saya sudah membeli buah dalam jumlah banyak dan berbagai macam di Fruttato Shop.
                        Kualitas di toko ini sangat terjamin, dan yang saya sukai adalah, para admin yang sangat ramah, dan juga toko ini menyediakan
                        banyak berbagai diskon. Sebagai ibu rumah tangga saya cukup puas dengan diskon di toko ini.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{url('public')}}/images/client2.jpg" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Gigi Hadid
                          </h5>
                          <h6>
                            Customer
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                      I love shopping for fruit at the Fruttato Shop. The fruit in this shop is very fresh, 
                      I vouch for that. Because I'm a regular customer and often get discounted prices. 
                      So you don't need to doubt the quality of Fruttato Shop. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->
  
  <!-- info section -->
  @include('client.section.info')
  <!-- end info section -->

  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>