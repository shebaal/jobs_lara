@extends('web.layout.master')
@section('content')
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
@endsection