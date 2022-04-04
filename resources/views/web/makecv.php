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
     
          <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
          
         <link href="css/bootstrap.min.css" rel="stylesheet">
     
          <link rel="stylesheet" href="css/font-awesome.min.css">
          <link rel="stylesheet" href="css/owl.carousel.css">
          <link rel="stylesheet" href="css/owl.theme.default.min.css">
     
          <!-- MAIN CSS -->
          <link rel="stylesheet" href="css/style.css">
     
     </head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- MENU -->



<!-- MENU -->


<nav class="navbar bg-white sticky-top navbar-expand-lg navbar-light">
     <div class="container-fluid">
       <a class="navbar-brand p-3 text-primary" href="#">Make your CV</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
       
       </div>
     </div>
     
     <a href="signup.html" class="btn btn-primary px-3 d-none d-lg-flex text-white m-1">Back</a>
   </nav>

<!-- HOME -->

<!-- steps -->
<style>
     @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@400;700&display=swap');

html {
  height: 100%;
  min-height:800px;
}
body {
  background-size:cover;
  background-repeat:no-repeat;
 font-family: 'Noto Sans', sans-serif;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

h1{
  font-weight:400;
  padding-top:0;
  margin-top:0;
  font-family: 'Roboto Slab', serif;
}

#svg_form_time {
  height: 15px;
  max-width: 80%;
  display: block;
  margin: 10px;
}

#svg_form_time circle,
#svg_form_time rect {
  fill: white;
}

.button {
  background:#29ca8e;
  border-radius: 5px;
  padding: 15px 25px;
  display: inline-block;
  margin: 10px;
  font-weight: bold;
  color: white;
  cursor: pointer;
  box-shadow:0px 2px 5px rgb(0,0,0,0.5);
}

button {
  background:#29ca8e;
  border-radius: 5px;
  padding:5px;
  border:none;
  display: inline-block;
  margin:5px;
  /* font-weight: bold; */
  color: white;
  cursor: pointer;
  box-shadow:0px 2px 5px rgb(0,0,0,0.5);
}

.circle{
  background:#29ca8e;
  border-radius: 50%;
  width:30px;
  height:30px;
  padding:5px;
  border:none;
  display: inline-block;
  margin:5px;
  /* font-weight: bold; */
  color: white;
  cursor: pointer;
  box-shadow:0px 2px 5px rgb(0,0,0,0.5);
}
.disabled {
  display:none;
}

section {
     padding: 14px;
background: white;
background: rgba(255,255,255,0.9);
backdrop-filter: blur(10px);
box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
border-radius: 5px;
transition: transform 0.2s ease-in-out;
margin: 10px;
}


input {
  width: 100%;
  margin: 5px 0px;
display: inline-block;
padding: 9px 15px;
  box-sizing: border-box;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 1em;
  font-family:inherit;
  background:white;
}

p{
  text-align:justify;
margin-top:0;
}

/* cv */
@media print {
  @page {
    margin: 0;
    size: A4;
  }
  * {
    -webkit-print-color-adjust: exact;
  }
}
.toCenter {
  width: 100%;
}
.grid-container {
  margin: auto;
  display: grid;
  grid-template-columns:0.5fr 1fr;
  width: 210mm;
  height: 297mm;
  overflow: hidden;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
}
.grid-container .zone-1 {
  padding: 40px 20px;
  padding-left: 35px;
  background: #d1d1d1;
  width: 100%;
  color: #313131;
}

