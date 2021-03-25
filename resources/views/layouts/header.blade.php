<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir=""  >


<!-- Mirrored from jituchauhan.com/borrow/bootstrap-4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2019 22:20:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <title>NMF </title>
    <!-- Bootstrap -->
    {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet"> --}}


    <!-- Google Fonts
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet"> -->
    <!-- owl Carousel Css -->
      {{-- <link href="{{asset('css/owl.carousel_'.$lang.'.css')}}" rel="stylesheet">
      <link href="css/owl.theme.css" rel="stylesheet">   --}}

      {{-- <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link href="{{asset('css/style_'.$lang.'.css')}}" rel="stylesheet"> --}}

      <link href="{{asset('css/all_'.$lang.'.css')}}" rel="stylesheet">
<style>
.logo{
    /*margin-top: -18px;*/
}
</style>
      @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    {{-- <div class="collapse searchbar" id="searchbar">
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span> </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div> --}}
    <div class="top-bar" >
        <!-- top-bar -->
        <div class="container" >
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6 col-6 d-none d-xl-block d-lg-block">
                    <p class="mail-text">info@nmfy.org </p>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 text-right">
                    <div class="top-nav">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <span class="top-text">
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </span>
                            @endforeach


                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <div class="header" style="z-index: 99999;">
        <div class="container">
            <div class="row">
                @if($lang=="en")


                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-5">
                      <div id="navigation">
                        <!-- navigation start-->
                            {{menu('main','partial.main_menu')}}

                    </div>
                    <!-- /.navigation start-->
                </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6">
                        <!-- logo -->
                        <div class="logo">

                            <a href="{{url($lang)}}"><img src="{{asset('images/en-logo.png')}}" alt="Borrow - Loan Company Website Template"></a>



                        </div>
                    </div>
                    <!-- logo -->

                {{-- <div class="col-xl-l col-lg-1 col-md-1 col-sm-1 col-12 d-none d-xl-block d-lg-block">
                    <!-- search start-->
                    <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
                </div> --}}
                <!-- /.search start-->
            </div>
            @else

                <div class="col-xl-3 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div class="logo">

                        <a href="{{url($lang)}}"><img src="{{asset('images/nmf_logo.png')}}" alt="Borrow - Loan Company Website Template"></a>



                    </div>
                </div>
                <!-- logo -->

                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 mt-5">
                    <div id="navigation">
                        <!-- navigation start-->
                        {{menu('main','partial.main_menu')}}

                    </div>
                    <!-- /.navigation start-->
                </div>

        </div>


            @endif
        </div>
    </div>



