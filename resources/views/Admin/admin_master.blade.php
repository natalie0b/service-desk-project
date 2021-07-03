<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Dashboard  | NOB Manager</title>
    <link rel="apple-touch-icon" href="{{asset ('theme/backend/app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('theme/backend/app-assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset ('theme/backend/app-assets/vendors/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset ('theme/backend/app-assets/css/themes/vertical-gradient-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('theme/backend/app-assets/css/themes/vertical-gradient-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('theme/backend/app-assets/css/pages/dashboard.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset ('theme/backend/app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-gradient-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.body.header')


    <!-- END: Header-->
  



    <!-- BEGIN: SideNav-->
  @include('admin.body.sidebar')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
       @yield('admin')
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    @include('admin.body.footer')

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset ('theme/backend/app-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset ('theme/backend/app-assets/vendors/chartjs/chart.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset ('theme/backend/app-assets/js/plugins.js')}}"></script>
    <script src="{{asset ('theme/backend/app-assets/js/search.js')}}"></script>
    <script src="{{asset ('theme/backend/app-assets/js/custom/custom-script.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset ('theme/backend/app-assets/js/scripts/dashboard-ecommerce.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>