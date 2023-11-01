@extends('admin.layout.master')
@section('style')
@endsection
@section('content')
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">End Custumers</h2>
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
                                <div class="mb-4 hny_tt">
                                    <h6 class="main-content-label mb-1">Service Details</h6>
                                </div>
                                <div class="card-body">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg">
                                            <p class="mg-b-10">Add new Services <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Add new Services" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Service Name <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Service Name" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
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


                                        {{-- <div class="col-lg">
                                            <p class="mg-b-10">Title <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Title" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div> --}}

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Details <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Details" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>

                                    </div>

                                    <div class="row row-sm mg-b-20">

                                        <div class="col-lg">
                                            <p class="mg-b-10">Cost <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Cost" type="text" name="employee_first_name" required>
                                            <span class="text-danger ERROR__employee_first_name"></span>
                                        </div>
                                        

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Vitals Range <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Vitals Range" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Organs Attached <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Organs Attached" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>

                                    </div>

                                    <div class="row row-sm mg-b-20">

                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Time Consume <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Time Consume" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>


                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">servicable pincodes <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="servicable pincodes" type="text" name="employee_last_name" required>
                                            <span class="text-danger ERROR__employee_last_name"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="mb-4 hny_tt">
                                    <h6 class="main-content-label mb-1">Select Customer</h6>
                                </div>
                                <div class="card-body">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg">
                                            <p class="mg-b-10">Gender</p>
                                            <div class="form-group">
                                                <select name="customer_gender" class="form-control select2">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                <span class="text-danger ERROR__customer_gender"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Age Group <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Age Group" type="text" name="ageGroup" required>
                                            <span class="text-danger ERROR__ageGroup"></span>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Organ Vital <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Organ Vital" type="text" name="organVital" required>
                                            <span class="text-danger ERROR__organVital"></span>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Vital Range <b class="text-danger">*</b></p>
                                            <input class="form-control" placeholder="Vital Range" type="text" name="vitalRange" required>
                                            <span class="text-danger ERROR__vitalRange"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="mb-4 hny_tt">
                                    <h6 class="main-content-label mb-1">Activation time</h6>
                                </div>
                                <div class="card-body">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">Start date & time <b class="text-danger">*</b></p>
                                            <input class="form-control" type="datetime-local" name="startDateTime" required>
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="mg-b-10">End date & time <b class="text-danger">*</b></p>
                                            <input class="form-control" type="datetime-local" name="endDateTime" required>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-3 mb-4">
                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary my-2 btn-icon-text" style="color: white;"
                                value="&nbsp; Create New End Customer &nbsp;">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getDynamicStates() {

            var country_id = $('select#user_country').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('states.ajax') }}",
                //dataType:'json',
                data: {
                    country_id: country_id
                },
                beforeSend: function() {

                    $('#user_state').html('');
                    $('#user_city').html('');

                },
                success: function(data) {


                    if (data.solve == true) {
                        $('#user_state').html(data.html_data);
                    }

                },
                error: function(err) {

                    var content_data = '<option value=""> Select State</option>';
                    $('#user_state').html(content_data);

                },
                complete: function() {

                    $(function() {
                        $('#user_state').select2();
                    });

                }
            });

        }


        function getDynamicCities() {

            var state_id = $('select#user_state').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('cities.ajax') }}",
                //dataType:'json',
                data: {
                    state_id: state_id
                },
                beforeSend: function() {

                    $('#user_city').html('');

                },
                success: function(data) {

                    if (data.solve == true) {
                        $('#user_city').html(data.html_data);
                    }

                },
                error: function(err) {

                    var content_data = '<option value=""> Select City</option>';
                    $('#user_city').html(content_data);

                },
                complete: function() {

                    $(function() {
                        $('#user_city').select2();
                    });

                }
            });

        }


        // onLoad || onChange
        $(function() {
            $('#user_country').select2();
            getDynamicStates();
            getDynamicCities();
            $("select#user_country").change(getDynamicStates);
            $("select#user_state").change(getDynamicCities);
        });


        $(document).on('submit', '#employeeFormData', function(ev) {

            ev.preventDefault();
            var frm = $('#employeeFormData');
            var form = $('#employeeFormData')[0];
            var data = new FormData(form);

            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                async: false,
                cache: false,
                data: data,
                beforeSend: function() {

                    $('span[class*="ERROR__"]').html("");
                    $('body').css('pointer-events', 'none');

                },
                success: function(data) {

                    if (data.success == true) {
                        python(data.message, 'Great');
                    }else{
                        python(data.message, 'Whoops!', 'red');
                        $.each(data.errors, function (field, message) {
                            $(".ERROR__" + field).html('<div class="text-danger">' + message + "</div>");
                        });
                    }

                },
                error: function(err) {

                    //

                },
                complete: function(data) {

                    $(function() {
                        htmlError();
                        $('body').css('pointer-events', 'auto');
                    });

                }

            });

        });

    </script>
@endsection
