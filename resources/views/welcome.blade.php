<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodpanda</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="196x196"
          href="https://assets.foodora.com/59cecb9/img/favicon/foodpanda/android-chrome-192x192.png?59cecb9">
    <link rel="icon" type="image/png" sizes="16x16"
          href="https://assets.foodora.com/59cecb9/img/favicon/foodpanda/favicon-16x16.png?59cecb9">
    <link rel="icon" type="image/png" sizes="96x96"
          href="https://assets.foodora.com/59cecb9/img/favicon/foodpanda/favicon-96x96.png?59cecb9">
    <link rel="icon" type="image/png" sizes="32x32"
          href="https://assets.foodora.com/59cecb9/img/favicon/foodpanda/favicon-32x32.png?59cecb9">
    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.jscroll.min.js')}}"></script>
</head>
<body class="antialiased">
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <h1 class="text-center">foodpanda</h1>--}}
{{--        </div>--}}

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{--                    {{ config('app.name', 'Laravel') }}--}}
                <div class="svg-logo-wrapper">
                    <!--?xml version="1.0" encoding="utf-8"?-->
                    <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" height="26" width="26" class="logo-icon" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 198.2 200.3" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #D70F64;
    }
</style>
                        <g>
                            <g>
                                <path class="st0"
                                      d="M99,148c13.5,0,24.4-9.6,24.4-21.4H74.7C74.7,138.4,85.5,148,99,148z"></path>
                                <g>
                                    <path class="st0" d="M181.3,46c5.5-4.8,9.1-11.8,9.1-19.8c0-14.4-11.7-26.1-26.2-26.1c-9.3,0-17.4,4.8-22,12
				c-13-6.3-27.6-9.9-43-9.9s-30,3.5-43,9.8c-4.7-7.2-12.7-12-22-12C19.8,0,8,11.7,8,26.1c0,7.9,3.5,15,9,19.7
				C6.3,61.6,0,80.7,0,101.2c0,54.7,44.5,99.1,99.1,99.1s99.1-44.4,99.1-99.1C198.3,80.9,192,61.8,181.3,46z M99.2,192.8
				c-50.4,0-91.4-41-91.4-91.4c0-19,5.8-36.6,15.7-51.2c9-13.2,21.4-24,35.8-31c12-5.9,25.5-9.2,39.8-9.2s27.8,3.3,39.9,9.2
				c14.5,7,26.8,17.8,35.8,31c9.9,14.6,15.7,32.2,15.7,51.2C190.6,151.8,149.6,192.8,99.2,192.8z"></path>
                                    <path class="st0" d="M99,120.5c1.5,0.4,17.2-4.9,17.2-12.3c0-4.1-12.7-4.9-17.2-4.9c-4.4,0-17.2,0.8-17.2,4.9
				C81.8,115.6,97.5,120.9,99,120.5z"></path>
                                    <path class="st0" d="M156.6,58.5c-8.6-5.7-27.7-9.1-35.1,0.8c0,0-9.4,10.1-0.2,20.6c9.3,10.5,16.4,20.3,18.5,28.8
				s5.5,12,12.4,12.1c6.9,0,20.1-10.5,21.8-27.4C175.7,76.5,165.2,64.1,156.6,58.5z M136.9,80.1c-2.9,0-5.2-2.3-5.2-5.2
				s2.4-5.2,5.2-5.2c2.9,0,5.2,2.3,5.2,5.2C142,77.7,139.7,80.1,136.9,80.1z"></path>
                                    <path class="st0" d="M76.5,59.2c-7.5-9.8-26.6-6.5-35.1-0.8c-8.6,5.7-19.1,18-17.4,34.9c1.6,16.9,14.9,27.4,21.8,27.4
				s10.3-3.5,12.4-12.1c2.1-8.5,9.3-18.3,18.5-28.8S76.5,59.2,76.5,59.2z M62.7,80.1c-2.9,0-5.2-2.3-5.2-5.2s2.3-5.2,5.2-5.2
				c2.9,0,5.2,2.3,5.2,5.2C67.8,77.7,65.5,80.1,62.7,80.1z"></path>
                                </g>
                            </g>
                        </g>
</svg>
                    <!--?xml version="1.0" encoding="utf-8"?-->
                    <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" height="30px" width="133px" d="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="150 -45 745 250"
                         xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #D70F64;
    }