.grid-container .zone-1 .contact-box {
  margin-top:3px;
}
.grid-container .zone-1 .contact-box > * {
  width: 100%;
  display: grid;
  grid-template-columns: 0.3fr 1fr;
  margin-top: 25px;
  align-items: center;
}
.grid-container .zone-1 .contact-box > * i {
  font-size: 1.3em;
}
.grid-container .zone-1 .contact-box > * .text {
  display: inline-flex;
  word-break: break-all;
}
.grid-container .zone-1 .personal-box {
  margin-top: 35px;
}
.grid-container .zone-1 .personal-box > *:not(.title) {
  margin: 25px 0px;
  grid-template-columns: 0.55fr 1fr;
  display: grid;
}
.grid-container .zone-1 .personal-box .progress .dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #313131;
  border-radius: 50%;
  margin-left: 4px;
}
.grid-container .zone-1 .personal-box .progress .dot.active {
  background-color: #9db858;
}
.grid-container .zone-1 .hobbies-box {
  margin-top: 35px;
}
.grid-container .zone-1 .hobbies-box .logo {
  margin: 10px 0px;
  display: grid;
  grid-template: 1fr 1fr / 1fr 1fr;
  font-size: 2.8em;
  grid-row-gap: 15px;
}
.grid-container .zone-1 .profile  img{
  display: inline-flex;
  margin-bottom: 5px;
  margin-left: -15px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background-position: center top;
  background-size: 200%;
  border: 4px solid #2c2b29;
}
.grid-container .zone-2 {
  background: #2c2b29;
  padding: 40px 20px;
  padding-right: 75px;
  color: #b5b5b4;
}
.grid-container .zone-2 .headTitle {
  font-size:0.3em;
  color: #9db858;
}
.grid-container .zone-2 .headTitle h1 {
  font-weight: 400 !important;
}
.grid-container .zone-2 .subTitle h1 {
  font-weight: 400 !important;
}
.grid-container .zone-2 .box {
  display: inline-block;
  padding: 2px 70px 2px 20px;
  margin-left: -20px;
  background: #9db858;
  color: #2c2b29;
}
.grid-container .zone-2 .group-1 .desc {
  margin-top: 15px;
  line-height: 1.5;
}
.grid-container .zone-2 .group-2 .desc {
  margin-top: 15px;
  margin-left: 20px;
}
.grid-container .zone-2 .group-2 .desc ul {
  position: relative;
  margin-top: 20px;
  margin-left: 5px;
}
.grid-container .zone-2 .group-2 .desc ul:before {
  content: "";
  position: absolute;
  top: 12px;
  left: -22px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #9db858;
}
.grid-container .zone-2 .group-2 .desc ul li {
  list-style-type: none;
  position: relative;
}
.grid-container .zone-2 .group-2 .desc ul li:before {
  content: "";
  position: absolute;
  top: 12px;
  left: -18px;
  height: 60px;
  border-left: 2px solid #9db858;
}
.grid-container .zone-2 .group-2 .desc ul:last-of-type li:before {
  content: none;
}
.grid-container .zone-2 .group-2 .desc ul li div:last-of-type {
  color: #9db858;
  font-weight: bold;
}
.grid-container .zone-2 .group-3 .desc {
  margin-top: 15px;
  margin-left: 20px;
}
.grid-container .zone-2 .group-3 .desc ul {
  position: relative;
  margin-top: 20px;
  margin-left: 5px;
}
.grid-container .zone-2 .group-3 .desc ul:before {
  content: "";
  position: absolute;
  top: 30px;
  left: -22px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #9db858;
}
.grid-container .zone-2 .group-3 .desc ul li {
  list-style-type: none;
  position: relative;
}
.grid-container .zone-2 .group-3 .desc ul li:before {
  content: "";
  position: absolute;
  top: 30px;
  left: -18px;
  height: 100px;
  border-left: 2px solid #9db858;
}
.grid-container .zone-2 .group-3 .desc ul:last-of-type li:before {
  content: none;
}
.grid-container .zone-2 .group-3 .desc ul li div:nth-child(2) {
  color: #9db858;
  font-weight: bold;
}
.space{
  justify-content: space-between;
}
.center{
  justify-content: center;
}
/* end cv */
</style>
<!-- MultiStep Form -->
<div class="row">
     <div class="col-lg-4">
          
<div id="svg_wrap"></div>

<section>
 <p>Personal information</p>
 <div class="">
  <div class="">
    <style>
      
.profile-pic {
    max-width: 222px;
    max-height: 222px;
    margin-left: auto;
	margin-right: auto;
	display: block;
}

.file-upload {
    display: none;
}
.circle2 {
    border-radius:12px;
    overflow: hidden;
    width:100px;
    height:100px;
    border: 1px solid rgba(255, 255, 255, 0.7);
  transition: all .3s;
}

