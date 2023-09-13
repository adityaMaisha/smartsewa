@extends('admin.layout.master')
@section('style')
@endsection
@section('content')
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Business Clients</h2>
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Employee</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Employee</li>
                        </ol> --}}
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            {{-- <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                <a href="{{ route('list.employee') }}" style="color: white;"> <i class="fa fa-backward me-2"></i> Back</a>
                            </button> --}}
                        </div>
                    </div>
                </div>

                <form action="{{ route('new.employee') }}" method="POST" enctype="multipart/form-data" id="employeeFormData">
                    @csrf

                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                {{-- <div class="mb-4 hny_tt">
                                    <h6 class="main-content-label mb-1">Personal Detail</h6>
                                </div> --}}
                                <div class="card-body">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg">
                                            <p class="mg-b-10">Service Name <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Service Name" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div>

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Category </p>
                                            <div class="form-group ">
                                                <select name="blood_group" class="form-control select2">
                                                    <option value="preventive health checkup">Preventive health checkup</option>
                                                    <option value="DHP">DHP</option>
                                                    <option value="Subscription">Subscription</option>
                                                </select>
                                                <span class="text-danger ERROR__blood_group"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-sm mg-b-20">

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Mode of delivery </p>
                                            <div class="form-group ">
                                                <select name="blood_group" class="form-control select2">
                                                    <option value="At store">At store</option>
                                                    <option value="at home">at home</option>
                                                    <option value="digital">digital</option>
                                                </select>
                                                <span class="text-danger ERROR__blood_group"></span>
                                            </div>
                                        </div>


                                        <div class="col-lg">
                                            <p class="mg-b-10">Title <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Title" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Details <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Details" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>


                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Time cosume per customer </p>
                                            <div class="form-group ">
                                                <select name="blood_group" class="form-control select2">
                                                    <option value="At store">minutes</option>
                                                    <option value="at home">seconds</option>
                                                </select>
                                                <span class="text-danger ERROR__blood_group"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-sm mg-b-20">

                                        <div class="col-lg">
                                            <p class="mg-b-10">Number of customer can be engaged/day <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Number of customer can be engaged/day" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Per customer cost <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Per customer cost" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>


                                    </div>

                                    <div class="row row-sm mg-b-20">

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">servicable pin codes <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="servicable pin codes" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3 mb-4">
                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary my-2 btn-icon-text" style="color: white;"
                                value="&nbsp; Create New Business Clients &nbsp;">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
