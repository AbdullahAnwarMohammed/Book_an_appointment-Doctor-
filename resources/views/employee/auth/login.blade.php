<!DOCTYPE html>
<!--
Template Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/modern_admin
Renew Support: https://1.envato.market/modern_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="rtl">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from demos.pixinvent.com/modern-html-admin-template/html/rtl/hospital-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 04:20:10 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>الموظف</title>
    <link rel="apple-touch-icon" href="/backend/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://demos.pixinvent.com/modern-html-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css-rtl/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/assets//css/style-rtl.css">
    <!-- END: Custom CSS-->
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap');

        body,
        p,a,h1,h2,h3,h4,h5,h6,span{
            font-family: "Noto Kufi Arabic", sans-serif ;

        }
    
    
        html body.bg-full-screen-image{background:url(/backend/app-assets/images/backgrounds/bg-14.jpg) center center no-repeat fixed;background-size:cover}
        
    </style>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">
            <img src="/backend/app-assets/images/logo/logo-dark.png" alt="branding logo">
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>مرحباً بك</span></h6>
        </div>
        <div class="card-content">
          <div class="text-center">
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                class="la la-facebook"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                class="la la-twitter"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                class="la la-linkedin font-medium-4"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                class="la la-github font-medium-4"></span></a>
          </div>
          <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>تسجيل الدخول كـ موظف</span></p>
          <div class="card-body">
            <form class="form-horizontal" autocomplete="off" action="{{ route('employee.login') }}" method="POST" >
                @error('email')
                <div class="alert alert-danger fw-bold">{{ $message }}</div>
            @enderror
            
                @csrf
           
                <fieldset class="form-group position-relative has-icon-left">
                <input type="text" value="01012881643" class="form-control" id="user-name" placeholder="ادخل رقم الهاتف" name="email" required>
        
                <div class="form-control-position">
                  <i class="la la-user"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="password" value="123456" class="form-control" id="user-password" name="password" placeholder="ادخل كلمة المرور" required>
              
                <div class="form-control-position">
                  <i class="la la-key"></i>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                  <fieldset>
                    <input type="checkbox" id="remember-me" class="chk-remember">
                    <label for="remember-me"> تذكرني</label>
                  </fieldset>
                </div>
             
              </div>
              <button type="submit" class="btn btn-success btn-block"><i class="ft-unlock"></i> دخول</button>
            </form>
          </div>
      
       
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/backend/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="/backend/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/backend/app-assets/js/core/app-menu.min.js"></script>
    <script src="/backend/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/backend/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from demos.pixinvent.com/modern-html-admin-template/html/rtl/hospital-menu-template/login-with-bg-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 04:20:10 GMT -->
</html>