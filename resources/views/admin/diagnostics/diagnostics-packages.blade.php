@extends('admin.layout.master') @section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" />
<style>
    .summ_tit {
        background-color: white;
        padding: 4px 0px;
        text-align: center;
        margin-bottom: 14px;
        border: 1px solid #c1c1c1;
        border-radius: 10px;
    }
    .ssinner h5 {
    font-size: 13px;
}

.ssinner {
    border-bottom: 1px solid #dddddd;
    padding: 6px;
}

    input[type="checkbox"] {
        width: 25px; /*Desired width*/
        height: 25px; /*Desired height*/
    }

    table.tableizer-table {
        font-size: 12px;
        border: 1px solid #ccc;
        font-family: Arial, Helvetica, sans-serif;
    }
    .tableizer-table td {
        padding: 4px;
        margin: 3px;
        border: 1px solid #ccc;
    }
    .tableizer-table th {
        background-color: #104e8b;
        color: #fff;
        font-weight: bold;
    }
    .hny_gap{
        gap: 12px;
    }

    .my-badge{
        background: #465988!important;
        color: white!important;
        border-radius: 15px!important;
        cursor: pointer!important;
    }
</style>
@endsection @section('content')
<div class="main-content side-content pt-0">
    <div class="main-container container-fluid">
        <div class="inner-body">
            <!-- Page Header -->
            {{-- <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Packages List</h2>
                </div> --}}
{{--
               <div class="d-flex hny_gap">
                <div class="summ_tit">
                    <div class="ssinner">
                        <h5>Total Diagnostics</h5>
                    </div>
                    <div class="newdis">
                        <p class="mb-0">500</p>
                    </div>
                </div>


                <div class="summ_tit">
                    <div class="ssinner">
                        <h5>Diagnostics Allocated with Lab</h5>
                    </div>
                    <div class="newdis">
                        <p class="mb-0">205</p>
                    </div>
                </div>
               </div>
 --}}

            {{-- </div> --}}
            <!-- End Page Header -->

            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Packages List</h2>

                </div>
                <div class="d-flex">
                    <div class="justify-content-center">

                        {{-- <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                            <i class="fa fa-filter me-2"></i> Filter
                        </button> --}}

                        <button type="button" class="btn btn-primary my-2 btn-icon-text">
                          <a href="{{ route('create.diagnostics.packages') }}" style="color: white;">  <i class="fa fa-add me-2"></i> Add New Packages</a>
                        </button>

                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="tableizer-table" id="dataTable">
                                    <thead>
                                        <tr class="tableizer-firstrow">
                                            <th>ID</th>
                                            <th>providerId</th>
                                            <th>name</th>
                                            <th>category</th>
                                            <th>test included ids</th>
                                            <th>basePrice</th>
                                            <th>discount</th>
                                            <th>sampleType</th>
                                            <th>method</th>
                                            <th>description</th>
                                            <th>resultTime</th>
                                            <th>age group</th>
                                            <th>gender</th>
                                            <th>organs</th>
                                            <th>tags</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>LP-01</td>
                                            <td>AHDPL-001</td>
                                            <td>Full Body Health Check- Basic</td>
                                            <td>Pathalogy</td>
                                            <td>
                                                <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-128</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-232</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-98</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-192</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-118</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-32</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-29</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-30</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-217</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-218</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-15</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-199</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-14</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-116</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-115</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-247</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-74</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-248</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-219</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-195</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-58</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-47</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-190</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-39</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-61</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-239</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-59</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-60</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-257</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-251</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-225</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-226</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-240</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-163</span>,
                                                    <span class="badge badge-pill badge-secondary my-badge"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">LT-127</span>
                                            </td>
                                            <td>799</td>
                                            <td>upto 15%</td>
                                            <td>Serum (1 ml)</td>
                                            <td>CLIA</td>
                                            <td>AFP (Alpha Feto Protein)</td>
                                            <td>Same Day</td>
                                            <td>0-100</td>
                                            <td>Both</td>
                                            <td>Liver, Yolk Sac</td>
                                            <td>Baby risk, Genetic Problem, Birth Defects, Liver Cancer</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-edit"><i class="fas fa-edit"></i> &nbsp; Edit &nbsp;</a>
                                                <a href="#" class="btn btn-sm btn-remove" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> &nbsp; Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Row -->




            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LT-128 Information</h5>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                         <p><b>Provider ID</b> : AHDPL-001</p>
                        </div>
                        <div class="mb-3">
                            <p><b>Name</b> : ABO Group & RH Type (Blood Group) </p>
                        </div>
                        <div class="mb-3">
                            <p><b>Category</b> : Blood Sample </p>
                        </div>
                        <div class="mb-3">
                            <p><b>Base Price</b> : 99 </p>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection @section('script')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
<script>
    new DataTable("#dataTable");
</script>
@endsection
