<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ url('/') }}" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Permit</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Student Level -->
                    <li class="menu-item">
                        <a href="{{ url('/') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Home</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ url('/submit') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Basic">Submit a new letter</div>
                        </a>
                    </li>

                    <!-- Teacher & Admin Level -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Layouts">Permit Letters</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <div data-i18n="Without menu">New Incoming Letters</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">All History</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li> -->

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"> {{ Auth::user()->name }}
                                                    </span>
                                                    <small class="text-muted"> {{ Auth::user()->level }}
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Incoming Letters</h4>

                        <!-- Examples -->
                        <div class="row mb-5">
                            <!-- Permit Letter Card -->
                            @foreach($permitletter as $data)
                            <div class="col-md-12 mb-3">
                                <div class="card h-100">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="card-header bg-white d-flex align-items-center">
                                                <div class="col-md-6">
                                                    <div class="fw-bold">{{$data->user->name}}</div>
                                                    <div class="fw-italic">{{$data->kelas->class_name}}</div>
                                                </div>
                                                <div class="col-md-6 text-end">
                                                    @if($data->status == 'submitted')
                                                    <div
                                                        class="d-inline-flex px-2 py-1 fw-semibold text-white bg-warning rounded-2">
                                                        Submitted
                                                    </div>
                                                    @elseif($data->status == 'accepted')
                                                    <div
                                                        class="d-inline-flex px-2 py-1 fw-semibold text-white bg-success rounded-2">
                                                        Accepted
                                                    </div>
                                                    @else
                                                    <div
                                                        class="d-inline-flex px-2 py-1 fw-semibold text-white bg-danger rounded-2">
                                                        Rejected
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="card-body p-4 d-flex">
                                                <div class="col-md-6 gap-2">
                                                    <div class="container mb-2">
                                                        <div class="fw-light">permit type :</div>
                                                        <div>{{$data->permission_type}}</div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="fw-light">description :</div>
                                                        <div class="">{{$data->desc}}</div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="container mb-2">
                                                        <div class="fw-light">start date :</div>
                                                        <div>{{$data->start_date}}</div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="fw-light">end date :</div>
                                                        <div>{{$data->end_date}}</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="card-footer bg-white">
                                                <div class="row justify-content-between">
                                                    <div class="col-md-6">
                                                        <div class="fw-light">PIC Name :</div>
                                                        <div class="fw-bold">{{$data->pic_name}}</div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <form action="/accept/{{$data->id}}" method="POST"
                                                                route="letters.accept" class="w-auto">
                                                                @csrf
                                                                {{method_field('PUT')}}
                                                                <button class="btn btn-success mt-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-check-circle" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                        <path
                                                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                                    </svg>
                                                                    Terima
                                                                </button>
                                                            </form>

                                                            <form action="/reject/{{$data->id}}" method="POST"
                                                                route="letters.reject" class="w-auto">
                                                                @csrf
                                                                {{method_field('PUT')}}
                                                                <button class="btn btn-danger mt-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                    Tolak
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            <!-- /Permit Letter Card -->

                        </div>
                        <!-- / Content -->



                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

        <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <!-- Page JS -->
        <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
