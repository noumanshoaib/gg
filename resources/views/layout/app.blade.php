<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Green Grapez">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Green Grapez">
<link rel="shortcut icon" href="{{URL('/')}}/images/favicon.png"/>
<title>Green Grapez</title>
<!-- Bootstrap -->
<link href="{{URL('/')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{URL('/')}}/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="{{URL('/')}}/css/style.css" type="text/css" rel="stylesheet">
<link href="{{URL('/')}}/css/animate.css" type="text/css" rel="stylesheet">
<link href="{{URL('/')}}/css/main.css" type="text/css" rel="stylesheet">
<link href="{{URL('/')}}/css/util.css" type="text/css" rel="stylesheet">
<link href="{{URL('/')}}/css/bootstrap-colorpicker.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
</head>

<body>
<a href="#" id="scroll" style="display: none;"><span></span></a>
<div class="navbar navbar-inverse cust-menu">
  <div class="container-fluid ">
    <div class="navbar-header">
      <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 			 data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.html"> <img style="max-width:70px;"
                     src="{{URL('/')}}/images/logo2.png" alt="logo"> </a> </div>
    <div id="navbar"  class="collapse navbar-collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="{{URL('/')}}" class="active">Home</a></li>
        <li><a href="{{URL('/')}}/ladb">LADB</a></li>
        <li><a href="{{URL('/')}}/our_customer" >Our Customer</a></li>
        <li><a href="{{URL('/')}}/our_product">Our Products</a></li>
        <li><a href="{{URL('/')}}/our_process">Our Process</a></li>
        <li><a href="{{URL('/')}}/blog">Blog</a></li>
        <li><a href="{{URL('/')}}/portfolio">Portfolio</a></li>
        <li><a href="{{URL('/')}}/our_team">Our Team</a></li>
        <li><a href="{{URL('/')}}/about_us">About Us</a></li>
        <li><a href="{{URL('/')}}/contact_us"  >Contact Us</a></li>
        @if(!session()->has('username'))
        <li><a href="{{URL('/')}}/login" >Login</a></li>
        <li><a href="{{URL('/')}}/register">SignUp</a></li>
        @else
        <li><a href="{{URL('/')}}/logout" >logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</div>
@yield('content')
<div class="footer-top"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="footer">
        <h4>NewsLetter</h4>
        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
            </div>
          </div>
        </div>
        <div class="footer-img"> <img src="{{URL('/')}}/images/logo.png"  alt="logo"> </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="footer">
        <h4>Company</h4>
        <ul class="list-links">
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">About</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">Term &amp; Condition</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">Contact</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">FAQ</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">Help Center</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="footer">
        <h4>Company</h4>
        <ul class="list-links">
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">My Account</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">My Order</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">WishList</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">My Persnal Info</a></li>
          <li><i class="fas fa-chevron-right" style="color:#8dc73f;"></i><a href="#">My Address</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="footer">
        <h4>Get in Touch</h4>
        <p style="float:left;"><span> <i class="fa fa-map-marker-alt"></i>&nbsp;:</span></p>
        <p style="margin-left:24px;"><span> 92K Commercial Area Phase-1 DHA Lahore </span><br>
        </p>
        <p><span><i class="fa fa-envelope"></i> : support@greengrapez.com</span></p>
        <p><span><i class="fa fa-phone"></i> : <a class="mobilesOnly"  href="tel:+923244244934" style="margin-left:0px;"> +923244244934</a></span></p>
      </div>
    </div>
  </div>
</div>
<div class="foter-bottom">
  <div class="container">
    <div class="copyrits">
      <p>Copyright © 2017-2018 Green Grapez. All rights reserved.</p>
    </div>
  </div>
</div>
</body>
<script src="{{URL('/')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{URL('/')}}/js/bootstrap.min.js"></script>
<script src="{{URL('/')}}/js/fontawesome-all.min.js"></script>
<script src="{{URL('/')}}/js/custome.js"></script>
<script src="{{URL('/')}}/js/wow.js"></script>
<script src="{{URL('/')}}/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<script src="{{URL('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
              console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
          }
        );
        wow.init();

        function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
//Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();
        
      </script>
</html>
