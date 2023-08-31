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
                        <h2 class="main-content-title tx-24 mg-b-5">New Department Creation</h2>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                              <a href="{{ route('list.roles') }}" style="color: white;"> <i class="fa-solid fa-table-list"></i> &nbsp; Department Listing</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Create New Designation / Role</h6>
                                <form class="forms-sample" action="{{ route('new.roles') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Role Name : <b class="text-danger">*</b></label>
                                            <input type="text" class="form-control" name="role_name" required
                                                placeholder="Enter Role Name" value="{{ old('role_name') }}" readonly onfocus="this.removeAttribute('readonly');">
                                                @error('role_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Status : <b class="text-danger">*</b></label>
                                            <select class="form-control select2"  name="status" required>
                                                <option value="active">Active Role</option>
                                                <option value="inactive">Inactive Role</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Designation / Role Description</label>
                                            <textarea class="form-control" name="designation_description" rows="4" cols="50" style="height: auto"></textarea>
                                                @error('role_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary me-2 w-50">Create Designation / Role</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
