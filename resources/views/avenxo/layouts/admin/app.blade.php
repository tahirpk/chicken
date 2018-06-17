<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Netsol CMS Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
<link type="text/css" href="assets/plugins/form-pagedown/css/jquery.pagedown-bootstrap.css" rel="stylesheet">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/fonts/themify-icons/themify-icons.css')}}" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/css/styles.css')}}" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet" /> 						<!-- FullCalendar -->
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" /> 			<!-- jVectorMap -->
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/switchery/switchery.css')}}" rel="stylesheet" />   							<!-- Switchery -->
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/form-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet">    <!-- DateRangePicker -->
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->
<link type="text/css" href="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/clockface/css/clockface.css')}}" rel="stylesheet">
    </head>

    <body class="animated-content">
        
        @include(Config::get('config.template').'.common.admin.header')

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
                        <div class="sidebar">
	
	@include(Config::get('config.template').'.common.admin.left')

    <div class="widget" id="widget-progress">
        <div class="widget-heading">
            Progress
        </div>
        <div class="widget-body">

            <div class="mini-progressbar">
                <div class="clearfix mb-sm">
                    <div class="pull-left">Bandwidth</div>
                    <div class="pull-right">50%</div>
                </div>
                
                <div class="progress">    
                    <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
                </div>
            </div>
            <div class="mini-progressbar">
                <div class="clearfix mb-sm">
                    <div class="pull-left">Storage</div>
                    <div class="pull-right">25%</div>
                </div>
                
                <div class="progress">    
                    <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                </div>
            </div>

        </div>
    </div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        @yield('content')
                         <!-- #page-content -->
                    </div>
                    @include(Config::get('config.template').'.common.admin.footer')

                </div>
            </div>
        </div>

    
    <!-- Switcher -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
        <div class="demo-heading">Demo Settings</div>

        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>



    </div>
<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/jquery-1.10.2.min.js')}}"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/jqueryui-1.10.3.min.js')}}"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/bootstrap.min.js')}}"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/enquire.min.js')}}"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/velocityjs/velocity.min.js')}}"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/velocityjs/velocity.ui.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/wijets/wijets.js')}}"></script>     						<!-- Wijet -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/codeprettifier/prettify.js')}}"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/bootstrap-switch/bootstrap-switch.js')}}"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js')}}"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/iCheck/icheck.min.js')}}"></script>     					<!-- iCheck -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/nanoScroller/js/jquery.nanoscroller.min.js')}}"></script> <!-- nano scroller -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/application.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/demo/demo.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/demo/demo-switcher.js')}}"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<!-- Charts -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.min.js')}}"></script>             	<!-- Flot Main File -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.pie.min.js')}}"></script>             <!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.stack.min.js')}}"></script>       	<!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.orderBars.min.js')}}"></script>   	<!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.resize.min.js')}}"></script>          <!-- Flot Responsive -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.tooltip.min.js')}}"></script> 		<!-- Flot Tooltips -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/charts-flot/jquery.flot.spline.js')}}"></script> 				<!-- Flot Curved Lines -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/sparklines/jquery.sparklines.min.js')}}"></script> 			 <!-- Sparkline -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>       <!-- jVectorMap -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>   <!-- jVectorMap -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/switchery/switchery.js')}}"></script>     					<!-- Switchery -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/easypiechart/jquery.easypiechart.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/fullcalendar/moment.min.js')}}"></script> 		 			<!-- Moment.js Dependency -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>   			<!-- Calendar Plugin -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/demo/demo-index.js')}}"></script> 									<!-- Initialize scripts for this page-->



<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/form-daterangepicker/moment.min.js')}}"></script>              			<!-- Moment.js for Date Range Picker -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script> 			<!-- Color Picker -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/form-daterangepicker/daterangepicker.js')}}"></script>     				<!-- Date Range Picker -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>      			<!-- Datepicker -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/bootstrap-timepicker/bootstrap-timepicker.js')}}"></script>      			<!-- Timepicker -->
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script> <!-- DateTime Picker -->

<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/plugins/clockface/js/clockface.js')}}"></script>     								<!-- Clockface -->


<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/demo/demo-pickers.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/'.Config::get('config.template').'/admin/js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
tinymce.init({
  path_absolute: "{{URL::to('/')}}/",
  selector: 'textarea',
  height: 500,
  theme: 'modern',
          selector : "textarea#description",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  relative_urls:false,
        image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>
    <!-- End loading page level scripts-->

    </body>
</html>