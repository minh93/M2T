@extends('subLayout')
@section('nav-bar')
<div class="navbar-wrapper">
  <div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid" id="nav-bar-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vivu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="index">Trang chủ</a>
            </li>
            <li>
              <a href="about">Liên hệ</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Khám phá
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Action</a>
                </li>
                <li>
                  <a href="#">Another action</a>
                </li>
                <li>
                  <a href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">Separated link</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">One more separated link</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> </div>        
      <!-- /.container-fluid --> </nav>
  </div>
</div>
@stop
@section('slide-banner')
<div id="mini-banner">{{HTML::image('/images/banhmi_minibanner.jpg')}}</div>
@stop
@section('detailed-item')
  <div class="row-cut">
    <h1 class="cut-block">
      Kết quả tìm kiếm
    </h1>
  </div>
  <div class="container items">
    @foreach($topics as $topic)
    <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/{{$topic->
    getAllPicPath->first()->imgPath}}"/>
    <div class="pic-des">
      <p>{{$topic->tName}}</p>
    </div>
  </div>
    @endforeach
  </div>
@stop
@section('related')
<div class="row-cut">
  <h1 class="cut-block">
    Có liên quan
  </h1>
</div>
<div class="items container">
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{URL::to('/')}}/images/post-img/veget.jpg"/>
    <div class="pic-des">
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
</div>
@stop
@section('map')
<div class="row-cut">
  <h1 class="cut-block">
    <span class="cut-block-content">Địa điểm gần bạn</span>
  </h1>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div class="container">
<div class="row" style="overflow:hidden;height:500px;width:auto;">
  <div id="gmap_canvas" style="height:500px;width:auto;"></div>
  <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>  
</div>
</div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(21.0226967,105.8369637),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(21.0226967,105.8369637)});infowindow = new google.maps.InfoWindow({content:"<b>Hà Nội</b>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
@stop