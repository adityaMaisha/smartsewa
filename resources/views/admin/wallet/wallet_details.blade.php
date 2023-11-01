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
                    <h2 class="main-content-title tx-24 mg-b-5">Wallet of Vendor #SSVENDOR1122</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Vendor Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wallet Details</li>
                    </ol>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                        <button type="button" class="btn btn-primary my-2 btn-icon-text" data-bs-target="#add_money" data-bs-toggle="modal">
                          <i class="fa fa-credit-card me-2"></i> Add Money
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="modal" id="add_money" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo rounded-5">
                        <div class="modal-header">
                            <h6 class="modal-title">Add Money</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                        </div>
                        <form method="post" id="add_amount_in_wallet" action="{{ route('wallet.addmoney') }}">
                            @csrf()
                            <div class="row row-sm">
                            <div class="col-lg-12 col-md-12">
                                <div class="">
                                    <div class="card-body">
                                        <div>
                                            <h6 class=" mb-2">Amount</h6>
                                        </div>
                                        <div>
                                            <input id="amount" class="form-control" type="text" name="amount" placeholder="Enter Amount" required>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input class="btn ripple btn-primary" type="submit" value="Add Money">
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">cancel</button>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row row-sm">
                <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
                    <div class="card custom-card crypto-cur">
                        <div class="card-header border-bottom-0 mb-0">
                            <label class="main-content-label mb-0">Wallet</label>
                            
                        </div>
                        <div class="card-body pt-1">
                            <div class="d-flex">
                                <img src="{{ asset('dashboard/img/svgs/inr.svg') }}" class="wd-40 ht-40 me-3 my-auto" alt="">
                                <div class="">
                                    <span class="text-uppercase tx-14 mt-4 text-muted">Available Amount</span>
                                    <div class="d-flex my-auto"><h2 class="mt-1 mb-0">1,80,000</h2></div>
                                </div>
                            </div>
                            <div class="d-flex mt-4 justify-content-between">
                                <div>
                                    <p class="text-uppercase tx-13 text-muted mb-1">Amount Add in this month</p>
                                    <div class="d-flex my-auto"><h5 class="mt-1 mb-0">₹ 1,80,000</h5></div>
                                </div>
                                <div>
                                    <p class="text-uppercase tx-13 text-muted mb-1">Total Added Amount</p>
                                    <div class="d-flex my-auto"><h5 class="mt-1 mb-0">₹ 1,80,000</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card crypto-cur2">
                        <div class="card-header border-bottom-0">
                            <label class="main-content-label mt-3">My  Wallet</label>
                            <div class="float-end my-auto"><a class="btn btn-light mt-1" href="javascript:void(0);"><i class="fa fa-plus"></i></a> </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex"><img src="../assets/img/svgs/crypto-currencies/btc.svg" class="wd-30 ht-30 me-3 my-auto" alt="img">
                                <div class="mt-1">
                                    <h5 class="mb-2 tx-16">Bitcoin Account</h5>
                                    <span class="mb-0 tx-18 text-dark font-weight-normal">2.2546854 BTC = $6,334.89</span>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3 d-block d-sm-flex">
                                <div class="col"> <a class="btn btn-light btn-block btn-square" href="javascript:void(0);">Transfer</a></div>
                                <div class="col"> <a class="btn btn-white border border-start-0 btn-block btn-square" href="javascript:void(0);">Network Transfer</a> </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex"><img src="../assets/img/svgs/crypto-currencies/dash.svg" class="wd-30 ht-30 me-3 my-auto" alt="img">
                                <div class="mt-1">
                                    <h5 class="mb-2 tx-16">Dash</h5>
                                    <span class="mb-0 tx-18 text-dark font-weight-normal">3.3454545 DASH = $5,232.23</span>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3  d-block d-sm-flex">
                                <div class="col"> <a class="btn btn-light btn-block btn-square" href="javascript:void(0);">Transfer</a></div>
                                <div class="col"> <a class="btn btn-white border border-start-0 btn-block btn-square" href="javascript:void(0);">Network Transfer</a> </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex"><img src="../assets/img/svgs/crypto-currencies/miota.svg" class="wd-30 ht-30 me-3 my-auto" alt="img">
                                <div class="mt-1">
                                    <h5 class="mb-2 tx-16">IOTA</h5>
                                    <span class="mb-0 tx-18 text-dark font-weight-normal">1.3455672 IOTA = $2,434.32</span>
                                </div>
                            </div>
                            <div class="row no-gutters mt-3 d-block d-sm-flex">
                                <div class="col"> <a class="btn btn-light btn-block btn-square" href="javascript:void(0);">Transfer</a></div>
                                <div class="col"> <a class="btn btn-white border border-start-0 btn-block btn-square" href="javascript:void(0);">Network Transfer</a> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <label class="main-content-label mb-0">BTC Wallet Address</label>
                            <div class="row mt-3 crypto-wallet">
                                <div class="col-md-10">
                                    <p>Wallet Address .</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg" id="wallet-address" value="afb0dc8bc84625587b85415c86ef43ed8df">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary clipboard-icon clipboard-box" data-clipboard-target="#wallet-address">COPY</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img src="../assets/img/pngs/qrcode.png" alt="qrcode" class="ht-100 float-end mb-2 mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm px-4">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card border custom-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent me-3 my-auto"><i class="fe fe-arrow-down-left text-primary"></i></span>
                                            <div class="">
                                                <p class="text-uppercase tx-13 text-muted mb-1">Received</p>
                                                <h5 class="">4,342.4545 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="card border custom-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                <i class="fe fe-arrow-up-right text-primary"></i>
                                            </span>
                                            <div class="">
                                                <p class="text-uppercase tx-13 text-muted mb-1">Sent</p>
                                                <h5 class="">5,194.24623539 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="card border custom-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent me-3 my-auto"><i class="fas fa-wallet text-primary"></i></span>
                                            <div class="">
                                                <p class="text-uppercase tx-13 text-muted mb-1">Balance</p>
                                                <h5 class="">2.33823739 <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row row-sm">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card wallet">
                                <div class="card-body">
                                    <label class="main-content-label mb-2">ETHEREUM  Wallet</label>
                                    <br>
                                    <span class="text-muted">Wallet Address</span>
                                    <br>
                                    <div class="d-flex mt-4">
                                        <img src="../assets/img/svgs/crypto-currencies/eth.svg" class="wd-40 ht-40 me-3 my-auto" alt="">
                                        <div class="">
                                            <span class="text-uppercase tx-14 mt-4 text-muted">Available ETH</span>
                                            <div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.257134</h4><span class="mt-auto ms-2">ETH</span></div>
                                        </div>
                                        <img src="../assets/img/pngs/qrcode.png" class="wd-50 ht-50  my-auto ms-auto float-end" alt="">
                                    </div>
                                    <div class="input-group my-4">
                                        <span class="input-group-addon-left bg-light"><i class="cf cf-btc"></i></span>
                                        <input type="text" class="form-control input-lg" value="ac34290d04cc54f02d22" id="ethereum-wallet">
                                        <span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#ethereum-wallet"><i class="fe fe-copy"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Received ETH</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-down-left text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">+ 1,50,500</h5>
                                                <span class="my-auto ms-2">ETH</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Sent ETH</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-up-right text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">- 25,500</h5>
                                                <span class="my-auto ms-2">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <button class="btn btn-block btn-primary">Deposit</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-block btn-outline-primary">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End col -->
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card wallet">
                                <div class="card-body">
                                    <label class="main-content-label mb-2">Ripple  Wallet</label>
                                    <br>
                                    <span class="text-muted">Wallet Address</span>
                                    <br>
                                    <div class="d-flex mt-4">
                                        <img src="../assets/img/svgs/crypto-currencies/xrp.svg" class="wd-40 ht-40 me-3 my-auto" alt="">
                                        <div class="">
                                            <span class="text-uppercase tx-14 mt-4 text-muted">Available XRP</span>
                                            <div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.243457</h4><span class="mt-auto ms-2">XRP</span></div>
                                        </div>
                                        <img src="../assets/img/pngs/qrcode.png" class="wd-50 ht-50  my-auto ms-auto float-end" alt="">
                                    </div>
                                    <div class="input-group my-4">
                                        <span class="input-group-addon-left bg-light"><i class="cf cf-xrp"></i></span>
                                        <input type="text" class="form-control input-lg" value="1EeWrxcDDjyhWwcKu" id="ripple-wallet">
                                        <span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#ripple-wallet"><i class="fe fe-copy"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Received XRP</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-down-left text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">+ 1,25,500</h5>
                                                <span class="my-auto ms-2">XRP</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Sent XRP</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-up-right text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">- 59000</h5>
                                                <span class="my-auto ms-2">XRP</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <button class="btn btn-block btn-primary">Deposit</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-block btn-outline-primary">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End col -->
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card wallet">
                                <div class="card-body">
                                    <label class="main-content-label mb-2">Dash  Wallet</label>
                                    <br>
                                    <span class="text-muted">Wallet Address</span>
                                    <br>
                                    <div class="d-flex mt-4">
                                        <img src="../assets/img/svgs/crypto-currencies/dash.svg" class="wd-40 ht-40 me-3 my-auto" alt="">
                                        <div class="">
                                            <span class="text-uppercase tx-14 mt-4 text-muted">Available DASH</span>
                                            <div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.022645</h4><span class="mt-auto ms-2">DASH</span></div>
                                        </div>
                                        <img src="../assets/img/pngs/qrcode.png" class="wd-50 ht-50  my-auto ms-auto float-end" alt="">
                                    </div>
                                    <div class="input-group my-4">
                                        <span class="input-group-addon-left bg-light"><i class="cf cf-dash"></i></span>
                                        <input type="text" class="form-control input-lg" value="1N4LsCG8ko4aia4vJYR" id="dash-wallet">
                                        <span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#dash-wallet"><i class="fe fe-copy"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Received DASH</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-down-left text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">+ 3,25,765</h5>
                                                <span class="my-auto ms-2">DASH</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Sent DASH</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-up-right text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">- 1,12,490</h5>
                                                <span class="my-auto ms-2">DASH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <button class="btn btn-block btn-primary">Deposit</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-block btn-outline-primary">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End col -->
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card wallet">
                                <div class="card-body">
                                    <label class="main-content-label mb-2">Litecoin  Wallet</label>
                                    <br>
                                    <span class="text-muted">Wallet Address</span>
                                    <br>
                                    <div class="d-flex mt-4">
                                        <img src="../assets/img/svgs/crypto-currencies/ltc.svg" class="wd-40 ht-40 me-3 my-auto" alt="">
                                        <div class="">
                                            <span class="text-uppercase tx-14 mt-4 text-muted">Available LTC</span>
                                            <div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.0133467</h4><span class="mt-auto ms-2">LTC</span></div>
                                        </div>
                                        <img src="../assets/img/pngs/qrcode.png" class="wd-50 ht-50  my-auto ms-auto float-end" alt="">
                                    </div>
                                    <div class="input-group my-4">
                                        <span class="input-group-addon-left bg-light"><i class="cf cf-ltc"></i></span>
                                        <input type="text" class="form-control input-lg" value="1LgejHMvhRoWxRqNM" id="litecoin-wallet">
                                        <span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#litecoin-wallet"><i class="fe fe-copy"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Received LTC</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-down-left text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">+ 2,32,598</h5>
                                                <span class="my-auto ms-2">LTC</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <p class="text-uppercase tx-13 text-muted mb-1">Sent LTC</p>
                                            <div class="d-flex my-auto">
                                                <span class="crypto-icon bg-primary-transparent me-3">
                                                    <i class="fe fe-arrow-up-right text-primary"></i>
                                                </span>
                                                <h5 class="my-auto">- 1,34,568</h5>
                                                <span class="my-auto ms-2">LTC</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <button class="btn btn-block btn-primary">Deposit</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-block btn-outline-primary">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End col -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Row End -->


        </div>
    </div>
</div>
@endsection
@section('script')
@endsection