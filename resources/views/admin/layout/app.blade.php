<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/favicon.svg')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nano.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jsvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body class="body-area">

    @include('admin.includes.header')
    @include('admin.includes.aside')
     @yield('main')

        <!-- Search Modal Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="button" id="button-addon1">
                                <i class="ri-search-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->
        <!-- footer area end -->

    </div>
    <!-- Dashboard page wrapper end -->

    <!-- back to top area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top area end -->

    <!-- switcher area start -->
    <div class="theme-switcher-settings d-none">
        <div class="theme-switcher">
            <i class="ri-sun-line change-theme" id="theme-button"></i>
        </div>
    </div>

    <div class="bd-theme-settings-area transition-3">
        <div class="bd-theme-wrapper">
            <div class="bd-theme-header text-center">
                <h4 class="bd-theme-header-title">Template Settings</h4>
            </div>
            <div class="theme-switcher-radio d-flex align-items-center gap-25 mb-25">
                <div class="form-check switch-select">
                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                    <label class="form-check-label" for="switcher-light-theme">
                        Light
                    </label>
                </div>
                <div class="form-check switch-select">
                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                    <label class="form-check-label" for="switcher-dark-theme">
                        Dark
                    </label>
                </div>
            </div>
            <div class="direction-switcher d-flex align-items-center gap-25">
                <div class="form-check switch-select">
                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" value="ltr" checked>
                    <label class="form-check-label" for="switcher-ltr">LTR</label>
                </div>
                <div class="form-check switch-select">
                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl" value="rtl">
                    <label class="form-check-label" for="switcher-rtl">RTL</label>
                </div>
            </div>
            <div class="bd-theme-settings">
                <div class="bd-theme-settings-wrapper">
                    <div class="bd-theme-settings-open">
                        <button class="bd-theme-settings-open-btn">
                            <span class="bd-theme-settings-gear">
                            <i class="ri-settings-3-line"></i>
                        </span>
                            <span class="bd-theme-settings-close">
                            <i class="ri-close-line"></i>
                        </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- switcher area start -->

    <!-- JS here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/simplebar-active.js')}}"></script>
    <script src="{{asset('assets/js/vendor/height-equal.js')}}"></script>
    <script src="{{asset('assets/js/vendor/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/js/vendor/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/backtotop.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/world-merc.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/ecommerce-dashboard.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sidebar.js')}}"></script>

</body>

</html>