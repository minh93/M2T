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
            <li class="active">
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      {{HTML::image('/images/banhmi.jpg')}}
      <div class="container"></div>
    </div>
    <div class="item">
      {{HTML::image('/images/noithatcafe.jpg')}}
      <div class="container"></div>
    </div>
    <div class="item">
      {{HTML::image('/images/thaibg.jpg')}}
      <div class="container"></div>
    </div>
    <div class="item">
      <!-- {{HTML::image('/images/buffetrestaurant.jpg')}} -->
      <div style="width: 1349px; height: 500px; background-color: red">        
        <div id="gmap_canvas" style="height:500px;width:auto;"></div>
        <style>#gmap_canvas img{max-width:none;background:none}</style>
        <script type="text/javascript"> 
          function initialize() {
            var myLatlng = new google.maps.LatLng(21.0226967,105.8369637);
            var mapOptions = {
              zoom: 16,
              center:  myLatlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };            

            var map = new google.maps.Map(document.getElementById('gmap_canvas'),
            mapOptions);            
            // Try W3C Geolocation (Preferred)
            if(navigator.geolocation) {
              browserSupportFlag = true;
              navigator.geolocation.getCurrentPosition(function(position) {
                initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                var marker = new google.maps.Marker({
                  position: initialLocation,
                  title:"Bạn đang ở đây!"
                });
                map.setCenter(initialLocation);
                marker.setMap(map);
              }, function() {
                handleNoGeolocation(browserSupportFlag);
              });
            }else {
              browserSupportFlag = false;
              handleNoGeolocation(browserSupportFlag);
            }
            function handleNoGeolocation(errorFlag) {
              if (errorFlag == true) {
                alert("Không tìm ra vị trí.");
                initialLocation = myLatlng;
              } else {
                alert("Bạn ở sao Hỏa à! Tôi để bạn ở Hà Nội nhé :)");
                initialLocation = myLatlng;
              }
              map.setCenter(initialLocation);
            }
            //Get all place and draw to map
            $.getJSON("dev/allplace", function (data) {
              if (data) {                
                  $.each(data, function (index, object) {
                      //alert(object.tName)
                  });
              } else {

              }
            });
          }// End load script

          function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
          'callback=initialize';
          document.body.appendChild(script);
          }

          window.onload = loadScript;
        </script>
      </div>
      <div class="container"></div>
    </div>
  </div>
  <div class="carousel-caption">
    <form role="form" class="form-inline" method="GET" action="searchResults">
      <div class="form-group">
        <input id="autocomplete-ajax" name='query' type="text input" class="form-control" placeholder="Tìm kiếm..."></div>
      <button id="search-button" type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </form>
    <div id="search-trend">
      <span class="label label-default">#giare</span>
      <span class="label label-default">#tiennghi</span>
      <span class="label label-default">#henho</span>
      <span class="label label-default">#tiepkhach</span>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!-- /.carousel -->
@stop
@section('recipe-region')
<div class="row-cut">
  <h1 class="cut-block">
    Món ngon nổi bật
  </h1>
</div>
<div class="items container">
  @foreach($recipeTopics as $topic)
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
@section('place-region')
<div class="row-cut">
  <h1 class="cut-block">
    Địa chỉ thú vị
  </h1>
</div>
<div class="items container">
   @foreach($placeTopics as $topic)
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
@section('impression-region')
<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img class="img-circle" src="{{URL::to('/')}}/images/impression/sangchanh.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    <h2>Ăn sang chảnh</h2>
    <p>
      Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
    </p>
    <p>
      <a class="btn btn-default" href="#" role="button">Xem thêm &raquo;</a>
    </p>
  </div>
  <!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="img-circle" src="{{URL::to('/')}}/images/impression/kinhte.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    <h2>Chơi hết mình</h2>
    <p>
      Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
    </p>
    <p>
      <a class="btn btn-default" href="#" role="button">Xem thêm &raquo;</a>
    </p>
  </div>
  <!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="img-circle" src="{{URL::to('/')}}/images/impression/khampha.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    <h2>Tour khám phá</h2>
    <p>
      Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
    </p>
    <p>
      <a class="btn btn-default" href="#" role="button">Xem thêm &raquo;</a>
    </p>
  </div>
  <!-- /.col-lg-4 -->
</div>
<!-- /.row -->
@stop
@section('feature-region')
<div class="row-cut">
  <h1 class="cut-block">
    Hôm nay có gì
  </h1>
