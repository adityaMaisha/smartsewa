<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>Admin</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('dashboard/img/brand/favicon.ico') }}" />
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('dashboard/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- ICONS CSS -->
    {{-- <link href="{{ asset('dashboard/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('dashboard/plugins/web-fonts/plugin.css') }}" rel="stylesheet" /> --}}

    <!-- STYLE CSS -->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/plugins.css') }}" rel="stylesheet" />

    <!-- SWITCHER CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


    @yield('style')
</head>

<body class="ltr main-body leftmenu">
    <!-- LOADEAR -->
    <div id="global-loader">
        <img src="{{ asset('dashboard/img/loader.svg') }}" class="loader-img" alt="Loader" />
    </div>
    <!-- END LOADEAR -->

    <!-- PAGE -->
    <div class="page">
        <!-- HEADER -->
        <div class="main-header side-header sticky">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:void(0);" id="mainSidebarToggle"><span></span></a>
                    <div class="hor-logo">
                        <a class="main-logo" href="javascript:;">
                            <img src="{{ asset('dashboard/img/brand/logo.png') }}"
                                class="header-brand-img desktop-logo" />
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.php.php"><img src="{{ asset('dashboard/img/brand/logo.png') }}"
                                class="mobile-logo" /></a>

                    </div>
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <select class="form-control select2">
                                <option label="All categories"> </option>
                                <option value="IT Projects">
                                    IT Projects
                                </option>
                                <option value="Business Case">
                                    Business Case
                                </option>
                                <option value="Microsoft Project">
                                    Microsoft Project
                                </option>
                                <option value="Risk Management">
                                    Risk Management
                                </option>
                                <option value="Team Building">
                                    Team Building
                                </option>
                            </select>
                        </div>
                        <input type="search" class="form-control rounded-0" placeholder="Search for anything..." />
                        <button class="btn search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button>
                    <!-- Navresponsive closed -->
                    <div class="navbar navbar-expand-lg nav nav-item navbar-nav-right responsive-navbar navbar-dark">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">
                                <!-- Search -->
                                <div class="dropdown header-search">
                                    <a class="nav-link icon header-search">
                                        <i class="fe fe-search header-icons"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="main-form-search p-2">
                                            <div class="input-group">
                                                <div class="input-group-btn search-panel">
                                                    <select class="form-control select2">
                                                        <option label="All categories"> </option>
                                                        <option value="IT Projects">
                                                            IT Projects
                                                        </option>
                                                        <option value="Business Case">
                                                            Business Case
                                                        </option>
                                                        <option value="Microsoft Project">
                                                            Microsoft Project
                                                        </option>
                                                        <option value="Risk Management">
                                                            Risk Management
                                                        </option>
                                                        <option value="Team Building">
                                                            Team Building
                                                        </option>
                                                    </select>
                                                </div>
                                                <input type="search" class="form-control"
                                                    placeholder="Search for anything..." />
                                                <button class="btn search-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" viewbox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search -->

                                <!-- Profile -->
                                <div class="dropdown main-profile-menu">
                                    <a class="d-flex" href="javascript:void(0);">
                                        <span class="main-img-user"><img alt="avatar"
                                                src="{{ asset('dashboard/img/users/1.jpg') }}" /></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <h6 class="main-notification-title">Sonia Taylor</h6>
                                            <p class="main-notification-text">Web Designer</p>
                                        </div>
                                        <a class="dropdown-item border-top" href="profile.php.html"> <i
                                                class="fa fa-user"></i> My Profile </a>
                                        <a class="dropdown-item" href="profile.php.html"> <i class="fa fa-edit"></i>
                                            Edit Profile </a>
                                        <a class="dropdown-item" href="signin.php"> <i class="fa fa-power-off"></i>
                                            Sign Out </a>
                                    </div>
                                </div>
                                <!-- Profile -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="javascript:;">
                            <img src="{{ asset('dashboard/img/logo.png') }}" class="header-brand-img desktop-logo" />
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                        <ul class="menu-nav nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-dashboard sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-users sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Users </span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="{{ route('new.employee') }}">Employees</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="javascript:;">Customers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-user-plus sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Vendors</span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="javascript:void(0)">Products</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="javascript:void(0)">Medicine</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-user-secret sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Clients</span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="javascript:;">DoctLabsors</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:;">Doctors</a>
                                    </li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:;">Hospital</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-adjust sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Services</span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:;">Hospital
                                            Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-adjust sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Inventory</span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="carousel.php.html">Lab
                                            Tests</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="collapse.php.html">Medicines</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="fa fa-adjust sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Department Management</span>
                                    <i class="angle fa fa-chevron-circle-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="{{ route('list.roles') }}">Department Listing</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link"
                                            href="{{ route('new.roles') }}">Department Create</a></li>
                                </ul>
                            </li>


                        </ul>
                        <div class="slide-right" id="slide-right"><i class="fa fa-chevron-circle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Body --}} @yield('content')

        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2023 <a href="javascript:;">SmartSewa</a>. Designed by <a
                                href="https://maishainfotech.com/" target="_blank">Maisha Infotech</a> All rights
                            reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

    <!-- BACK TO TOP -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('dashboard/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- PERFECT SCROLLBAR JS -->
    <script src="{{ asset('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- SIDEMENU JS -->
    <script src="{{ asset('dashboard/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('dashboard/plugins/sidebar/sidebar.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('dashboard/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/select2.js') }}"></script>

    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('dashboard/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/peity/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('dashboard/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Circle Progress js-->
    <script src="{{ asset('dashboard/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/chart-circle.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('dashboard/js/index.js') }}"></script>
    <script src="{{ asset('dashboard/js/sticky.js') }}"></script>

    <!-- COLOR THEME JS -->
    <script src="{{ asset('dashboard/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CUSTOM JS -->
    {{-- <script src="assets/js/custom.js"></script> --}}
    <!-- INTERNAL DATA TABLE JS -->
    <script src="{{ asset('dashboard/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/table-data.js') }}"></script>
    <script src="{{ asset('dashboard/js/select2.js') }}"></script>


    <!-- INTERNAL JQUERY-UI JS -->
    <script src="{{ asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

    <!-- INTERNAL JQUERY.MASKEDINPUT JS -->
    <script src="{{ asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>

    <!-- INTERNAL SPECTURM-COLORPICKER JS -->
    <script src="{{ asset('dashboard/plugins/spectrum-colorpicker/spectrum.js') }}"></script>

    <!-- INTERNAL ION-RANGESLIDER JS -->
    <script src="{{ asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>

    <!-- INTERNAL FORM-ELEMENTS JS -->
    <script src="{{ asset('dashboard/js/form-elements.js') }}"></script>

    <!-- BOOTSTRAP-DATEPICKER JS -->
    <script src="{{ asset('dashboard/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- INTERNAL JQUERY-SIMPLE-DATETIMEPICKER JS -->
    <script src="{{ asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>

    <!-- INTERNAL FILEUPLOADERS JS -->
    <script src="{{ asset('dashboard/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!-- INTERNAL JQUERY-STEPS JS -->
    <script src="{{ asset('dashboard/plugins/jquery-steps/jquery.steps.min.js') }}"></script>

    <!-- INTERNAL ACCORDION-WIZARD-FORM JS -->
    <script src="{{ asset('dashboard/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>

    <!-- INTERNAL FORM-WIZAR JS -->
    <script src="{{ asset('dashboard/js/form-wizard.js') }}"></script>

    @yield('script')
</body>

</html>
