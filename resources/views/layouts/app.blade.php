<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- bootstrap styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--slider  -->
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    @yield('style-css')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113518868-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113518868-1');
    </script>


        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-113518868-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->
    {{--<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>--}}
    <script>
        $(function(){

            function setTopMenuWidth() {
                var menuWitdh = $('.top-menu-list').width();

                $('.top-menu-item').each(function () {
                    var leftPosition = $(this).position().left;
                    if ( leftPosition > ( menuWitdh - 75 ) ) { $(this).css('display', 'none'); }

                });

                var hidden_items = $('.top-menu-list .top-menu-item').filter(function(){
                    return $(this).css('display') == "none"
                }).length;
                if ( hidden_items > 0 ) { $('.js-hidden-count-element').text("ukryto " + hidden_items + " elementów"); }
                else { $('.js-hidden-count-element').css('display', 'none'); $('.top-menu-list').css( 'justify-content', 'space-evenly'); }
            }


            setTopMenuWidth();



            $(window).resize(setTopMenuWidth)
        });
    </script>

</head>
<body>
@yield('yt-background')
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="padding: 0px;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="padding: 0px;">Register</a></li>
                            {{--<li><a href="{{ route('product.index') }}" style="padding: 0px;">Product</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('profile.index') }}">Profil</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team.index') }}">Twoje kluby</a>
                                    </li>
{{--                                    <li><a href="{{ route('product.index') }}">Produkty</a></li>--}}
                                    <hr>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="menu">
                    <ul class="col-md-12 top-menu-list">
                        <li class="top-menu-item">Strona główna</li>
                        <li class="top-menu-item"><a href="{{route('product.show')}}"></a>Produkty</li>
                        <li class="top-menu-item">Kategorie</li>
                        <li class="top-menu-item">Użytkownicy</li>
                        <li class="top-menu-item">Forum</li>
                        @auth
                        <li class="top-menu-item">Twoje konto</li>
                        <li class="top-menu-item">Twoje zamówienia</li>
                        @endauth
                    </ul>
                </div>
                <span class="js-hidden-count-element"></span>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    {{--<div class="footer" style="  position: fixed; bottom: 0 " >--}}
        {{--<h3>footer</h3>--}}
    {{--</div>--}}


    <!-- Scripts -->


    @yield('script-js')
</body>
</html>
