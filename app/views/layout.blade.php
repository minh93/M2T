<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
<head>
    <title>Vivu Ha Noi</title>
    {{HTML::style('/css/bootstrap.css')}}   
    {{HTML::style('/css/carousel.css')}}
    {{HTML::style('/css/customize.css')}}
    {{HTML::script('/js/jquery-1.8.2.min.js')}}
    {{HTML::script('/js/bootstrap.min.js')}}
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

    <div class="container marketing">
        @yield('impression-region')
        <!-- START THE FEATURETTES -->
        @yield('feature-region')
        <!-- Recipe region
    ================================================== -->
        @yield('recipe-region')
        <!-- Place region
    ================================================== -->
        @yield('place-region')
        <!-- /END THE FEATURETTES -->        
        <!-- FOOTER -->        
    </div>
    <!-- /.container -->
    <footer id="footer" class="container-fluid">
            <div class="row">
                <p class="pull-right">
                    <a href="#">
                        <span class="glyphicon glyphicon-chevron-up"></span>
                    </a>
                </p>
                <p>
                    &copy; 2014 Company, Inc. &middot;
                    <a href="#">Privacy</a>
                    &middot;
                    <a href="#">Terms</a>
                </p>
            </div>
        </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{HTML::script('/js/jquery.autocomplete.js')}} 
    <script type="text/javascript">
        $('#autocomplete-ajax').autocomplete({
            serviceUrl: 'dev/allquery',
            onSelect: function (suggestion) {
                //Do nothing
            }
        });
    </script>
</body>
</html>