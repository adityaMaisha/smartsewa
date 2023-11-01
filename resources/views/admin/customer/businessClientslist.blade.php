@extends('admin.layout.master')
@section('style')
<style>
    .main-wrapper .page-wrapper .page-content {
      flex-grow: 1;
      padding: 25px;
      margin-top: 60px;
      background: #fff;
    }

    form small {
      color: #666;
      font-size: 10px;
    }

    .select2-container .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 100%;
    }

    .select2-container--default .select2-selection--single {
      background-color: #fff;
      border: 1px solid #e9ecef;
      border-radius: 4px;
    }

    .form-control,
    .select2-container--default .select2-search--dropdown .select2-search__field,
    .typeahead.tt-hint,
    .typeahead.tt-input {
      display: block;
      width: 100%;
      height: 45px;
      padding: 0.469rem 0.8rem;
      font-size: .875rem;
      font-weight: 400;
      line-height: 1.5;
      color: #000;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #e9ecef;
      appearance: none;
      border-radius: 0.25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .pass2,
    .pass2 {
      position: relative;
    }

    .toggle-password,
    .toggle-password1 {
      position: absolute;
      right: 15px;
      top: 45px;
      font-size: 14px;
      color: #757575;
      cursor: pointer;
    }

    div#ErrMsg {
      font-size: 10px;
      font-weight: 500;
      color: red;
      margin-top: 0;
      margin-bottom: 10px;
    }

  </style>
@endsection
@section('content')
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Business Client Service Listing</h2>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                              <a href="{{ route('business.clients') }}" style="color: white;">  <i class="fa fa-add me-2"></i> Add New</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover" style="width:100%" id="example2">
                                  <thead>
                                    <tr>
                                      <th>Sr No.</th>
                                      <th>Service Name</th>
                                      <th>Category</th>
                                      <th>Cost</th>
                                      <th>Vital Units</th>
                                      <th>Vital Range</th>
                                      <th>Organs</th>
                                      <th>Consumable Time</th>
                                      <th>Pin Code</th>
                                      <th>Act. Start Time</th>
                                      <th>Act. End Time</th>
                                      <th>Status</th>
                                      <th>Created at</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td>1</td>
                                      <td><div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple  dropdown-toggle" data-bs-toggle="dropdown" type="button"><i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size: 18px;"></i></button>
                                        <div class="dropdown-menu tx-13">
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            {{-- <a class="dropdown-item" href="#">Edit</a> --}}
                                            <a class="dropdown-item" href="javascript:void(0)" >Delete</a>
                                            <a class="dropdown-item" href="#" data-bs-target="#modal-datepicker" data-bs-toggle="modal" >Take Service</a>
                                        </div>
                                     </div></td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div>
                        </div>
                    </div>
                </div>
                {{-- model --}}

                <div class="modal" id="modal-datepicker">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                      <div class="modal-header">
                        <h6 class="modal-title">Take Smart Sewa Service</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                        <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                              <p class="mg-b-10">Number Of Customer <b class="text-danger">*</b></p>
                              <input class="form-control" type="number" name="number_of_customer" id="number_of_customer" required>
                          </div>
                          <div class="col-md-6">
                            <p class="mg-b-10">Cost Per Customer<b class="text-danger">*</b></p>
                            <input class="form-control" type="number" name="number_of_customer" id="number_of_customer" required>
                        </div>
                          <div class="col-md-6 mg-t-10 mg-lg-t-0 mt-2">
                            <p class="mg-b-10">Total Cost<b class="text-danger">*</b></p>
                            <input class="form-control" type="number" name="number_of_customer" id="number_of_customer" required>
                        </div>

                        <div class="col-md-6 mg-t-10 mg-lg-t-0 mt-2">
                          <p class="mg-b-10">Upload Customer List<b class="text-danger">*</b></p>
                          <input class="form-control" type="file" name="number_of_customer" id="number_of_customer" required>
                      </div>
                        </div>
                        
                        <!-- Select2 -->
                      </div>
                      <div class="modal-footer">
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn ripple btn-primary" type="button">Proceed To Pay</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script>
    new DataTable('#dataTable');
</script>
@endsection
