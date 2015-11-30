
<!DOCTYPE HTML>
<!--
  Strongly Typed by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Driving License</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}">
   <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
  </head>
  <body class="homepage">
    <div id="page-wrapper">

      <!-- Header -->
        <div id="header-wrapper">
          <div id="header" class="container">

            <!-- Logo -->
              <h1 id="logo"><!-- <a href="index.html"> -->Get your Driving License<!-- </a> --></h1>
              <p><a href="#" id = "fill" class="button icon fa-file">Fill Your Form</a> &nbsp  &nbsp <a href="#" id = "renew" class="button icon fa-file">Renew Form</a>   &nbsp  &nbsp <a href="#" id = "result" class="button icon fa-file">Get Result</a></p>

            <!-- Nav -->
             @include('layout.navigation')
              

          </div>
        </div>
        <!--form-->
        <div> @include('layout.fillForm') </div>
    </div>

           

      <!-- Footer -->
         <div id="footer"> @include('layout.footer') </div>

  

    <!-- Scripts -->
    <script type ="text/javascript">
      $(document).ready(function(){
        $("#form1").hide();
        $("#fill").click(function(){
          $("#form1").show();
          $('html,body').animate({
              scrollTop: $('#form1').offset().top
          }, 1000);
        });
      });
    </script>
      <script src="{{js/jquery.min.js"></script>
      <script src="js/jquery.dropotron.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/skel-viewport.min.js"></script>
      <script src="js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>