@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Delivery Challan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Delivery Challan</li>
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
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <h4 class="card-title">List Of Items</h4>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                <a href="{{ url('13sqft/13sqft-delivery-challan-add') }}" class="btn btn-danger-gradient">
                                    <i class="bx bx-plus-circle mr-1"></i> Add New Delivery Challan
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th width="45">S.No.</th>
                                        <th>DC Date</th>
                                        <th>DC No.</th>
                                        <th>PO Date</th>
                                        <th>PO No.</th>
                                        <th>Client Name</th>
                                        <th width="90">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($totalDeliveryChallan as $index => $dc)
                                        <tr>
                                            <td align="center">{{ $totalDeliveryChallan->firstItem() + $index }}.</td>
                                            <td>{{ date('d-M-y', strtotime($dc->dc_date)) }}</td>
                                            <td>{{ $dc->dc_id }}</td>
                                            <td>{{ date('d-M-y', strtotime($dc->po_date))}}</td>
                                            <td>{{ $dc->po_id }}</td>
                                            <td>{{ $dc->client_name }}</td>

                                            <td>
                                                <div class="dropcenter">
                                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0"
                                                        data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                        <i class="bx bx-dots-vertical bx-xs"></i>
                                                    </button>
                                                    <div class="dropdown-menu tx-13">
                                                        <a class="dropdown-item"
                                                            href="{{ url('13sqft/13sqft-delivery-challan-pdf?id=' . $dc->dcsqftdata_id) }}">View
                                                            DC</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url('13sqft/13sqft-delivery-challan-edit?id=' . $dc->dcsqftdata_id) }}">Edit</a>
                                                        <a class="dropdown-item swal-parameter"
                                                            href="javascript:void0">Delete</a>
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
                                Showing {{ $totalDeliveryChallan->firstItem() }} to {{ $totalDeliveryChallan->lastItem() }} of
                                {{ $totalDeliveryChallan->total() }} entries
                            </div>
                            <div>
                                <span>{{ $totalDeliveryChallan->links('pagination::bootstrap-4') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-editor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.swal-parameter').click(function (e) {
                e.preventDefault();
                const deleteUrl = $(this).data('url');

                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                    function (isConfirm) {
                        if (isConfirm) {
                            $.ajax({
                                url: deleteUrl,
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function (result) {
                                    swal("Deleted!", "Your record has been deleted.", "success");
                                    window.location.reload();
                                },
                                error: function () {
                                    swal("Error", "There was an error deleting the record.", "error");
                                }
                            });
                        } else {
                            swal("Cancelled", "Your record is safe :)", "error");
                        }
                    });
            });
        });
    </script>
    <script>
        const searchInput = document.getElementById('searchInput');
        let typingTimer;
        const delay = 800;

        searchInput.addEventListener('input', () => {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(() => {
                document.getElementById('filterForm').submit();
            }, delay);
        });
    </script>




@endsection