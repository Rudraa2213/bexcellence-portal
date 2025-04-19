@extends('layouts.app') {{-- Use your actual layout name here --}}
@section('content')

<div class="container-fluid">
    <div class="breadcrumb-header">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mb-2">Work Completion Certificate</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mg-b-0">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Work Completion Certificate</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h4 class="card-title">List Of Items</h4>
                        </div>
                        <div class="col-lg-6 text-right btn-set">
                            <a href="{{ url('13sqft/13sqft-wcc-add') }}" class="btn btn-danger-gradient">
                                <i class="bx bx-plus-circle mr-1"></i> Add New WCC
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-between mt-4">
                        <div class="col-lg-3">
                            <div class="d-flex align-items-center">
                                <span>Show</span>
                                <select class="form-control mx-2 wd-100">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="All">All</option>
                                </select>
                                <span>Entries</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <input type="search" class="form-control" placeholder="Search here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th width="45">S.No.</th>
                                    <th>Client</th>
                                    <th>Client PO</th>
                                    <th>Project ID</th>
                                    <th width="90">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1.</td>
                                    <td>Coldman Logistics</td>
                                    <td>SRC1/OPX/23-24/00007</td>
                                    <td>NA</td>
                                    <td>
                                        <div class="dropcenter">
                                            <button class="btn btn-sm py-0" data-toggle="dropdown" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{ url('/13sqft/13sqft-wcc-pdf') }}">View WCC</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td align="center">2.</td>
                                    <td>Mahindra-cero</td>
                                    <td>3200209387</td>
                                    <td>BMI/BUI/ELV/MAH/0919</td>
                                    <td>
                                        <div class="dropcenter">
                                            <button class="btn btn-sm py-0" data-toggle="dropdown" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{ url('/13sqft/13sqft-wcc-pdf') }}">View WCC</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-5">
                            <div class="dataTables_info my-3" role="status" aria-live="polite">
                                Showing 1 to 5 of 5 entries
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination justify-content-end">
                                    <li class="paginate_button page-item previous disabled">
                                        <a href="#" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item next">
                                        <a href="#" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
