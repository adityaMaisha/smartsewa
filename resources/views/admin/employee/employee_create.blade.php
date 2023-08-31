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
                        <h2 class="main-content-title tx-24 mg-b-5">Add New Employee</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Employee</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Employee</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">


                            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                <a href="employee.php" style="color: white;"> <i class="fa fa-backward me-2"></i> Back</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->



                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="mb-4 hny_tt">
                                <h6 class="main-content-label mb-1">Personal Detail</h6>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-4">
                                        <p class="mg-b-10">SDE-1</p>
                                        <select class="form-control select2">
                                            <option label="Choose one">
                                            </option>
                                            <option value="Firefox">
                                                Firefox
                                            </option>
                                            <option value="Chrome">
                                                Chrome
                                            </option>
                                            <option value="Safari">
                                                Safari
                                            </option>
                                            <option value="Opera">
                                                Opera
                                            </option>
                                            <option value="Internet Explorer">
                                                Internet Explorer
                                            </option>
                                        </select>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Finance</p>
                                        <select class="form-control select2">
                                            <option label="Choose one">
                                            </option>
                                            <option value="Firefox">
                                                Firefox
                                            </option>
                                            <option value="Chrome">
                                                Chrome
                                            </option>
                                            <option value="Safari">
                                                Safari
                                            </option>
                                            <option value="Opera">
                                                Opera
                                            </option>
                                            <option value="Internet Explorer">
                                                Internet Explorer
                                            </option>
                                        </select>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Date</p>
                                        <div class="mg-b-20">
                                            <div class="input-group">
                                                <div class="input-group-text border-end-0">
                                                    <i class="fe fe-calendar lh--9 op-6"></i>
                                                </div>
                                                <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg">
                                        <p class="mg-b-10">First Name</p>
                                        <input class="form-control" placeholder="First Name" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Last Name</p>
                                        <input class="form-control" placeholder="Lasst Name" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Choose File</p>
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-end-0 browse-file"
                                                placeholder="Choose File" readonly="">
                                            <label class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse <input type="file" style="display: none;" multiple="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Date</p>
                                        <div class="mg-b-20">
                                            <div class="input-group">
                                                <div class="input-group-text border-end-0">
                                                    <i class="fe fe-calendar lh--9 op-6"></i>
                                                </div>
                                                <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Gender</p>
                                        <div class="form-group ">
                                            <select name="country" class="form-control select2">
                                                <option value="">Default Select</option>
                                                <option value="cz">Male</option>
                                                <option value="de">Female</option>
                                                <option value="pl">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg">
                                        <p class="mg-b-10">Email</p>
                                        <input class="form-control" placeholder="Enter Your Email" type="email">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Mobile </p>
                                        <input class="form-control" placeholder="Enter Your Number" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Blood Group </p>
                                        <div class="form-group ">
                                            <select name="country" class="form-control select2">
                                                <option value="">Default Select</option>
                                                <option value="cz">A+</option>
                                                <option value="de">A-</option>
                                                <option value="pl">B+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg">
                                        <p class="mg-b-10">Country</p>
                                        <div class="form-group ">
                                            <select name="country" class="form-control select2">
                                                <option value="">Default Select</option>
                                                <option value="cz">Czech Republic</option>
                                                <option value="de">Germany</option>
                                                <option value="pl">Poland</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">State </p>
                                        <div class="form-group ">
                                            <select name="country" class="form-control select2">
                                                <option value="">Default Select</option>
                                                <option value="cz">Czech Republic</option>
                                                <option value="de">Germany</option>
                                                <option value="pl">Poland</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">City </p>
                                        <div class="form-group ">
                                            <select name="country" class="form-control select2">
                                                <option value="">Default Select</option>
                                                <option value="cz">Czech Republic</option>
                                                <option value="de">Germany</option>
                                                <option value="pl">Poland</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg">
                                        <p class="mg-b-10">Address</p>
                                        <input class="form-control" placeholder="Address" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Pin Code</p>
                                        <input class="form-control" placeholder="Pin Code" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Emergency Contact</p>
                                        <input class="form-control" placeholder="Emergency Contact" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="mb-4 hny_tt">
                                <h6 class="main-content-label mb-1">Office Details</h6>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <p class="mg-b-10">Office Email</p>
                                        <input class="form-control" placeholder="Office Email" type="Email">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10">Office Email</p>
                                        <input class="form-control" placeholder="Office Email" type="Number">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">

                        <div class="card custom-card">
                            <div class="mb-4 hny_tt">
                                <h6 class="main-content-label mb-1">Certifications</h6>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <p class="mg-b-10 fw-bold">PAN Card No</p>
                                        <input class="form-control" placeholder="Card No" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <p class="mg-b-10 fw-bold">Address Proof id No</p>
                                        <input class="form-control" placeholder="Address Proof id No" type="text">
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-6 col-md-4  mt-3">
                                        <p class="mg-b-10 fw-bold">Upload PAN Card</p>
                                        <input type="file" class="dropify" data-height="200">
                                    </div>

                                    <div class="col-lg-6 col-md-4 mt-3">
                                        <p class="mg-b-10 fw-bold">Upload ID Proof</p>
                                        <input type="file" class="dropify" data-height="200">
                                    </div>
                                </div>
                                <div>
                                    <div class="col-lg-12 p-0">
                                        <p class="mg-b-10 fw-bold">Upload Other Documents</p>
                                        <input type="file" class="dropify" data-height="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="mb-4 hny_tt">
                                <h6 class="main-content-label mb-1">Bank Detials</h6>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Bank Name</p>
                                        <input class="form-control" placeholder="Bank Name" type="text">
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Account Holder Name</p>
                                        <input class="form-control" placeholder="First Name" type="text">
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <p class="mg-b-10">Account Type</p>
                                        <select class="form-control select2">
                                            <option label="Choose one">
                                            </option>
                                            <option value="Firefox">
                                                Saving
                                            </option>
                                            <option value="Chrome">
                                                Current
                                            </option>

                                        </select>
                                    </div><!-- col-4 -->

                                </div>
                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-4">
                                        <p class="mg-b-10">Account Number</p>
                                        <input class="form-control" placeholder="Account Number" type="number">
                                    </div>
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Confirm Account Number</p>
                                        <input class="form-control" placeholder="Confirm Account Number" type="number">
                                    </div>
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">IFSC Code</p>
                                        <input class="form-control" placeholder="IFSC Code" type="number">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <p class="mg-b-10">Bank Branch</p>
                                        <input class="form-control" placeholder="Bank Branch" type="text">
                                    </div>
                                    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Bank City</p>
                                        <input class="form-control" placeholder="Bank City" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="mb-4 hny_tt">
                                <h6 class="main-content-label mb-1">Other</h6>
                            </div>
                            <div class="card-body">

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-4">
                                        <p class="mg-b-10">Reference</p>
                                        <input class="form-control" placeholder="Reference" type="text">
                                    </div><!-- col-4 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row mt-3 mb-4">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary my-2 btn-icon-text">
                            <a href="javascript:;" style="color: white;"> Save <i class="fa fa-save"></i></a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
