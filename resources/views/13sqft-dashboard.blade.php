@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Welcome to 13SQFT!</h2>
                <p class="mg-b-0">Sales monitoring dashboard template.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-primary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total MDC Raised</p>
                            <h5 class="text-white">124</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-danger-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-layers tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total WCC Raised</p>
                            <h5 class="text-white">55</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-success-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total PO Raised</p>
                            <h5 class="text-white">21</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-warning-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-dollar-sign tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total PO Amount</p>
                            <h5 class="text-white"><i class="bx bx-rupee"></i>538,535,000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-secondary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total DC Raised</p>
                            <h5 class="text-white">7</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-info-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-dollar-sign tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-1 text-white">Total DC Value</p>
                            <h5 class="text-white"><i class="bx bx-rupee"></i>1538,535,000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm mt-4">
        <div class="col-xl-6 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mg-b-5">Sales Activity</h3>
                    <p>Sales activities are the tactics that sales people use to achieve their goals and objective</p>
                </div>
                <div class="product-timeline card-body pt-2 mt-1">
                    <ul class="timeline-1 mb-0">
                        <li class="mt-0 d-flex align-items-center justify-content-between">
                            <div>
                                <i class="ti-list bg-primary-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ml-3">Total Leads</span>
                            </div>
                            <span class="font-weight-semibold tx-14 ml-3">177</span>
                        </li>
                        <li class="mt-0 d-flex align-items-center justify-content-between">
                            <div>
                                <i class="ti-file bg-danger-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ml-3">Total BOQ Submitted</span>
                            </div>
                            <span class="font-weight-semibold tx-14 ml-3">168</span>
                        </li>
                        <li class="mt-0 d-flex align-items-center justify-content-between">
                            <div>
                                <i class="ti-files bg-success-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ml-3">BOQ Submitted By - <span class="text-muted">Mukesh</span></span>
                            </div>
                            <span class="font-weight-semibold tx-14 ml-3">135</span>
                        </li>
                        <li class="mt-0 d-flex align-items-center justify-content-between">
                            <div>
                                <i class="ti-files bg-warning-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ml-3">BOQ Submitted By - <span class="text-muted">Ankush</span></span>
                            </div>
                            <span class="font-weight-semibold tx-14 ml-3">24</span>
                        </li>
                        <li class="mt-0 d-flex align-items-center justify-content-between">
                            <div>
                                <i class="ti-files bg-purple-gradient text-white product-icon"></i>
                                <span class="font-weight-semibold mb-4 tx-14 ml-3">BOQ Submitted By - <span class="text-muted">Rahul Raj</span></span>
                            </div>
                            <span class="font-weight-semibold tx-14 ml-3">2</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 col-lg-6">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5"> PO Analytics </div>
                    <p class="mg-b-20">Purachase orders achieved by the team members.</p>
                    <div class="ht-200 ht-sm-300" id="flotBar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
