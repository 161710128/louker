@extends('layouts.frontend')
@section('content')
<div class="banner-wrapper">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> 
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"><img src="{{ asset('pro/images/banner1.jpg')}}" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>Kami Menawarkan Pekerjaan Sekarang!</h1>
          <p>Cari pekerjaan Sesuai Bidang Mu</p>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"><img src="{{ asset('pro/images/banner2.jpg')}}" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>Kami Menawarkan Pekerjaan Sekarang!</h1>
          <p>Cari pekerjaan Sesuai Bidang Mu</p>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"><img src="{{ asset('pro/images/banner3.jpg')}}" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>Kami Menawarkan Pekerjaan Sekarang!</h1>
          <p>Cari pekerjaan Sesuai Bidang Mu</p>
        </div>
      </div>
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<!-- Banner Wrapper End --> 
<!-- Professional Search Start -->
<div class="professional-search">
  <div class="container">
    <div class="search-bg">
      <h2>Cari Yang  Profesioal</h2>
      <div class="form">
        <div class="form-group">
          <input class="form-control" id="professionals" placeholder="All Professionals" type="text">
        </div>
        <div class="form-group">
          <input class="form-control" id="anylocation" placeholder="Any Location" type="text">
        </div>
        <div class="form-group">
          <select id="selectLocation" class="form-control">
            <option>ALL Service</option>
            <option>ALL Service1</option>
            <option>ALL Service2</option>
            <option>ALL Service3</option>
            <option>ALL Service4</option>
            <option>ALL Service5</option>
            <option>ALL Service6</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- Professional Search End --> 
<!-- Callout Wrapper Start -->

<!-- Callout Wrapper End --> 
<!-- Our counters -->

<!-- Our counters End --> 
<!-- Latest jobs Wrapper Start -->

<!-- Latest jobs Wrapper End --> 
<!-- Video Wrapper Start -->

<!-- Video Wrapper End --> 
<!-- Popular Search Wrapper Start -->

<!-- Popular Search Wrapper End --> 
<!-- Testimonials Wrapper Start -->

<!-- Testimonials Wrapper End --> 
<!-- App Wrapper Start -->

<!-- App Wrapper End --> 
<!-- Subscribe Wrapper Start -->

<div class="inner-page-wrapper latest-jobs-wrapper">
  <div class="container">
    @foreach ($lowongan as $data)
    <div class="single-jobs"> <i class="fa fa-users"></i>
      <div class="job-heading">
        <h3>{{$data->nama_low}}</h3>
        <p>{!! str_limit($data->deskripsi_iklan,150)!!}</p>
      </div>
      <div class="our-location color1"> <span class="fa fa-calendar" aria-hidden="true"></span>
        <div class="location-content">
          <h3>19 Aug, 2016</h3>
          <a href="{{url('rincian_lowongan',$data->id)}}">Lihat Selengkapnya</a> </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Subscribe Wrapper End --> 
<!-- blog Wrapper Start -->
<div class="blog-wrapper">
  <div class="container">
    <div class="title">
      <h2>Perusahaan <span>Terbaru</span></h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
    @foreach ($perusahaan as $data)
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="{{ asset('assets/img/logopers/'.$data->logo) }}" style="height:350px"/> </div>
          <div class="blog-caption">
          <h3><a href="{{url('rincian_pers',$data->id)}}">{!! str_limit($data->deskripsi, 20 )  !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center"> <a href="#" class="btn-one">Visit Our Blog</a></div>
  </div>
</div>
@endsection