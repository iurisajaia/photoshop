<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photoshop</title>


    <link rel="icon" type="image/png" href="{{ URL::asset('assets/images/icons/favicon.png')}}"/>


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/slick/slick-1.9.0.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css')}}">


</head>
<body>


    <div class="hun-page">

        <!-- Header -->
        <header class="hun-section-header hun-header layout-1 align-right style-sticky">
            <div class="container-header">
                <div class="wrapper-header element-for-stick">
                    <div class="container">
                        <div class="logo-header">
                            <a href="#" class="text-logo">Photoshop</a>

                            <a href="/" class="main-logo">
                                <img src="{{ URL::asset('assets/images/icons/logo-01.png')}}" alt="LOGO">
                            </a>

                            <a href="/" class="mobile-logo">
                                <img src="{{ URL::asset('assets/images/icons/logo-01.png')}}" alt="LOGO">
                            </a>

                            <a href="/" class="sticky-logo">
                                <img src="{{ URL::asset('assets/images/icons/logo-01.png')}}" alt="LOGO">
                            </a>
                        </div>

                        <nav class="main-navigation">
                            <ul class="list-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="/">
                                        მთავარი
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="/courses">
                                        კურსები
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="/download">
                                        გადმოწერა
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="group-feature">

                            <div class="hun-menu-mobile">
                                <a href="#" class="btn-toggle-menu"><span></span></a>

                                <div class="mobile-navigation">
                                    <nav class="mobile-menu">
                                        <ul class="list-menu">
                                            <li class="menu-item">
                                                <a href="/">
                                                    მთავარი
                                                </a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="/courses">
                                                    კურსები
                                                </a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="/download">
                                                    გადმოწერა
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end Header -->

        @yield('content')


    <!-- Footer -->
        <footer class="hun-section-footer hun-footer style-light layout-1">

            <div class="content-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="widget">
                                <h3 class="title-widget">
                                    Photoshop.ge
                                </h3>

                                <div class="text-widget">


                                    <p class="mb-5">
                                        ელ.ფოსტა: <a href="mailto:sajaiaiuri@gmail.com">sajaiaiuri@gmail.com</a>
                                    </p>

                                    <div class="hun-element-social--type-1 ">
                                        <a href="https://www.facebook.com/dexter.munich" target="_blank" class="social-link">
                                            <img src="{{URL::asset('assets//images/icons/facebook.svg')}}" alt="facebook">
                                        </a>
{{--                                        <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>--}}
{{--                                        <a href="#" class="social-link"><i class="fa fa-pinterest-p"></i></a>--}}
{{--                                        <a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="widget">
                                <h3 class="title-widget">
                                    ნავიგაცია
                                </h3>

                                <div class="text-widget">
                                    <ul>
                                        <li><a href="/courses">კურსები</a></li>
                                        <li><a href="/download">გადმოწერა</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="widget">
                                <h3 class="title-widget">
                                    ჩვენს შესახებ
                                </h3>

                                <div class="text-widget">
                                    <p>
                                        შეარჩიე სასურველი კურსი უფასოდ და შეიძინე ახალი პროფესია სახლიდან გაუსვლელად!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-footer">
                <div class="container">
                    <div class="content-copyright">
                        <div class="col-left">
                            Copyright © 2020 All rights reserved
                        </div>


                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>



    <script src="{{ URL::asset('assets/libs/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap/popper.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/slick/slick-1.9.0.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>

    @stack('scripts')

</body>
</html>
