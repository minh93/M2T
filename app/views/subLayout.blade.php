<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
<head>
    <title>Vivu Ha Noi</title>
    {{HTML::style('/css/bootstrap.css')}}   
    {{HTML::style('/css/carousel.css')}}
    {{HTML::style('/css/customize.css')}}
    {{HTML::style('/css/customize_detailed.css')}}
    {{HTML::script('/js/jquery.min.js')}}
    {{HTML::script('/js/bootstrap.min.js')}}
    {{HTML::script('/js/jqfloat.js')}}
</head>
<body>
    <!-- Nav-bar region
    ================================================== -->
    @yield('nav-bar')
    <!-- Carousel
    ================================================== -->
    @yield('slide-banner')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    @yield('detailed-item')
    <!-- Wrap related content. -->
    @yield('related')
    <footer id="footer" class="container">
    <div class="row">
        <p class="pull-right">            
            <a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </p>    
        <p>
            &copy; 2014 Company, Inc. &middot;
            <a href="#">Privacy</a>
            &middot;
            <a href="#">Terms</a>
        </p>
    </div>
    </footer>

    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>