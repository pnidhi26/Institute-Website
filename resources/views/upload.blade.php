

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
    }
     $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  }); // End if
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
    @if(!Auth::check()){
        <div class="navbar-fixed">
    <nav>
        <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="color:#D1A683;">Hall - 4</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="index">Home</a></li>
        <li><a class="visited" href="#about">About us</a></li>
        <li><a href="#services">Facilities</a></li>
          <li><a href="team">Administration</a></li>

          <li><a href="grievance">Grievance cell</a></li>
          <li><a href="contact">Contact US</a></li>
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="">Home</a></li>
        <li><a class="visited" href="#about">About us</a></li>
        <li><a href="#services">Facilities</a></li>
          <li><a href="team">Administration</a></li>

          <li><a href="grievance">Grievance cell</a></li>
          <li><a href="contact">Contact US</a></li>
      </ul>
    </div>
        </div>
  </nav>
            </div>}


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
<center>
<h5>Your uploads</h5></center>
<div class="container">
<div class="row">
    <center>
    <div class="col s4 offset-s4" style="border:1px solid black;">
      <ul class="tabs">
        <li class="tab col s6" style="display:block;"><a class="active" style="color:black;" href="#resources">Resources</a></li>
        <li class="tab col s6"><a href="#link" style="color:black;">Links</a></li>
       </ul>
    </div>
    </center>
 <div id="resources" class="col s12"><br>
 <center><h6>You can only add files upto 5MB if more than it then share the link to the resources in the Link section.</h6></center>
 <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Resource Name</th>
              <th data-field="name">Resource Type</th>
              <th data-field="price">Sem Type</th>
              <th >Delete</th>
          </tr>
        </thead>

        <tbody>
        @foreach($files as $file)
          <tr>
            <td><a href="/download/{{ $file->resid }}">{{ $file->showname }}</a></td>
            <td>{{ $file->use }}</td>
            <td>{{ $file->semtype }}</td>
            <td>{{ link_to_route('deleteFile', 'Delete', [$file->resid]) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>




{!! Form::open(array('url'=> '/handleupload','files'=>true)) !!}
<div class="row">
	<div class="col s4">
		{!! Form::text('showname', null,
                     array('id' => 'showname',
                    'class'=>'validate',
                    'placeholder'=>'Resource name..')) !!}
    </div>
   <div class="col s4">
		{!! Form::text('use', null,
                     array('id' => 'use',
                    'class'=>'validate',
                    'placeholder'=>'Use of Resource..')) !!}
    </div>
    <div class="col s4">
		{!! Form::text('semtype', null,
                     array('id' => 'semtype',
                    'class'=>'validate',
                    'placeholder'=>'Semester if semester resource..')) !!}
    </div>

    <input type="hidden" name="email" value="{{Auth::user()->email}}" />

</div>
{!! Form::file('file') !!}
{!! Form::token() !!}


{!! Form::submit('Upload') !!}
{!! Form::close() !!}

<br>
</div>

 <div id="link" class="col s12">
 <br>
 <br>
<table class="striped">
        <thead>
          <tr>
              <th data-field="id">Link Name</th>
              <th data-field="name">type</th>
              <th data-field="price">Sem Type</th>
              <th >Delete</th>
          </tr>
        </thead>

        <tbody>
        @foreach($links as $link)
          <tr>
            <td><a href="{{ $link->link }}">{{ $link->name }}</a></td>
            <td>{{ $link->type }}</td>
            <td>{{ $link->semester }}</td>
            <td>{{ link_to_route('deleteLink', 'Delete', [$link->id]) }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

{!! Form::open(array('url'=> '/linkupload')) !!}
<div class="row">
  <div class="col s3">
    {!! Form::text('name', null,
                     array('id' => 'name',
                    'class'=>'validate',
                    'placeholder'=>'Name of resources in link..')) !!}
    </div>
  <div class="col s3">
    {!! Form::text('link', null,
                     array('id' => 'link',
                    'class'=>'validate',
                    'placeholder'=>'Add your link here..')) !!}
    </div>
  <div class="col s3">
    {!! Form::text('type', null,
                     array('id' => 'type',
                    'class'=>'validate',
                    'placeholder'=>'Add use of resource...')) !!}
    </div>

    <input type="hidden" name="email" value="{{Auth::user()->email}}" />
<div class="col s3">

    {!! Form::text('sem', null,
                     array('id' => 'sem',
                    'class'=>'validate',
                    'placeholder'=>'Add semester type...')) !!}



{!! Form::submit('Add') !!}
</div>
</div>
</div>
</div>
{!! Form::token() !!}


{!! Form::close() !!}
</div>
<br>
<br>
<br>

@include('layouts.partials.footer')