.circle2:hover {
  background-color: #36363657;
  cursor: pointer
}
img {
    max-width: 100%;
    height: auto;
    min-width: 212px;
  min-height: 212px
}
    </style>
    <div class="circle2 upload-button center">
      <!-- User Profile Image -->
      <img class="profile-pic" src="images/about-1-720x720.jpg">

      <!-- Default Image -->
      <!-- <i class="fa fa-user fa-5x"></i> -->
    </div>
     
       <input class="file-upload" type="file" accept="image/*"/>
    
 </div>
</div>
 <input type="text" placeholder="Firstname" id="firstname"/>
 <input type="text" placeholder="Lastname" id="lastname"/>
 <input type="text" placeholder="Job" id="job"/>
 <input type="text" placeholder="Phone number" id="phone"/>
 <input type="text" placeholder="place" id="place"/>
 <input type="text" placeholder="Email" id="email" />
</section>

<section>
 
 <form role="form" action="/" method="POST">
  
    <div class="multi-field-wrapper">
     <div class="row space">

      <p class="col-lg-6">Personal Skills</p>
 
      <button type="button" class="add-field col-lg-4">Add</button>
     </div> 
      <div class="multi-fields">
        <div class="multi-field row space">
          <input class="col-lg-8" type="text" name="stuff[]">
          <button type="button" class="remove-field circle col-lg-2">-</button>
        </div>
      </div>
  </div>
</form>

</section>

<section>
 <form role="form" action="/" method="POST">
  
  <div class="multi-field-wrapper">
   <div class="row space">

    <p class="col-lg-6">Hobbies</p>

    <button type="button" class="add-field col-lg-4">Add</button>
   </div> 
    <div class="multi-fields">
      <div class="multi-field row space">
        <input class="col-lg-8" type="text" name="stuff[]">
        <button type="button" class="remove-field circle col-lg-2">-</button>
      </div>
    </div>
</div>
</form>
</section>

<section>
 <p>About me</p>
 <input type="text" placeholder="Summery" />
</section>

<section>
     <form role="form" action="/" method="POST">
  
      <div class="multi-field-wrapper">
       <div class="row space">
    
        <p class="col-lg-6">Education</p>
    
        <button type="button" class="add-field col-lg-4">Add</button>
       </div> 
        <div class="multi-fields">
          <div class="multi-field row space">
            <div class="col-lg-8">
            <input type="text" placeholder="name" name="stuff[]"/>
            <input type="date" placeholder="start-date" name="stuff[]"/>
            <input type="date" placeholder="end-date" name="stuff[]"/>
            <input type="text" placeholder="place" name="stuff[]"/>
            <input type="text" placeholder="info" name="stuff[]" />
            </div>
            <button type="button" class="remove-field circle col-lg-2">-</button>
          </div>
          <hr>
        </div>
    </div>
    </form>
    </section>

    <section>
     <form role="form" action="/" method="POST">
  
      <div class="multi-field-wrapper">
       <div class="row space">
    
        <p class="col-lg-6">Expertise</p>
    
        <button type="button" class="add-field col-lg-4">Add</button>
       </div> 
        <div class="multi-fields">
          <div class="multi-field row space">
            <div class="col-lg-8">
            <input type="text" placeholder="name" name="stuff[]"/>
            <input type="date" placeholder="start-date" name="stuff[]"/>
            <input type="date" placeholder="end-date" name="stuff[]"/>
            <input type="text" placeholder="place" name="stuff[]"/>
            <input type="text" placeholder="info" name="stuff[]" />
            </div>
            <button type="button" class="remove-field circle col-lg-2">-</button>
          </div>
          <hr>
        </div>
    </div>
    </form>
    </section>

<section>
 <p>End</p>
 <p>Thank you for using our website to write your CV we hope you enjoy it , we will make sure not not sell your information to other companies</p>
</section>

 <div class="button" id="prev">&larr; Previous</div>
