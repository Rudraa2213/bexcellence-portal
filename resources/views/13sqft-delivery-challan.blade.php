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
                        <div class="row justify-content-between mt-4">
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
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
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-sm-8 col-12">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
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
                                        <th>DC Date</th>
                                        <th>DC No.</th>
                                        <th>PO Date</th>
                                        <th>PO No.</th>
                                        <th>Client Name</th>
                                        <th width="90">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center" scope="row">1.</td>
                                        <td>02-Nov-22</td>
                                        <td>13SQFT-DC-00042</td>
                                        <td>02-Nov-22</td>
                                        <td>13SQFT-PO-000162</td>
                                        <td>Abdul Tahir</td>
                                        <td>
                                            <div class="dropcenter">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0"
                                                    data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                    <i class="bx bx-dots-vertical bx-xs"></i>
                                                </button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{ url("13sqft/13sqft-delivery-challan-pdf") }}">View DC</a>
                                                    <a class="dropdown-item" href="javascript:void0">Edit</a>
                                                    <a class="dropdown-item swal-parameter"
                                                        href="javascript:void0">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td align="center" scope="row">2.</td>
                                        <td>05-Jul-22</td>
                                        <td>13SQFT-DC-00040</td>
                                        <td>04-Jul-22</td>
                                        <td>13SQFT-PO-000151</td>
                                        <td>Abdul Tahir</td>
                                        <td>
                                            <div class="dropcenter">
                                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0"
                                                    data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                    <i class="bx bx-dots-vertical bx-xs"></i>
                                                </button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{ url("13sqft/13sqft-delivery-challan-pdf") }}">View DC</a>
                                                    <a class="dropdown-item" href="javascript:void0">Edit</a>
                                                    <a class="dropdown-item swal-parameter"
                                                        href="javascript:void0">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info my-3" id="example_info" role="status" aria-live="polite">Showing
                                    1 to 5 of 5 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                    <ul class="pagination justify-content-end">
                                        <li class="paginate_button page-item previous disabled" id="example_previous"><a
                                                href="#" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" class="page-link">4</a></li>
                                        <li class="paginate_button page-item next" id="example_next"><a href="#"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
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
@endsection