<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The great programmer Admin">
    <meta name="author" content="Scofield">
    <meta name="keyword" content="Dashboard, Admin, Template, ">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title> DGP Admin</title>

    <!-- Bootstrap CSS -->  
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="css/font-awesome.min.css')}}" rel="stylesheet" />    
    <link href="{{asset('css/font-awesomeadmin.css')}}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carouseladmin.css')}}" type="text/css">
	<link href="{{asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">
	<link href="{{asset('css/widgets.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleadmin.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
	<link href="{{asset('css/xcharts.min.css')}}" rel=" stylesheet">	
	<link href="{{asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="{{asset('js/html5shiv.js')}}"></script>
      <script src="{{asset('js/respond.min.js')}}"></script>
      <script src="{{asset('js/lte-ie7.js')}}"></script>
    <![endif]-->
  </head>
<body>
<!-- container section start -->
  <section id="container" class="">
  @include('admin.header.header')
  @include('admin.sidebar.sidebar')
  </section>
  
  <!-- javascripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/jquery-ui-1.10.4.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- nice scroll -->
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('js/owl.carouseladmin.js')}}" ></script>
    <!-- jQuery full calendar -->
    <<script src="{{asset('js/fullcalendar.min.js')}}"></script> <!-- Full Google Calendar - Calendar -->
	<script src="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('js/calendar-custom.js')}}"></script>
	<script src="{{asset('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>
	<script src="{{asset('assets/chart-master/Chart.js')}}"></script>
   
    <!--custome script for all page-->
    <script src="{{asset('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>
    <script src="{{asset('js/easy-pie-chart.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('js/xcharts.min.js')}}"></script>
	<script src="{{asset('js/jquery.autosize.min.js')}}"></script>
	<script src="{{asset('js/jquery.placeholder.min.js')}}"></script>
	<script src="{{asset('js/gdp-data.js')}}"></script>	
	<script src="{{asset('js/morris.min.js')}}"></script>
	<script src="{{asset('js/sparklines.js')}}"></script>	
	<script src="{{asset('js/charts.js')}}"></script>
	<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
</body>
</html>