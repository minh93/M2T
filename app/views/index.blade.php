@extends('layout')
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
          <a class="navbar-brand" href="#">Vi vu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index">Trang chủ</a></li>
            <li><a href="about">Liên hệ</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khám phá <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>            
          </ul>      
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      </div>
    </div>
@stop

@section('slide-banner')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          {{HTML::image('/images/banhmi.jpg')}}
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          {{HTML::image('/images/canhga.jpg')}}
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          {{HTML::image('/images/thaibg.jpg')}}
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->	
@stop
@section('recipe-region-dev')
<div class="row-cut">
      <h1 class="cut-block">
        <span class="cut-block-content">Recipe</span>
      </h1>
  </div>
<div class="items container">
	@foreach($topics as $topic)
		<div class="col-md-1 item" >			
			<img class="pic" src="{{Request::url()}}/images/post-img/{{$topic->getAllPicPath->first()->imgPath}}"/>
		</div>		
	@endforeach
</div>
@stop
@section('recipe-region')
<div class="row-cut">
      <h1 class="cut-block">
        <span class="cut-block-content">Recipe</span>
      </h1>
  </div>
<div class="items container">
	<div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
	<div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
  <div class="col-md-2 item" >
    <img class="pic" src="{{Request::url()}}/images/post-img/veget.jpg"/> 
    <div class="pic-des"> 
      <p>Lorem ipsum dolosit amet</p>
    </div>
  </div>
</div>
@stop
@section('place-region')
<div class="row-cut">
      <h1 class="cut-block">
        <span class="cut-block-content">Place</span>
      </h1>
  </div>
<div class="items container">
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>
  <div class="col-md-2 item" ></div>  
</div>
@stop
@section('impression-region')
<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
@stop
@section('feature-region')
<hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
<hr class="featurette-divider">
@stop