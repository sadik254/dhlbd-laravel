<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard/assets') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('page_title')</title>

    <meta name="description" content="" />


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dash/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('dashboard/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('dashboard/assets') }}js/config.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        ul li a {
            text-decoration: none;
            padding-right: 30px;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="">
        <div class="">

            <!-- Layout container -->
            <div class="container">
                <!-- Navbar -->

                <div class="text-center">
                    <div class="text-center text-white bg-primary d-inline-block px-5 py-1 rounded-pill align-items-center mt-2">
                        <h4>DHL ORDER</h4>
                    </div>
                </div>

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <ul class="menu-inner py-1 align-items-center">
                        <!-- Dashboard -->
                        <li class="menu-item">
                            <a href="{{ route('loginpage') }}" class="menu-link">
                                <div data-i18n="Analytics">Login</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="Analytics">Basic Info</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Breakdown Info</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Breakdown Info(Sample)</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Fabric Info</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Trims</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Fabric Process Flow</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Others Cost</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('breakdowninfo') }}" class="menu-link">
                                <div data-i18n="Analytics">Budget Costing</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('dhlpage') }}" class="menu-link">
                                <div data-i18n="Analytics">DHL</div>
                            </a>
                        </li>
                    </ul>

                </nav>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dashboard/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dashboard/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('dashboard/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
