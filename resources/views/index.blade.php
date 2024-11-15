<!DOCTYPE html>
<html>
   <head>
     
      <style>
          .buy_bt a {
            text-decoration: none;
            color: #0f0f0f;
            display: flex;
            align-items: center;
        }
        .buy_bt i {
            --fa-rotate-angle: 360deg;
            color: #171717;
        }
      </style>
      
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PSX</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="/webisteasset/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="/webisteasset/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/webisteasset/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/webisteasset/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800|Raleway:400,600,700,800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/webisteasset/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               {{-- <a class="navbar-brand"href="index.html"><img src="/webisteasset/images/logo.png"></a> --}}
               <b style='color:white'>PSX_I</b>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('features') }}">Features</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('privacypolicy') }}">Privacy Policy</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_bt">
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provider <span style="color: #02a763;">Best services</span></h1>
                                 <p class="banner_text">Invest in PSX_I to earn profit and commissions</p>
                                 <div class="btn_main">
                                    <div class="started_bt active"><a href="https://psxweb.pakistanstockexchangeinvesters.com">Login</a></div>
                                    
                                    <div class="buy_bt">
                                       <a href="{{App\Models\Setting::where('key','android_app_url')->get()->first()->value}}" download="App">
                                          Download App
                                       </a>
                                    </div>

                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                             <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provider <span style="color: #02a763;">Best services</span></h1>
                                 <p class="banner_text">Invest in PSX_I to earn profit and commissions</p>
                                 <div class="btn_main">
                                    <div class="started_bt active"><a href="https://psxweb.pakistanstockexchangeinvesters.com">Login</a></div>
                                    
                                    <div class="buy_bt">
                                       <a href="{{App\Models\Setting::where('key','android_app_url')->get()->first()->value}}" download="App">
                                          Download App
                                       </a>
                                    </div>

                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provider <span style="color: #02a763;">Best services</span></h1>
                                 <p class="banner_text">Invest in PSX_I to earn profit and commissions</p>
                                 <div class="btn_main">
                                    <div class="started_bt active"><a href="https://psxweb.pakistanstockexchangeinvesters.com">Login</a></div>
                                    
                                    <div class="buy_bt">
                                       <a href="{{App\Models\Setting::where('key','android_app_url')->get()->first()->value}}" download="App">
                                          Download App
                                       </a>
                                    </div>

                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="services_main">
                     <hr class="border">
                     <h1 class="services_taital">Services We Provide</h1>
                     <hr class="border">
                  </div>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="icon_img"><img src="/webisteasset/images/icon-1.png"></div>
                     <h3 class="bitcoin_text">Bitcoin Transaction</h3>
                     <p class="services_text">necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which </p>
                     <div class="readmore_btn"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="icon_img"><img src="/webisteasset/images/icon-2.png"></div>
                     <h3 class="bitcoin_text">Bitcoin Exchange</h3>
                     <p class="services_text">necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which </p>
                     <div class="readmore_btn active"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="icon_img"><img src="/webisteasset/images/icon-3.png"></div>
                     <h3 class="bitcoin_text">Bitcoin Mining</h3>
                     <p class="services_text">necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which </p>
                     <div class="readmore_btn"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- work section start -->
      <div class="work_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="work_main">
                     <hr class="border">
                     <h1 class="services_taital">How It Work</h1>
                     <hr class="border">
                  </div>
                  <p class="work_text">necessary, making this the first true generator on the Internet. It uses a dictionary of </p>
               </div>
            </div>
            <div class="work_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="work_box">
                        <div class="work_img"><img src="/webisteasset/images/img-1.png"></div>
                        <h3 class="payments_text">MAKE PAYMENTS</h3>
                        <p class="lorem_text">combined with a handful of model sentence structures, to gen</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="work_box active">
                        <div class="work_img"><img src="/webisteasset/images/img-2.png"></div>
                        <h3 class="payments_text active">CREATE YOUR WALLET</h3>
                        <p class="lorem_text active">combined with a handful of model sentence structures, to gen</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="work_box">
                        <div class="work_img"><img src="/webisteasset/images/img-3.png"></div>
                        <h3 class="payments_text">BUY OR SELL ORDERS</h3>
                        <p class="lorem_text">combined with a handful of model sentence structures, to gen</p>
                     </div>
                  </div>
               </div>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
      <!-- work section end -->
      <!-- features section start -->
      <div class="features_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h6 class="features_text">The Cryptocurrency</h6>
                  <h1 class="features_taital">AWESOME FACTS</h1>
               </div>
            </div>
            <div class="features_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="icon_4"><img src="images/icon-4.png"><span class="padding15">1150</span></div>
                     <h6 class="project_text">PROJECT COMPLETED</h6>
                     <p class="hidden_text">anything embarrassing hidden in the middle of text</p>
                  </div>
                  <div class="col-md-4">
                     <div class="icon_4"><img src="images/icon-5.png"><span class="padding15">5223</span></div>
                     <h6 class="project_text">HAPPY CLIENTS</h6>
                     <p class="hidden_text">anything embarrassing hidden in the middle of text</p>
                  </div>
                  <div class="col-md-4">
                     <div class="icon_4"><img src="images/icon-6.png"><span class="padding15">4522</span></div>
                     <h6 class="project_text">WORKERS EMPLOYED</h6>
                     <p class="hidden_text">anything embarrassing hidden in the middle of text</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="readmor_bt"><a href="#">Read More</a></div>
      </div>
      <!-- features section end -->
      <!-- team section start -->
      <div class="team_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="team_main">
                     <hr class="border">
                     <h1 class="services_taital">Excellent Team Workers</h1>
                     <hr class="border">
                  </div>
               </div>
            </div>
            <div class="team_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="client_box">
                        <div class="team_img"><img src="/webisteasset/images/team-img1.png"></div>
                        <h3 class="client_name">Williamsom</h3>
                        <p class="passages_text">variations of passages</p>
                     </div>
                     <div class="team_social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="client_box">
                        <div class="team_img"><img src="/webisteasset/images/team-img2.png"></div>
                        <h3 class="client_name">Williamsom</h3>
                        <p class="passages_text">variations of passages</p>
                     </div>
                     <div class="team_social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="client_box">
                        <div class="team_img"><img src="/webisteasset/images/team-img3.png"></div>
                        <h3 class="client_name">Williamsom</h3>
                        <p class="passages_text">variations of passages</p>
                     </div>
                     <div class="team_social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- team section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">REQUEST A CALL BACK</h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-8">
                     <div class="mail_section map_form_container">
                        <form action="">
                           <div class="row">
                              <div class="col-md-6">
                                 <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                              </div>
                              <div class="col-md-6">
                                 <input type="text" class="mail_text" placeholder="Email" name="Email">
                              </div>
                              <div class="col-md-6">
                                 <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                              </div>
                              <div class="col-md-6">
                                 <input type="text" class="mail_text" placeholder="Subject" name="Subject">
                              </div>
                           </div>
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                           <div class="btn_main">
                              <div class="send_bt active"><a href="#">Send</a></div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="contact_img"><img src="/webisteasset/images/coin-img.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="client_taital">What Is Says Our Clients</h1>
                     <p class="client_text">eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                     <div class="client_img"><img src="/webisteasset/images/client-img.png"></div>
                     <h3 class="magna_text">Magna Aliqua.</h3>
                     <p class="consectetur_text"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_taital">What Is Says Our Clients</h1>
                     <p class="client_text">eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                     <div class="client_img"><img src="/webisteasset/images/client-img.png"></div>
                     <h3 class="magna_text">Magna Aliqua.</h3>
                     <p class="consectetur_text"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_taital">What Is Says Our Clients</h1>
                     <p class="client_text">eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                     <div class="client_img"><img src="/webisteasset/images/client-img.png"></div>
                     <h3 class="magna_text">Magna Aliqua.</h3>
                     <p class="consectetur_text"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Our Company</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Our Company</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Terms Of Services</a></li>
                        <li><a href="#">404</li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Coming Soon</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Location</a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>+01 1234567890</a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>demo@gmail.com</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Newsletter</h1>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                  </div>
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <!-- <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p> -->
            <p class="copyright_text">Copyright © 2024 PSX_I. All Rights Reserved. </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="/webisteasset/js/jquery.min.js"></script>
      <script src="/webisteasset/js/popper.min.js"></script>
      <script src="/webisteasset/js/bootstrap.bundle.min.js"></script>
      <script src="/webisteasset/js/jquery-3.0.0.min.js"></script>
      <script src="/webisteasset/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="/webisteassetjs/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/webisteasset/js/custom.js"></script>
   </body>
</html>
