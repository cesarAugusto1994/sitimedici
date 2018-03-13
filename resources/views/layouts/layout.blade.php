<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="background-main no-js">
<head>
    <title>{{ config('app.name', 'Sindicato') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="{{asset('css/framework/addons/camera/css/camera.css')}}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="framework/js/html5shiv.js"></script>
        <script src="framework/js/respond.min.js"></script>
    <![endif]-->

    <link href="{{asset('css/social-icons.css')}}" rel="stylesheet" />

    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <link href="{{asset('css/theme-color.css')}}" rel="stylesheet" />

    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

    <link href="{{asset('css/firefox.css')}}" rel="stylesheet" />

    <script src="{{asset('css/framework/js/modernizr.js')}}"></script>
</head>


<body>
    <!--<canvas id="snowfall"></canvas>-->

    <a class="sr-only" href="#content"></a>

    <div class="header-background">

        <div class="btn-mobile-menu visible-sm visible-xs">
            <button type="button" class="menu-btn">
                <i class="icon-menu"></i>
                <span>Menu</span>
            </button>
        </div>

        <!-- Top Menu -->
        <nav class="social-menu navbar">
            <h2 class="hidden">Top Navigation</h2>

            <div class="container">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="social-menu-navbar-collapse" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-left visible-lg visible-md">
                        <li class="color-theme active"><a href="#">Inicio <span class="nav-line"></span></a></li>
                        <li class="color-2"><a href="{{ route('home_admin') }}">Administrativo <span class="nav-line"></span></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right visible-lg visible-md visible-sm">

                        <li class="search dropdown">
                            <div class="mask-background animated lightSpeedIn"></div>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                            <ul class="dropdown-menu" data-dropdownanimation="true" data-animation="fadeInLeft">
                                <li>
                                    <form class="navbar-form navbar-right" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search" required="required" />
                                            <button type="submit" class="btn-search"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <li class="social-icons">
                            <ul class="list-inline clearfix">

                                <li class="tooltip_item fb-metro-but-16" data-toggle="tooltip" data-placement="bottom" title="facebook">
                                    <div class="mask-background" data-animation="lightSpeedIn"></div>
                                    <a href="#"><i class="zoc-facebook"></i></a>
                                </li>

                                <li class="tooltip_item twitter-metro-but-16" data-toggle="tooltip" data-placement="bottom" title="twitter">
                                    <div class="mask-background" data-animation="lightSpeedIn"></div>
                                    <a href="#"><i class="zoc-twitter"></i></a>
                                </li>

                                <li class="tooltip_item googleplus-metro-but-16" data-toggle="tooltip" data-placement="bottom" title="google+">
                                    <div class="mask-background animated lightSpeedIn"></div>
                                    <a href="#"><i class="zoc-gplus"></i></a>
                                </li>

                                <li class="tooltip_item youtube-metro-but-16" data-toggle="tooltip" data-placement="bottom" title="youtube">
                                    <div class="mask-background animated lightSpeedIn"></div>
                                    <a href="#"><i class="zoc-youtube"></i></a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
            <!-- /.navbar-collapse -->

        </nav>

        <!-- Breaking News -->
        <section class="tkr-breaking-news hidden-xs">
            <div class="container">

                <div class="title">
                    <h3>Ultimas Noticias</h3>
                </div>

                <div id="divBreakingNewsTicker" class="content">
                    <ul id="js-news" class="js-hidden">
                        <li><a href="#">
                            <img src="" data-src="/js/holder.js/50x41" class="animated fadeIn" />Noticia 1</a></li>
                        <li><a href="#">
                            <img src="" data-src="/js/holder.js/50x41" class="animated fadeIn" />Noticia 2</a></li>
                        <li><a href="post-review.html">
                            <img src="" data-src="/js/holder.js/50x41" class="animated fadeIn" />Noticia 3</a></li>
                        <li><a href="#">
                            <img src="" data-src="/js/holder.js/50x41" class="animated fadeIn" />Noticia 4</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Site Logo -->
        <header class="container header-logo">
            <div class="logo" itemscope itemtype="http://schema.org/Brand">
                <h1 class="hidden" itemprop="name">SitiMedici</h1>
                <a href="#">
                    <img itemprop="logo" class="site-logo" src="http://sitimeci.com.br/lgo_web.jpg" data-src="http://sitimeci.com.br/lgo_web.jpg" alt="main-logo"  style="width: 200px; height: 90px;"/>
                    <img itemprop="logo" class="site-logo-retina" src="http://sitimeci.com.br/lgo_web.jpg" data-src="http://sitimeci.com.br/lgo_web.jpg" alt="main-logo" style="width: 200px; height: 90px;" />
                </a>
            </div>

            <!--<div class="advertise-790 visible-lg">
                <a href="#">
                    <img src="" data-src="holder.js/790x90/sky" /></a>
            </div>-->
        </header>

        @include('layouts.includes.menu')
        <!-- Mobile-Menu (Close) Site Overlay -->
        <div class="site-overlay"></div>


    </div>


    <!-- Main Container -->
    <div class="container main-site-container" itemscope itemtype="http://schema.org/CreativeWork">

        <div class="row">

            @yield('content')

        </div>

        @include('layouts.includes.footer')


    </div>



    <div class="btn-goto-top border-radius-2px">
        <i class="icon-arrow-up7"></i>
    </div>


    <!-- Body Scripts -->
    <script src="{{asset('css/framework/js/jquery-2.0.3.min.js')}}"></script>
    <script src="{{asset('css/framework/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('css/framework/js/jquery.easing.1.3.js')}} "></script>

    <script src="{{asset('css/framework/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Slider -->
    <script src="{{asset('css/framework/addons/camera/js/camera.min.js')}}"></script>

    <!-- OWL Carousel -->
    <script src="{{asset('css/framework/addons/owl/owl.carousel.min.js')}}"></script>

    <!-- Breaking News Ticker -->
    <script src="{{asset('css/framework/addons/breaking-news-ticker/jquery.ticker.js')}}"></script>

    <!-- Mobile Menu -->
    <script src="{{asset('css/framework/addons/mobile-menu/pushy.js')}}"></script>

    <!-- Show On Scroll -->
    <script src="{{asset('css/framework/addons/show-on-scroll/jquery.appear.js')}}"></script>

    <!-- Holder JS -->
    <script src="{{asset('js/holder.js')}}"></script>
    <script src="{{asset('css/framework/js/serpentsoft-scripts.js')}}"></script>


    <script>
        jQuery(function () {

            jQuery('#camera_wrap_1').camera({
                //thumbnails: false,
                //height: '500px',
                //loader: 'pie',
                //pagination: true,
                //time: 7000,	//milliseconds between the end of the sliding effect and the start of the nex one
                //transPeriod: 800,	//lenght of the sliding effect in milliseconds
                //hover: true,	//true, false. Puase on state hover. Not available for mobile devices

                //autoAdvance: false,	//true, false Auto Play
                //mobileAutoAdvance: false, //true, false. Auto-advancing for mobile devices

                //fx: 'random',	//'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight',
                //// 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft',
                ////'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse',
                ////'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'

                ////you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'

                alignment: 'center',           //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
                autoAdvance: false, //true, false Auto Play
                mobileAutoAdvance: true,
                barDirection: 'leftToRight',   //'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
                barPosition: 'bottom',         //'left', 'right', 'top', 'bottom'
                cols: 6,                      //nr of cols
                rows: 4,					//nr of rows
                slicedCols: 12,
                slicedRows: 8,
                easing: 'easeInOutExpo',      //all easings
                mobileEasing: '',
                fx: 'random',              //'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight', 'scrollLeft', 'scrollRight', 'scrollHorz', 'scrollBottom', 'scrollTop'
                mobileFx: '',
                hover: true, //true, false. Puase on state hover. Not available for mobile devices
                navigation: true,
                navigationHover: true,
                mobileNavHover: true,
                pagination: true,
                thumbnails: false,
                playPause: false,
                pauseOnClick: false,
                loader: 'pie',               //pie, bar, none
                loaderColor: '#eeeeee',
                loaderBgColor: '#222222',
                loaderOpacity: 0.8,
                loaderPadding: 2,
                pieDiameter: 38,
                piePosition: 'rightTop',
                portrait: false,
                slideOn: 'random', 			//next, prev, random
                time: 7000,			//milliseconds between the end of the sliding effect and the start of the nex one
                transPeriod: 1200	 //length of the sliding effect in milliseconds
            });

            //function letitsnow() {
            //    // https://github.com/daveWid/canvas-snow
            //    var canvas = document.getElementById("snowfall");
            //    canvas.width = window.innerWidth;
            //    canvas.height = window.innerHeight;
            //    // Now the emitter
            //    var emitter = Object.create(rectangleEmitter);
            //    emitter.setCanvas(canvas);
            //    emitter.setBlastZone(0, -10, canvas.width, 1);
            //    emitter.particle = snow;
            //    emitter.runAhead(0);
            //    emitter.start(60);
            //}

            //letitsnow();

            // Owl
            serpentsoft_owlStartCarousel('divCatScrollBox_1', 2, {
                //items: 2, //10 items above 1000px browser width
                //itemsDesktop: [647, 2], //5 items between 1000px and 901px
                //itemsDesktopSmall: [597, 2], // betweem 900px and 601px

                itemsCustom: [
	                [0, 2],
                    [992, 2],
	                [765, 2],
                    [480, 1],
                    [150, 1],
                ],

                itemsTablet: false, //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                rewindNav: true,
                lazyLoad: true,
            });


            // Reviews Category
            serpentsoft_owlStartCarousel('divCatReviews_1', 2, {

                itemsCustom: [
	                [0, 2],
                    [992, 2],
	                [765, 2],
                    [480, 1],
                    [150, 1],
                ],

                itemsTablet: false, //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                rewindNav: true,
                lazyLoad: true,
            });


            // Widget Slides ( divWidgetSlides_1 )
            serpentsoft_owlStartCarousel('divWidgetSlides_1', 1, {

                itemsCustom: [
	                [0, 1],
                    //[992, 1],
	                //[750, 1],
	                //[410, 1],
                    [992, 1],
	                [765, 1],
                    [480, 1],
                    [150, 1],
                ],

                itemsTablet: false, //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                rewindNav: true,
                lazyLoad: true,
            });



        });


    </script>


    <!-- histats code -->
</body>
</html>