<div class="button" id="next">Next &rarr;</div>
<div class="button" id="submit">Publish</div>

     </div>
     
     <div class="col-lg-8">
       
    <button id="cmd">Generate PDF</button>
      <div id="content">
      
    


          <div class="grid-container" >
               <div class="zone-1">
                 <div class="toCenter">
                  <div class="toCenter">
                    <div class="profile">
                      <img src="images/about-1-720x720.jpg" />
                    </div>
                  </div>
                    <div class="headTitle">
                      
                         <h3 id="firstnameinfo"></h3> <h3 id="lastnameinfo"></h3>
                       </div>
                       <div class="subTitle">
                         <h4 id="jobinfo"><h4>
                       </div>
                 </div>
                 <div class="contact-box">
                   <div class="title">
                     <h2>Contact</h2>
                   </div>
                   <div class="call"><i class="fas fa-phone-alt"></i>
                     <div class="text" id="phoneinfo"></div>
                   </div>
                   <div class="home"><i class="fas fa-home"></i>
                     <div class="text" id="placeinfo"></div>
                   </div>
                  
                   <div class="email"><i class="fas fa-envelope"></i>
                     <div class="text" id="emailinfo"></div>
                   </div>
                 </div>
                 <div class="personal-box">
                   <div class="title">
                     <h2>Personal Skills</h2>
                   </div>
                   <div class="skill-1">
                    aaaaaaaaaaaaaaaaaaa
                   </div>
                   <div class="skill-2">
                     sssssssssssssss
                   </div>
                   <div class="skill-3">
                       rrrrrrrrrrrrrrrr
                    
                   </div>
                   <div class="skill-4">
                     ddddddddddddd
                     
                   </div>
                 </div>
                 <div class="hobbies-box">
                   <div class="title">
                     <h2>Hobbies</h2>
                   </div>
                   <!-- <div class="logo">
                     <div class="logo-1"><i class="fas fa-gamepad"></i></div>
                     <div class="logo-2"><i class="fas fa-tv"></i></div>
                     <div class="logo-3"><i class="fas fa-camera"></i></div>
                     <div class="logo-4"><i class="fas fa-lightbulb"></i></div>
                   </div> -->
                 </div>
               </div>
               <div class="zone-2">
               
                 <div class="group-1">
                   <div class="title">
                     <div class="box">
                       <h2>About Me</h2>
                     </div>
                   </div>
                   <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure deserunt excepturi numquam obcaecati doloribus ab quisquam sapiente quidem officiis aspernatur. A quae totam provident accusamus iure esse earum magnam adipisci, odit libero inventore laborum, rerum laudantium maxime corporis consequatur repellendus.</div>
                 </div>
                 <div class="group-2">
                   <div class="title">
                     <div class="box">
                       <h2>Education</h2>
                     </div>
                   </div>
                   <div class="desc">
                     <ul>
                       <li>
                         <div class="msg-1">2017-2018 | Lorem, ipsum</div>
                         <div class="msg-2">Rabia School of Texas</div>
                       </li>
                     </ul>
                     <ul>
                       <li>
                         <div class="msg-1">2014-2017 | Lorem, ipsum</div>
                         <div class="msg-2">Lorem, ipsum dolor.</div>
                       </li>
                     </ul>
                     <ul>
                       <li>
                         <div class="msg-1">2012-2014 | Lorem ipsum dolor sit</div>
                         <div class="msg-2">Lorem ipsum dolor sit amet.</div>
                       </li>
                     </ul>
                   </div>
                 </div>
                 <div class="group-3">
                   <div class="title">
                     <div class="box">
                       <h2>Experties</h2>
                     </div>
                   </div>
                   <div class="desc">
                     <ul>
                       <li>
                         <div class="msg-1">Present | IT</div>
                         <div class="msg-2">Lorem, ipsum dolor</div>
                         <div class="msg-3">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                       </li>
                     </ul>
                     <ul>
                       <li>
                         <div class="msg-1">2019-2020 | IT</div>
                         <div class="msg-2">Lorem ipsum dolor sit</div>
                         <div class="msg-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                       </li>
                     </ul>
                     <ul>
                       <li>
                         <div class="msg-1">2018-2019 | IT</div>
                         <div class="msg-2">Lorem, ipsum</div>
                         <div class="msg-3">Lorem, ipsum dolor sit amet consectetur adipisicing.</div>
                       </li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>

            </div>
            <div id="editor"></div>
     </div>




   </div>
 <!-- /.MultiStep Form -->

