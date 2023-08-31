@extends('admin.layout.master')
@section('style')
@endsection
@section('content')
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-8">

                        <!--Row-->
                        <div class="row row-sm  mt-lg-4">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card bg-primary custom-card card-box">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                                <h4 class="d-flex  mb-3">
                                                    <span class="font-weight-bold text-white ">Sonia Taylor!</span>
                                                </h4>
                                                <p class="tx-white-7 mb-1">You have two projects to finish, you had
                                                    completed <b class="text-warning">57%</b> from your montly
                                                    level,
                                                    Keep going to your level
                                                </p>
                                            </div>
                                            <img src="{{ asset('dashboard/img/pngs/work3.png') }}" alt="user-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Row -->

                        <!--Row-->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
                                                    enable-background="new 0 0 24 24" height="24" viewbox="0 0 24 24"
                                                    width="24">
                                                    <g>
                                                        <rect height="14" opacity=".3" width="14" x="5"
                                                            y="5"></rect>
                                                        <g>
                                                            <rect fill="none" height="24" width="24"></rect>
                                                            <g>
                                                                <path
                                                                    d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z">
                                                                </path>
                                                                <rect height="5" width="2" x="7"
                                                                    y="12"></rect>
                                                                <rect height="10" width="2" x="15"
                                                                    y="7"></rect>
                                                                <rect height="3" width="2" x="11"
                                                                    y="14"></rect>
                                                                <rect height="2" width="2" x="11"
                                                                    y="10"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label tx-13 font-weight-bold mb-1">Total
                                                    Revenue</label>
                                                <span class="d-block tx-12 mb-0 text-muted">Previous month vs this
                                                    months</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-bold">$5,900.00</h4>
                                                    <small><b class="text-success">55%</b> higher</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24"
                                                    width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path
                                                        d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z"
                                                        opacity=".3"></path>
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label tx-13 font-weight-bold mb-1">New
                                                    Employees</label>
                                                <span class="d-block tx-12 mb-0 text-muted">Employees joined this
                                                    month</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-bold">15</h4>
                                                    <small><b class="text-success">5%</b> Increased</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="24"
                                                    viewbox="0 0 24 24" width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path
                                                        d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z"
                                                        opacity=".3"></path>
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="card-item-title  mb-2">
                                                <label class="main-content-label tx-13 font-weight-bold mb-1">Total
                                                    Expenses</label>
                                                <span class="d-block tx-12 mb-0 text-muted">Previous month vs this
                                                    months</span>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-bold">$8,500</h4>
                                                    <small><b class="text-danger">12%</b> decrease</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End row-->

                        <!--row-->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header border-bottom-0">
                                        <div>
                                            <label class="main-content-label mb-2">Project Budget</label> <span
                                                class="d-block tx-12 mb-0 text-muted">The Project Budget is a tool
                                                used by project managers to estimate the total cost of a
                                                project</span>
                                        </div>
                                    </div>
                                    <div class="card-body ps-0">
                                        <div class="">
                                            <div class="container">
                                                <canvas id="project" class="chart-dropshadow2 ht-250"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- col end -->
                        </div><!-- Row end -->
                    </div><!-- col end -->
                    <div class="col-sm-12 col-lg-12 col-xl-4 mt-xl-4">

                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <div class="card-item-title">
                                            <label class="main-content-label tx-13 font-weight-bold mb-2">Project
                                                Launch</label>
                                            <span class="d-block tx-12 mb-0 text-muted">the project is going to
                                                launch</span>
                                        </div>
                                        <p class="mb-0 tx-24 mt-2"><b class="text-primary">145 days</b></p>
                                        <a href="javascript:void(0)" class="text-muted">12 Monday, Oct 2020 </a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('dashboard/img/pngs/work.png') }}" alt="image" class="best-emp">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <label class="main-content-label my-auto">Website Design</label>
                                    <div class="ms-auto  d-flex">
                                        <div class="me-3 d-flex text-muted tx-13">Running</div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div>
                                        <span class="tx-15 text-muted">Task completed : 7/10</span>
                                    </div>
                                    <div class="container mt-2 mb-2">
                                        <canvas id="bar-chart" class="ht-180"></canvas>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mt-4">
                                            <div class="d-flex mb-2">
                                                <h5 class="tx-15 my-auto text-muted font-weight-normal">Client :
                                                </h5>
                                                <h5 class="tx-15 my-auto ms-3">John Deo</h5>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <h5 class="tx-13 my-auto text-muted font-weight-normal">Deadline :
                                                </h5>
                                                <h5 class="tx-13 my-auto text-muted ms-2">25 Dec 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="mt-3">
                                            <div class="">
                                                <img alt="" class="ht-50"
                                                    src="{{ asset('dashboard/img/media/project-logo.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col end -->
                </div>
                <!-- Row end -->


            </div>
        </div>
    </div>


    <div class="sidebar sidebar-right sidebar-animate">
        <div class="sidebar-icon">
            <a href="#" class="text-end float-end text-dark fs-20" data-bs-toggle="sidebar-right"
                data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
        </div>
        <div class="sidebar-body">
            <h5>Todo</h5>
            <div class="d-flex p-3">
                <label class="ckbox"><input checked="" type="checkbox"><span>Hangout With friends</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input checked="" type="checkbox"><span>System Updated</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <div class="d-flex p-3 border-top mb-0">
                <label class="ckbox"><input type="checkbox"><span>Project review</span></label>
                <span class="ms-auto">
                    <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Edit"></i>
                    <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                        data-bs-placement="top" data-bs-original-title="Delete"></i>
                </span>
            </div>
            <h5>Overview</h5>
            <div class="p-4">
                <div class="main-traffic-detail-item">
                    <div>
                        <span>Founder &amp; CEO</span> <span>24</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
                            class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>UX Designer</span> <span>1</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15"
                            class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>Recruitment</span> <span>87</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45"
                            class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>Software Engineer</span> <span>32</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
                            class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>Project Manager</span> <span>32</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
                            class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection