<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{!! asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset('theme/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('theme/vendors/nprogress/nprogress.css') !!}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{!! asset('theme/vendors/google-code-prettify/bin/prettify.min.css') !!}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{!! asset('theme/build/css/custom.min.css') !!}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        @include('layout.header')
        @include('layout.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{!! asset('theme/vendors/jquery/dist/jquery.min.js') !!}"></script> 
    <!-- Bootstrap -->
    <script src="{!! asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <!-- FastClick -->
    <script src="{!! asset('theme/vendors/fastclick/lib/fastclick.js') !!}"></script>
    <!-- NProgress -->
    <script src="{!! asset('theme/vendors/nprogress/nprogress.js') !!}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{!! asset('theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') !!}"></script>
    <script src="{!! asset('theme/vendors/jquery.hotkeys/jquery.hotkeys.js') !!}"></script>
    <script src="{!! asset('theme/vendors/google-code-prettify/src/prettify.js') !!}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{!! asset('theme/build/js/custom.min.js') !!}"></script>
    <!-- @stack('footer-scripts') -->
  </body>
</html>