<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Green Grapez">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Green Grapez">
<meta name="google-site-verification" content="-3fR2s0fAH-tDmr1Fkt1Zn9Zv3qA3tcabWHX8mpCd28" />
<link rel="shortcut icon" href="admin1/images/favicon.png"/>
<title>Green Grapez</title>

<!-- Bootstrap -->
<link href="{{URL('/')}}/admin1/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{URL('/')}}/admin1/css/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{URL('/')}}/admin1/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{URL('/')}}/admin1/css/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{URL('/')}}/admin1/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><i><img src="{{URL('/')}}/admin1/images/favicon.png" alt="logo"></i> <span>Green Grapez</span></a> </div>
          <div class="clearfix"></div>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-gift"></i> Products <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="{{URL('/')}}/admin/create/product">Create</a></li>
                    <li><a href="{{URL('/')}}/admin/view/product">View</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Users Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="view_user_list.html">View Users</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-shopping-cart"></i>Orders<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="{{URL('/')}}/admin/view/order/active">Active</a></li>
                    <li><a href="{{URL('/')}}/admin/view/order/new">New</a></li>
                    <li><a href="{{URL('/')}}/admin/view/order/completed">Completed</a></li>
                    <li><a href="{{URL('/')}}/admin/view/order/cancelled">Cancelled</a></li>
                    <li><a href="{{URL('/')}}/admin/view/order/refunded">Refunded</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Reporting <span class="fa fa-chevron-down"></span></a> </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu --> 
        </div>
      </div>
      
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
            <ul class="nav navbar-nav navbar-right">
              <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="{{URL('/')}}/images/favicon.png" alt="">Green Grapez <span class=" fa fa-angle-down"></span> </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                <li><a href="{{URL('/')}}/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation --> 
      
  @yield('content')

 <!-- footer content -->
 <footer>
    <div class="pull-right"> Copyright © 2017-2018 Green Grapez. All rights reserved. </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content --> 
</div>
</div>



<!-- jQuery --> 
<script src="{{URL('/')}}/admin1/js/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="{{URL('/')}}/admin1/js/bootstrap.min.js"></script> 
<!-- DateJS --> 
<script src="{{URL('/')}}/admin1/js/build/date.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="{{URL('/')}}/admin1/js/bootstrap-progressbar.min.js"></script> 
<!-- iCheck --> 
<script src="{{URL('/')}}/admin1/js/icheck.min.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="{{URL('/')}}/admin1/js/moment.min.js"></script> 
<script src="{{URL('/')}}/admin1/js/daterangepicker.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="{{URL('/')}}/admin1/js/custom.min.js"></script> 
<!-- Datatables --> 
<script src="{{URL('/')}}/admin1/js/jquery.dataTables.min.js"></script> 
<script src="{{URL('/')}}/admin1/js/dataTables.bootstrap.min.js"></script> 
<script src="{{URL('/')}}/admin1/js/dataTables.responsive.min.js"></script> 
<script src="{{URL('/')}}/admin1/js/responsive.bootstrap.js"></script> 
<script src="{{URL('/')}}/admin1/js/dataTables.scroller.min.js"></script>
</body>
</html>
