@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Purchase Order</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"> <a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a> </li>
                            <li class="breadcrumb-item active">Purchase Order</li>
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
                                <h4 class="card-title m-0">List of Purchase Orders</h4>
                            </div>
                            <div class="col-lg-6 text-right btn-set">
                                <a href="{{ url('13sqft/13sqft-po-add') }}" class="btn btn-danger-gradient">
                                    <i class="bx bx-plus-circle mr-1"></i> Add New PO
                                </a>
                            </div>
                        </div>

                        <div class="row justify-content-between mt-4">
                            <div class="col-lg-3">
                                <div class="d-flex align-items-center">
                                    <span>Show</span>
                                    <select class="form-control mx-2 wd-100">
                                        <option value="10"> 10 </option>
                                        <option value="20"> 20 </option>
                                        <option value="50"> 50 </option>
                                        <option value="100"> 100 </option>
                                        <option value="All"> All </option>
                                    </select>
                                    <span>Entries</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
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
                                        <th>PO Date</th>
                                        <th>PO No.</th>
                                        <th>Client Name</th>
                                        <th>Project Location</th>
                                        <th>Ship To</th>
                                        <th>Value</th>
                                        <th width="90">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Sample rows, replace with @foreach loop --}}
                                    <tr>
                                        <td align="center">1.</td>
                                        <td>04-Dec-24</td>
                                        <td>13SQFT-PO-000192</td>
                                        <td>Bandhu Prasad</td>
                                        <td>Gumla, Jharkhand</td>
                                        <td>Ghaghra, Yashoda Niwas Pakartoli, Kotamati Road Ghaghra: - 835208</td>
                                        <td>16284</td>
                                        <td>
                                            <div class="dropcenter">
                                                <button class="btn btn-sm py-0" data-toggle="dropdown" type="button">
                                                    <i class="bx bx-dots-vertical bx-xs"></i>
                                                </button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{ url('13sqft/13sqft-po-pdf') }}">View PO</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td align="center" scope="row">3.</td>
                                    <td>16-Oct-24</td>
                                    <td>13SQFT-PO-000190</td>
                                    <td>Shivam Pandey</td>
                                    <td>Bhavnagar 364002 (Gujarat)</td>
                                    <td>C-103, B/h. Lakhubhai Hall, kaliyabid Bhavnagar 364002 ( Gujarat )</td>
                                    <td>208624</td>
                                    <td>
                                        <div class="dropcenter">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0" data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="13sqft/13sqft-po-pdf.php">View MDC</a>
                                                <a class="dropdown-item" href="javascript:void0">Edit</a>
                                                <a class="dropdown-item swal-parameter" href="javascript:void0">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" scope="row">4.</td>
                                    <td>03-Oct-24</td>
                                    <td>13SQFT-PO-000189</td>
                                    <td>Kavita Bhatiya</td>
                                    <td>Hyderabad Telangana, India</td>
                                    <td>Purva Soukhyam Perumanttunallur, Chennai, Tamil Nadu 603202</td>
                                    <td>430000</td>
                                    <td>
                                        <div class="dropcenter">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0" data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="13sqft/13sqft-po-pdf.php">View MDC</a>
                                                <a class="dropdown-item" href="javascript:void0">Edit</a>
                                                <a class="dropdown-item swal-parameter" href="javascript:void0">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-5">
                                <div class="dataTables_info my-3">Showing 1 to 5 of 5 entries</div>
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
@endsection