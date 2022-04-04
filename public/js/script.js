// function ar(){

//     var $ar=document.getElementById("").innerHTML="";
// }

 // Initiate the wowjs
 new WOW().init();


 // Sticky Navbar
 $(window).scroll(function () {
     if ($(this).scrollTop() > 45) {
         $('.nav-bar').addClass('sticky-top');
     } else {
         $('.nav-bar').removeClass('sticky-top');
     }
 });
 
 