<!DOCTYPE html>
<html lang="en">
<head>

     <title>find Jop</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
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
          
          <a href="login.html" class="btn btn-primary px-3 d-none d-lg-flex text-white m-1">login</a>
          
          <a href="signup.html" class="btn btn-primary px-3 d-none d-lg-flex text-white m-1">signup</a>
        </nav>
     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Job Listing</h1>

                    <br>

                    <p class="lead">By search or select what kind of jobs that you want.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">

               <div class="row">
                    <div class="col-lg-3 col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <h4>Company Name</h4>

                                 
                                   <div>
                                        <label>
                                             <input type="checkbox"  name="compa-name" value="all" id="all">

                                            All
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox" name="compa-name" value="temmam" id="temmam">

                                           Temmam
                                        </label>
                                   </div>
								    <div>
                                        <label>
                                             <input type="checkbox" name="compa-name" value="amanah" id="amanah">

                                           Amanah
                                        </label>
                                   </div>

                                   <br>

                                   <h4>Category</h4>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                             Medical
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">
												IT / Computer
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">
													Managment
												</label>
                                   </div>

                                   <br>

                                  

                                   <h4>City</h4>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                             Sanaa 
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                             Taiz
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                             Aden
                                        </label>
                                   </div>

                                   <br>


                                   <h4>Years of experience</h4>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                              < 1
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                              < 2
                                        </label>
                                   </div>

                                   <div>
                                        <label>
                                             <input type="checkbox">

                                              < 3
                                        </label>
                                   </div>
                              </form>
                         </div>
                    </div>

                    <div class="col-lg-9 col-xs-12">
				  <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label class="control-label"> Search</label>

                                        <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search for..." id="myInput"  onkeyup="myFunction()">
                                             <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button" onclick="myFunction">Go!</button>
                                             </span>
                                        </div>
                                   </div>
                              </form>
                         </div>
<br>
                         <div class="row"  id="searching">
                              <section class="col-lg-6 col-md-4 col-sm-6 ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Temmam</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>

                              <section class="col-lg-6 col-md-4 col-sm-6 ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT2</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Amanah</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>

                              <section class="col-lg-6 col-md-4 col-sm-6  ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT3</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Developing</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>

                              <section class="col-lg-6 col-md-4 col-sm-6  ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT3</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Developing</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>

                              <section class="col-lg-6 col-md-5 col-sm-6  ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT4</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Developing</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>

                              <section class="col-lg-6 col-md-4 col-sm-6  ">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-1-720x480.jpg" class="img-fluid" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30-1-2022</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> yemen</span>
                                              
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details.html" class="searchTxt">IT5</a></h3>

                                             <p class="lead"><strong>$60 000</strong></p>

                                             <p>Fullstack <strong class="companies">Developing</strong></p>
                                        </div>

                                        <div class="courses-info">
                                             <a href="job-details.html" class="btn  btn-outline-success">View Details</a>
                                        </div>
                                   </div>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
    <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6 ">
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

                    <div class="col-md-4 col-sm-6 ">
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

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script>
          // search filter
          function myFunction() {
    var input, filter,searching, divcard, searchTxt, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    searching = document.getElementById("searching");
    divcard = searching.getElementsByTagName("section");
    for (i = 0; i < divcard.length; i++) {
     h3 = divcard[i].getElementsByTagName("h3")[0];
        txtValue = h3.textContent || h3.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          divcard[i].style.display = "";
        } else {
          divcard[i].style.display = "none";
        }
    }
}

// checkbox 
     </script>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>



</body>
</html>