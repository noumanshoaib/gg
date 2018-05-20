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
<meta name="google-site-verification" content="-3fR2s0fAH-tDmr1Fkt1Zn9Zv3qA3tcabWHX8mpCd28" />
<link rel="shortcut icon" href="admin1/images/favicon.png"/>
<title>Green Grapez</title>
    <!-- Bootstrap -->
<link href="admin1/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="admin1/css/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="admin1/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->
<link href="admin1/css/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="admin1/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form action="{{URL('/')}}/admin/login" method="post">
            {{csrf_field()}}
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success submit" >Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h1><i><img src="admin1/images/logo.png" alt="logo" style="max-width:250px;"></i></h1>
                  <p>Copyright © 2017-2018 Green Grapez. All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