<!-- end steps -->



     <!-- SCRIPTS -->
     
<script src="js/jq2.js"></script>


<script>
  

  // add input or remove it 
  $('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});


// image
$(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
</script>

<script>
     $( document ).ready(function() {
var base_color = "rgb(230,230,230)";
var active_color = "#29ca8e";



var child = 1;
var length = $("section").length - 1;
$("#prev").addClass("disabled");
$("#submit").addClass("disabled");

$("section").not("section:nth-of-type(1)").hide();
$("section").not("section:nth-of-type(1)").css('transform','translateX(100px)');

var svgWidth = length * 200 + 24;
$("#svg_wrap").html(
  '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
    svgWidth +
    ' 24" xml:space="preserve"></svg>'
);

function makeSVG(tag, attrs) {
  var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
  for (var k in attrs) el.setAttribute(k, attrs[k]);
  return el;
}

for (i = 0; i < length; i++) {
  var positionX = 12 + i * 200;
  var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
  document.getElementById("svg_form_time").appendChild(rect);
  // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
  var circle = makeSVG("circle", {
    cx: positionX,
    cy: 12,
    r: 12,
    width: positionX,
    height: 6
  });
  document.getElementById("svg_form_time").appendChild(circle);
}

var circle = makeSVG("circle", {
  cx: positionX + 200,
  cy: 12,
  r: 12,
  width: positionX,
  height: 6
});
document.getElementById("svg_form_time").appendChild(circle);

$('#svg_form_time rect').css('fill',base_color);
$('#svg_form_time circle').css('fill',base_color);
$("circle:nth-of-type(1)").css("fill", active_color);

 
$(".button").click(function () {
  $("#svg_form_time rect").css("fill", active_color);
  $("#svg_form_time circle").css("fill", active_color);
  var id = $(this).attr("id");
  if (id == "next") {
    $("#prev").removeClass("disabled");
    if (child >= length) {
      $(this).addClass("disabled");
      $('#submit').removeClass("disabled");
    }
    if (child <= length) {
      child++;
    }
  } else if (id == "prev") {
    $("#next").removeClass("disabled");
    $('#submit').addClass("disabled");
    if (child <= 2) {
      $(this).addClass("disabled");
    }
    if (child > 1) {
      child--;
    }
  }
  var circle_child = child + 1;
  $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
    "fill",
    base_color
  );
  $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
    "fill",
    base_color
  );
  var currentSection = $("section:nth-of-type(" + child + ")");
  currentSection.fadeIn();
  currentSection.css('transform','translateX(0)');
 currentSection.prevAll('section').css('transform','translateX(-100px)');
  currentSection.nextAll('section').css('transform','translateX(100px)');
  $('section').not(currentSection).hide();
});

});
</script>
<!-- ajax for pdf -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
</script>
<script>
  // export as pdf
  
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});


</script>
<!-- end ajax -->

<!-- save pdf data -->
<script>
 var firstname=document.getElementById("firstname"),
lastname=document.getElementById("lastname"),
job=document.getElementById("job"),
 phone=document.getElementById("phone"),
place=document.getElementById("place"),
email=document.getElementById("email"),

firstnameinfo=document.getElementById("firstnameinfo"),
lastnameinfo=document.getElementById("lastnameinfo"),
jobinfo=document.getElementById("jobinfo"),
phoneinfo=document.getElementById("phoneinfo"),
placeinfo=document.getElementById("placeinfo"),
emailinfo=document.getElementById("emailinfo");



// the main function: get the content from source and display it in destination
function display(source,destination)
{
  destination.textContent = source;
}

// events
firstname.onkeyup=function(){display(this.value,firstnameinfo)};
lastname.onkeyup=function(){display(this.value,lastnameinfo)};
job.onkeyup=function(){display(this.value,jobinfo)};
phone.onkeyup=function(){display(this.value,phoneinfo)};
place.onkeyup=function(){display(this.value,placeinfo)};
email.onkeyup=function(){display(this.value,emailinfo)};



</script>
</body>
</html>
