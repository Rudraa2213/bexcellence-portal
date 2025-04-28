@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Material Delivery Challan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Material Delivery Challan</li>
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
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <h4 class="card-title">List Of Items</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                <a href="{{ url('13sqft/13sqft-mdc-add') }}" class="btn btn-danger-gradient">
                                    <i class="bx bx-plus-circle mr-1"></i> Add New MDC
                                </a>
                            </div>
                        </div>

                        <form method="GET" action="{{ url()->current() }}" id="filterForm">
                            <div class="row justify-content-between mt-4">
                                <div class="col-lg-3">
                                    <div class="d-flex align-items-center">
                                        <span>Show</span>
                                        <select name="limit" class="form-control mx-2 wd-100"
                                            onchange="document.getElementById('filterForm').submit()">
                                            @foreach([10, 25, 50, 100, 'All'] as $size)
                                                <option value="{{ $size }}" {{ request('limit', 10) == $size ? 'selected' : '' }}>
                                                    {{ $size }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span>Entries</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-6"></div>
                                        <div class="col-6">
                                            <input name="search" id="searchInput" type="search" class="form-control"
                                                placeholder="Search here" value="{{ request('search') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mdcTable" class="table table-striped mg-b-0 text-md-nowrap">
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
                                        @forelse($totalMDC as $index => $mdc)
                                            <tr>
                                                <td align="center">{{ $totalMDC->firstItem() + $index }}.</td>
                                                <td>{{ $mdc->client_name ?? 'NA' }}</td>
                                                <td>{{ $mdc->client_po_no ?? 'NA' }}</td>
                                                <td>{{ $mdc->project_id ?? 'NA' }}</td>
                                                <td>
                                                    <div class="dropcenter">
                                                        <button class="btn btn-sm py-0" data-toggle="dropdown" type="button">
                                                            <i class="bx bx-dots-vertical bx-xs"></i>
                                                        </button>
                                                        <div class="dropdown-menu tx-13">
                                                            <a class="dropdown-item"
                                                                href="{{ url('13sqft/13sqft-mdc-pdf/' . $mdc->mdc_id) }}">View
                                                                MDC</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url('13sqft/13sqft-mdc-edit/' . $mdc->mdc_id) }}">Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No data available</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
                                <div class="mb-2">
                                    Showing {{ $totalMDC->firstItem() }} to {{ $totalMDC->lastItem() }} of
                                    {{ $totalMDC->total() }} entries
                                </div>
                                <div>
                                    <span>{{ $totalMDC->links('pagination::bootstrap-4') }}</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <script>
                const searchInput = document.getElementById('searchInput');
                let typingTimer;
                const delay = 800; // ms

                searchInput.addEventListener('input', () => {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(() => {
                        document.getElementById('filterForm').submit();
                    }, delay);
                });
            </script>
        </div>
@endsection