</div>
@foreach($newestTopics as $topic)
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">
      {{$topic->tName}}
    </h2>
    <p class="lead">
      {{$topic->tDescription}}
    </p>
    <div class="comment-box">
      <div class="comment-box-header">
      <h4>Cộng đồng</h4>
      </div>
      <table class="table table-striped comment-list">
        <tr>
          <td>Ngon thế này cơ á <br/></td><td>bởi <a>PhamMinh</a></td>
        </tr>
        <tr>
          <td>Ngon thế này cơ á</td><td>bởi <a>PhamMinh</a></td>
        </tr>
      </table>
      <div class="comment-box-new">
        <form>
          <input type="text" class="form-control comment-new" />
          <input type="submit" class="btn btn-default comment-btn" value="Chia sẻ" /> bởi <a>ẩn danh</a>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <img class="pic" src="{{URL::to('/')}}/images/post-img/{{$topic->getAllPicPath->first()->imgPath}}"/>
  </div>
</div>
@endforeach
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-5">
    <img class="featurette-image img-responsive" src="{{URL::to('/')}}/images/feature/chocolate-stout-pancakes-ftr.jpg"></div>
  <div class="col-md-7">
    <h2 class="featurette-heading">
      Tận hưởng mùa đông
      <span class="text-muted">với chocolate nóng.</span>
    </h2>
    <p class="lead">
      Với nhiều địa điểm rải rác xung quanh Grand Palace trong thành phố Luxembourg, Chocolate House là một nơi không thể bỏ qua nếu bạn đặt chân đến đất nước nhỏ bé xinh đẹp này. Điểm đặc biệt nhất tại Chocolate House là bạn có thể chọn "chocolate spoon" - một chiếc thìa gỗ đang cắm sẵn vào một miếng chocolate và có nhiều hương vị cũng như chủng loại khác nhau. Sau khi bạn đã chọn xong "chocolate spoon" cho mình, bạn sẽ được phục vụ mang đến một cốc sữa nóng và tất cả những gì còn lại là nhúng chiếc thìa vào cốc sữa và ngắm nhìn "niềm hạnh phúc" của bạn tan chảy.
    </p>
    <div class="comment-box">
      <div class="comment-box-header">
      <h4>Cộng đồng</h4>
      </div>
      <table class="table table-striped comment-list">
        <tr>
          <td>Ngon thế này cơ á <br/></td><td>bởi <a>PhamMinh</a></td>
        </tr>
        <tr>
          <td>Ngon thế này cơ á</td><td>bởi <a>PhamMinh</a></td>
        </tr>
      </table>
      <div class="comment-box-new">
        <form>
          <input type="text" class="form-control comment-new" />
          <input type="submit" class="btn btn-default comment-btn" value="Chia sẻ" /> bởi <a>ẩn danh</a>
        </form>
      </div>
    </div>
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">
      Ngon lạ.
      <span class="text-muted">lẩu bò nhúng chanh leo.</span>
    </h2>
    <p class="lead">
      Quán lẩu bò mang tên Bò 68, nằm ở… 68 Lê Văn Hưu. Thoạt tiên, các bạn có thể sẽ hơi bất ngờ bởi nhìn quán lẩu này… chẳng giống quán lẩu chút nào. Quán khiến chúng ta nghĩ đến những tiệm bít tết ngon lành với lối trang trí đơn giản, trẻ trung và gọn gàng. Chưa kể đến việc, quán có không gian quán rộng rãi, phù hợp để nhiều nhóm bạn có thể đến lai rai mà chẳng sợ phải chen chúc, khó chịu vì chật hẹp.
    </p>
    <div class="comment-box">
      <div class="comment-box-header">
      <h4>Cộng đồng</h4>
      </div>
      <table class="table table-striped comment-list">
        <tr>
          <td>Ngon thế này cơ á <br/></td><td>bởi <a>PhamMinh</a></td>
        </tr>
        <tr>
          <td>Ngon thế này cơ á</td><td>bởi <a>PhamMinh</a></td>
        </tr>
      </table>
      <div class="comment-box-new">
        <form>
          <input type="text" class="form-control comment-new" />
          <input type="submit" class="btn btn-default comment-btn" value="Chia sẻ" /> bởi <a>ẩn danh</a>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" src="{{URL::to('/')}}/images/feature/ngon-la-voi-mon-lau-bo-nhung-chanh-leo.jpg"></div>
</div>
<hr class="featurette-divider">
@stop