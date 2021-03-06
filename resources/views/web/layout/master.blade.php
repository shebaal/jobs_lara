<!DOCTYPE html>
<html lang="en">
<head>

     <title>Find Job</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

     <!-- MAIN CSS -->
     

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->

 
     <nav class="navbar bg-white sticky-top navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand p-3 text-primary" href="#">Find Job</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="job-listing.html">Jobs</a></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.html">Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonials.html">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="makecv.html">CV Maker</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../ar/index.html">Arabic</a>
                  </li>
              
              </ul>
            </div>
          </div>
          
          <a href="{{route('showlogin')}}" class="btn btn-primary px-3 d-none d-lg-flex text-white m-1">login</a>
          
          <a href="{{route('create_user')}}" class="btn btn-primary px-3 d-none d-lg-flex text-white m-1">signup</a>
        </nav>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>We help all people get jobs</h1>
                                        <h3>Find your next job here</h3>
                                        <!-- <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a> -->
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Finally an easer way to find job</h1>
                                        <h3>What are you wating for?</h3>
                                        <!-- <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a> -->
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Easiest way to find work</h1>
                                        <h3>All the best</h3>
                                        <!-- <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a> -->
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
       @yield('content')
{{-- here --}}
     </main>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Find job</h2>
                              </div>
                              <address>
                                   <p>Sana'a,Yemen</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2022 Sheba</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>777777777</p>
                                   <p><a href="mailto:contact@company.com">find@job.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     
     <!-- <script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>
     <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('/js/smoothscroll.js')}}"></script>
     <script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
    -->

    <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>