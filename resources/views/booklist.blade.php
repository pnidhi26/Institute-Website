

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Hall of residence 4 </title>

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
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"   type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"        type="text/css">
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
    <body style="background-color: black;">
    @if(!Auth::check())
        <div class="navbar-fixed">
    <nav>
        <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="color:#D1A683;">Hall - 4</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="index">Home</a></li>
        <li><a class="visited" href="http://hall4.iiitdmj.ac.in/#about">About us</a></li>
        <li><a href="http://hall4.iiitdmj.ac.in/#services">Facilities</a></li>
          <li><a href="team">Administration</a></li>

          <li><a href="grievance">Grievance cell</a></li>
          <li><a href="contact">Contact US</a></li>
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="">Home</a></li>
        <li><a class="visited" href="http://hall4.iiitdmj.ac.in/#about">About us</a></li>
        <li><a href="http://hall4.iiitdmj.ac.in/#services">Facilities</a></li>
          <li><a href="team">Administration</a></li>

          <li><a href="grievance">Grievance cell</a></li>
          <li><a href="contact">Contact US</a></li>
      </ul>
    </div>
        </div>
  </nav>
            </div>


            @else
<div class="navbar-fixed">
    <nav>
        <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="color:#D1A683;">Hall - 4</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

          <li><a href="/upload">Upload</a></li>
          <li><a href="/resourcelist">Resources</a></li>
          <li><a href="/user/logout">Logout</a></li>
      </ul>
        <ul class="side-nav" id="mobile-demo">

          <li><a href="/upload">Upload</a></li>
          <li><a href="/resourcelist">Resources</a></li>
          <li><a href="/user/logout">Logout</a></li>
      </ul>
    </div>
        </div>
  </nav>
            </div>


            @endif





@section('content')

@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>
@endif

<center><h4 style="color:white;">Resources</h4></center>

<div class="row">
    <center>
    <div class="col s4 offset-s4" style="border:1px solid black;">
      <ul class="tabs">
        <li class="tab col s6" style="display:block;"><a class="active" style="color:black;" href="#resources">Resources</a></li>
        <li class="tab col s6"><a href="#link" style="color:black;">Links</a></li>
       </ul>
    </div>
    </center>
    <div id="resources" class="col s12">
<div class="row">
<div class="container col s11 m10" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);;margin-left:7.5%;height:66px;background-color: white;margin-bottom: 10px;">


{!! Form::open(array('url'=> '/search','files'=>true)) !!}
<div class="row" style="margin-top:13px;">
  <div class="col s4">
    {!! Form::text('search', null,
                     array('id' => 'search',
                    'class'=>'validate',
                    'placeholder'=>'Resource name or type')) !!}
    </div>

{!! Form::token() !!}

<div class="col s4 m2">
<button type="submit" class="waves-effect btn">Search</button>
</div>
{!! Form::close() !!}
<div class="col m2 offset-m4 s2 offset-s2">
  <a class="waves-effect btn" href="/upload">Upload</a>
</div>
</div>
</div>
</div>

<div class="row" style="margin-bottom:132px;">
@foreach($files as $file)
<div class="container col s11 m10" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);;margin-left:7.5%;height:110px;background-color: white;margin-bottom: 10px;">

                <div class="col s2"><h5 style="float:left;"> <img style="width:100px;height:83px;" src="images/dummy-article-img-1.jpg"/>  </h5></div>
                  <div class="col s5">
                  <br>
                     <span style="font-size:17px;margin-top:20px;font-weight: 7"><b>{{$file->showname}}</b></span>
                      <br><span style="font-size:17px;margin-top:20px;">{{$file->use}}</span>

                </div>
                <div class="col s3">
               <br>

                <span style="font-size:17px;margin-top:20px;">{{$file->semtype}}</span>
              <br>  <span style="font-size:17px;margin-top:20px;">{{$file->email}}</span>


                </div>
                <div class="col s2">
                <br>
                     <a href="/download/{{ $file->resid }}" class="waves-effect btn">Download</a>
                    <br> <span style="font-size:17px;margin-top:20px;">{{$file->created_at}}</span>
                </div>
          </div>
          <br>
          <br>
@endforeach
</div>

</div>
<div id="link" class="col s12">
<div class="row">
<div class="container col s11 m10" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);;margin-left:7.5%;height:66px;background-color: white;margin-bottom: 10px;">


{!! Form::open(array('url'=> '/searchlink')) !!}
<div class="row" style="margin-top:13px;">
  <div class="col s4">
    {!! Form::text('search', null,
                     array('id' => 'search',
                    'class'=>'validate',
                    'placeholder'=>'Resource name or type')) !!}
    </div>

{!! Form::token() !!}

<div class="col s2">
<button type="submit" class="waves-effect btn">Search</button>
</div>
{!! Form::close() !!}
<div class="col s2 offset-s4">
  <a class="waves-effect btn" href="/upload">Upload</a>
</div>
</div>
</div>
</div>

<div class="row" style="margin-bottom:132px;">
@foreach($links as $file)
<div class="container col s11 m10" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);;margin-left:7.5%;height:110px;background-color: white;margin-bottom: 10px;">

                <div class="col s2"><h5 style="float:left;"> <img style="width:100px;height:83px;" src="images/dummy-article-img-1.jpg"/>  </h5></div>
                  <div class="col s5">
                  <br>
                     <span style="font-size:17px;margin-top:20px;font-weight: 7"><b>{{$file->name}}</b></span>
                      <br><span style="font-size:17px;margin-top:20px;">{{$file->type}}</span>

                </div>
                <div class="col s3">
               <br>

                <span style="font-size:17px;margin-top:20px;">{{$file->semester}}</span>
              <br>  <span style="font-size:17px;margin-top:20px;">{{$file->email}}</span>


                </div>
                <div class="col s2">
                <br>
                     <a href="{{ $file->link }}" class="waves-effect btn">Go to link</a>
                    <br> <span style="font-size:17px;margin-top:20px;">{{$file->created_at}}</span>
                </div>
          </div>
          <br>
          <br>
@endforeach
</div>



</div>
</div>






@include('layouts.partials.footer')