</style>
                        <g class="svg-stroke-container">
                            <g>
                                <path class="st0" d="M0,52.3h18.7V35c0-21,11.7-35,35-35l11.7,2.3v21L52.6,21c-7,0-10.5,4.7-10.5,11.7v19.6h23.3v21H42.1V162H18.8
			V73.3H0.1L0,52.3L0,52.3z"></path>
                                <path class="st0" d="M125.8,50c30.3,0,57.2,23.3,57.2,57.2c0,33.8-26.8,57.2-57.2,57.2c-30.3,0-57.2-23.3-57.2-57.2
			C68.7,73.3,95.5,50,125.8,50z M125.8,143.3c22.2,0,33.8-16.3,33.8-36.2c0-19.8-11.7-36.2-33.8-36.2c-22.2,0-33.8,16.3-33.8,36.2
			S103.7,143.3,125.8,143.3z"></path>
                                <path class="st0" d="M250.4,50c30.3,0,57.2,23.3,57.2,57.2c0,33.8-26.8,57.2-57.2,57.2s-57.2-23.3-57.2-57.2
			C193.3,73.3,220.1,50,250.4,50z M250.4,143.3c22.2,0,33.8-16.3,33.8-36.2c0-19.8-11.7-36.2-33.8-36.2c-22.2,0-33.8,16.3-33.8,36.2
			S228.3,143.3,250.4,143.3z"></path>
                                <path class="st0" d="M429.9,162h-21l-2.3-9.3l-1.2-1.2l-1.2,1.2c-7,7-18.7,11.7-30.3,11.7c-30.3,0-56-23.3-56-57.2
			c0-33.8,25.7-57.2,56-57.2c11.4,0,23.3,4.7,30.3,11.7l1.2,1.2l1.2-1.2V0h23.3V162z M375.1,71c-22.2,0-34.1,16.3-34.1,36.2
			c0,19.8,11.9,36.2,34.1,36.2c19.8,0,33.8-16.3,33.8-36.2S394.9,71,375.1,71z"></path>
                                <path class="st0" d="M453.3,52.3h21l2.1,9.3l1.4,1.2l1.2-1.2c7-7,18.7-11.7,30.3-11.7c30.3,0,56,23.3,56,57.2
			c0,33.8-25.7,57.2-56,57.2c-11.4,0-23.3-4.7-30.3-11.7l-1.2-1.2l-1.4,1.2v58.8h-23.1V52.3z M508.1,143.3
			c22.2,0,33.8-16.3,33.8-36.2c0-19.8-11.7-36.2-33.8-36.2c-19.8,0-33.8,16.3-33.8,36.2S488.3,143.3,508.1,143.3z"></path>
                                <path class="st0" d="M624,93.9h19.1v-4.8c0-13.2-9-19.3-21.5-19.3c-10.1,0-16.9,4.8-20.6,14.7l-20.9-4.4
			c4.6-18.7,20.6-30.5,41.7-30.5c29.4,0,44.1,14.5,44.1,43.7V162h-19.3l-2.2-14.5c-7.7,10.8-19.1,16.3-34.3,16.3
			c-19.5,0-34-11.6-34-33.6C576.1,107.5,595.3,93.9,624,93.9z M614.1,143.5c7.7,0,14.5-2.4,20.2-7.2c5.9-5.1,8.8-11.9,8.8-20.9V113
			h-20c-14.1,0-22.8,6.6-22.8,17.1C600.3,138,605.1,143.5,614.1,143.5z"></path>
                                <path class="st0" d="M687.5,52.3h21l2.3,9.3l1.2,1.2l1.2-1.2c4.7-7,16.3-11.7,25.7-11.7c28,0,44.3,18.7,44.3,44.3v67.7h-23.3V94.2
			c-0.7-14.9-7.9-23.3-23.3-23.3c-13.8,0-25.2,11.2-25.7,24.7v66.3h-23.3L687.5,52.3L687.5,52.3z"></path>
                                <path class="st0" d="M910.2,162h-21l-2.3-9.3l-1.2-1.2l-1.2,1.2c-7,7-18.7,11.7-30.3,11.7c-30.3,0-56-23.3-56-57.2
			c0-33.8,25.7-57.2,56-57.2c11.4,0,23.3,4.7,30.3,11.7l1.2,1.2l1.2-1.2V0h23.3V162z M855.3,71c-22.2,0-34.1,16.3-34.1,36.2
			c0,19.8,11.9,36.2,34.1,36.2c19.8,0,33.8-16.3,33.8-36.2C889.2,87.3,875.2,71,855.3,71z"></path>
                                <path class="st0" d="M976.6,93.9h19.1v-4.8c0-13.2-9-19.3-21.5-19.3c-10.1,0-16.9,4.8-20.6,14.7l-20.9-4.4
			c4.6-18.7,20.6-30.5,41.7-30.5c29.4,0,44.1,14.5,44.1,43.7V162h-19.3l-2.2-14.5c-7.7,10.8-19.1,16.3-34.3,16.3
			c-19.5,0-34-11.6-34-33.6C928.7,107.5,947.8,93.9,976.6,93.9z M966.7,143.5c7.7,0,14.5-2.4,20.2-7.2c5.9-5.1,8.8-11.9,8.8-20.9
			V113h-20c-14.1,0-22.8,6.6-22.8,17.1C952.9,138,957.7,143.5,966.7,143.5z"></path>
                            </g>
                        </g>
</svg>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('master_product') }}">{{ __('Master Product') }}</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="header" style="width: 100%;">
                <img class="img-fluid" src="{{asset('images/foodpanda_banner.png')}}" alt="image">
            </div>
        </div>
    </div>

    @if(Route::current()->getName() !== 'master_product')
    <div class="container">
        <div class="row">

            <div class="category-bar my-3 d-flex justify-content-between">
                <?php
                $sl = 1;
                foreach($categories as $category):
                if ($sl == 10)
                    break;
                ?>
                <div><a class="btn btn-link text-decoration-none text-muted" href="{{url('category_product/'.$category->id)}}">{{$category->name}}</a></div>
                <?php $sl++; endforeach;?>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            @if(Route::current()->getName() !== 'master_product')
            <div class="col-md-2">
                <h5 class="text-uppercase">All Categories</h5>
                <?php $categories = \App\Models\Category::get(); ?>
                <ul class="list-group rounded-0">
                    @foreach($categories as $category)
                        <li class="list-group-item"><a class="text-decoration-none text-muted" href="{{url('category_product/'.$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
                @if(Route::current()->getName() !== 'master_product')
            <div class="col-md-10">
                @else
                    <div class="col-md-12">
                    @endif
                @yield('content')
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>
</body>
</html>
