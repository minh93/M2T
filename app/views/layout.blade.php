<!DOCTYPE html>
<html>
	<meta charset="utf-8" />
<head>
	<title>Vivu Ha Noi</title>
	{{HTML::style('/css/bootstrap.min.css')}}
	{{HTML::style('/css/layout.css')}}	
	{{HTML::script('/js/jssor.js')}}
	{{HTML::script('/js/jssor.slider.js')}}
	{{HTML::script('/js/jquery-2.1.1.min.js')}}
	<script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>
    <script type="text/javascript">    	
    	
    </script>
</head>
<body>
	<div class="container-fluid">
		<div id="header" class="row"></div>
		<section id="hero-unit" class="row">
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width:1349px;
        height: 664px; ">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1349px; height: 664px;
            overflow: hidden;">
					<div>{{HTML::image('/images/banhmi.jpg')}}</div>
					<div>{{HTML::image('/images/canhga.jpg')}}</div>
					<div>{{HTML::image('/images/thaibg.jpg')}}</div>
					<div>{{HTML::image('/images/titebild.jpg')}}</div>
				</div>

				<!-- Arrow Navigator Skin Begin -->
				<style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l              (normal)
            .jssora03r              (normal)
            .jssora03l:hover        (normal mouseover)
            .jssora03r:hover        (normal mouseover)
            .jssora03ldn            (mousedown)
            .jssora03rdn            (mousedown)
            */
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../public/images/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
				<!-- Arrow Left -->
				<span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 600px; left: 8px;"></span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 600px; right: 8px"></span>
				<!-- Arrow Navigator Skin End -->
				<a style="display: none" href="http://www.jssor.com">jquery slider example</a>
				<!-- Trigger -->
				<script>jssor_slider1_starter('slider1_container');</script>
			</div>
			<div id="hero-unit-content" class="">
				<div id="menu-bar" class="navbar">
					<div class="nav-inner">
						<ul class="nav">
							<li class=" col-md-1">
								<a tabindex="-1" href="#">Action</a>
							</li>
							<li class=" col-md-2">
								<a tabindex="-1" href="#">Another action</a>
							</li>
							<li class=" col-md-2">
								<a tabindex="-1" href="#">Something else here</a>
							</li>
							<li class="divider" class=" col-md-2"></li>
							<li class=" col-md-2">
								<a tabindex="-1" href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="welcom-bar" class="">
					<blockquote class="col-md-4">
						<h1>Lorem ipsum dolosit amet</h1>
						<footer>
							Someone famous in
							<cite title="Source Title">Source Title</cite>
						</footer>
					</blockquote>
				</div>
				<div class="clearfix"></div>
				<div id="search-bar" class="">
					<form action="#" class="form-inline col-md-4">
						<input type="text" class="form-control" placeholder="Malice in wonderland !"/>						
						<input type="submit" id="btn-search" class="btn btn-default" value="Search"/>
					</form>
				</div>
			</div>
			<!--End of hero-unit-content-->
		</section>
		<!--End of hero-unit -->		
		<div class="row cut">
			<h1 class="cut-block">
				<span class="cut-block-content">Recipe</span>
			</h1>
		</div>
		<section id="recipe" class="row">
			@yield('recipe')
		</section><!--End of recipe-->
		<div class="row cut">
			<h1 class="cut-block">
				<span class="cut-block-content">Place</span>
			</h1>
		</div>
		<section id="place" class="row">
			@yield('place')
		</section>
		<div id="reference" class="row"></div>
		<div id="footer" class="row"></div>	
	</div>
</body>
</html>