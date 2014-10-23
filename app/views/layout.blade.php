<!DOCTYPE html>
<html>
	<meta charset="utf-8" />
<head>
	<title>Vivu Ha Noi</title>
	{{HTML::style('/css/bootstrap.css')}}	
	{{HTML::style('/css/carousel.css')}}
	{{HTML::style('/css/customize.css')}}
	{{HTML::script('/js/jquery.min.js')}}
	{{HTML::script('/js/bootstrap.min.js')}}	
	
</head>
<body>
	<!-- Nav-bar region
    ================================================== -->
	@yield('nav-bar')
    <!-- Carousel
    ================================================== -->
    @yield('slide-banner')
    <!-- Recipe region
    ================================================== -->    
    @yield('recipe-region')

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    @yield('impression-region')

      <!-- Place region
    ================================================== -->    
    @yield('place-region')

      <!-- START THE FEATURETTES -->

    @yield('feature-region')

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
</body>
</html>