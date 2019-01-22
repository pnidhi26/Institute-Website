

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Hall4 </title>

	<!-- Meta-Tags -->
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href= "css/materialize.css"  type="text/css">
    <link rel="stylesheet"  href="css/prettySticky.css" type="text/css">
            <link rel="stylesheet"  href="css/style.css" type="text/css">
            <link href="css/animate.css" rel="stylesheet">
         <link href="css/contact_css_contact.css" rel="stylesheet">
         <link href="css/grievance.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="js/jquery-3.1.1.min.js"></script>


    <script type="text/javascript" src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

        $(".button-collapse").sideNav(); </script>
    </script>

<!--
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	 //Web-Fonts
-->
<script>
    $(document).ready(function(){
  $('.slider').slider({
    full_width: false,
    interval:5000,
    transition:800,
      height:600,
  });

});

    </script>
   <script>
$(document).ready(function(){
  $("nav a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){

        window.location.hash = hash;
      });
    } // End if
  });

      $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      starting_top: '4%', // Starting top style attribute
      ending_top: '10%', // Ending top style attribute

    } );
     });
</script>
    <script src="js/wow.js"></script>
  <script>
                new WOW().init();
             </script>




	<!-- Default-JavaScript-File -->

     </head>
    <body>
        <div class="navbar-fixed">
    <nav>
        <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="color:#D1A683;">Hall - 4</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="/index">Home</a></li>
        <li><a class="visited" href="http://localhost:8000/index#about">About us</a></li>
        <li><a href="http://localhost:8000/index#services">Facilities</a></li>
          <li><a href="/team">Administration</a></li>

          <li><a href="/grievance">Grievance cell</a></li>
          <li><a href="/contact">Contact US</a></li>
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="/index">Home</a></li>
       <li><a class="visited" href="http://localhost:8000/index#about">About us</a></li>
        <li><a href="http://localhost:8000/index#services">Facilities</a></li>
          <li><a href="/team">Administration</a></li>

          <li><a href="/grievance">Grievance cell</a></li>
          <li><a href="/contact">Contact US</a></li>
      </ul>
    </div>
        </div>
  </nav>
            </div>


            @yield('content')
@include('layouts.partials.footer')
