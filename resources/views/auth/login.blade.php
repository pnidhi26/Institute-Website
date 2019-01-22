<!DOCTYPE html>
<html lang="en">
<head>

  <title>Hall4 </title>

  <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href= "css/materialize.css"  type="text/css">
    <link href="css/animate.css" rel="stylesheet">
          <link href="css/grievance.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/team.css" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Lobster|Orbitron|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="css/logo.png" rel="icon" type="image/png">

  <!--          <script src="js/bootstrap.js"></script>-->
    <script src="js/wow.js"></script>
  <script>
                new WOW().init();
             </script>
    <script src="js/prettySticky.js"></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"   type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"        type="text/css">
  <!-- //Web-Fonts -->
<script>
    $(document).ready(function(){
  $('.slider').slider({
    full_width: false,
    interval:5000,
    transition:800,
      height:540,
  });
       
});</script>
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

<br>
<br>
<div class="container">
    
    <center><strong><h4 style="color:black;">Login</h4></strong>
    <p>Dude to upload the Resources you need to login with your iiitdmj id </p>
    
    <div class="row">
        <div class="col m8 offset-m2">
            <div class="panel panel-default">
                <center>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col m4 control-label">E-Mail Address</label>

                            <div class="col m6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col m4 control-label">Password</label>

                            <div class="col m6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col m8 offset-m4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
                </center>
            </div>
        </div>
    </div>
</div>
<script>
@if(Session::has('error'))
    alert("{{ Session::get('error') }}");
@endif

@if(Session::has('message'))
    alert("{{ Session::get('message') }}");
@endif
</script>
 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <h5>Hall of Residence 4</h5>
                <p> 
                Indian Institute of Information Technology, Design and Manufacturing,
                <br>Jabalpur - 482005
                <br>
                <br>hall4@iiitdmj.ac.in </p>
              </div>
              <div class="col l4 s12">
                <h5>Links</h5>
                <ul>
                  <li><a href="#!">Placement Cell</a></li>
                  <li><a href="#!">IIITDMJ</a></li>
                  <li><a href="#!">Electronics and ICT Academy</a></li>
                  <li><a href="#!">Mail</a></li>
                </ul>
              </div>
              <div class="col l4 s12">
                <h5>Downloads</h5>
                <ul>
                  <li><a href="#!">Leave Request Form</a></li>
                  <li><a href="#!">Guest Room Booking</a></li>
                  <li><a href="#!">Hostel Guidelines</a></li>
                  <li><a href="#!">Attendence</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Hall4
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer> 
  
        
        
        
         
        
        


        
    
    <script src="js/wow.js"></script>
  <script>
                new WOW().init();
             </script>
        
    </body>
</html>


           