<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link href="{{asset('backend/asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('backend/asset/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('backend/asset/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/asset/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('backend/asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/asset/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('backend/asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('backend/asset/css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('backend/asset/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('backend/asset/css/fullcalendar.css')}}">
  <link href="{{asset('backend/asset/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('backend/asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('backend/asset/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/asset/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('backend/asset/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
      @include('backend.parts.header')
    <!--header end-->

    <!--sidebar start-->
 @include('backend.parts.sidebar')
    <!--sidebar end-->
  <section id="container" class="">

    @yield('body')
  </section>
@include('backend.parts.footer')
