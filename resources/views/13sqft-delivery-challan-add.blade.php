@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Add New Purchase Order</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('purchase-orders.index') }}">PO</a></li>
                            <li class="breadcrumb-item active">Add New Purchase Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <form action="{{ route('purchase-orders.search') }}" method="GET">
                                    @csrf
                                    <label>Select PO No.<span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-start">
                                        <div class="w-100">
                                            <select class="form-control" name="po_number" required>
                                                <option value="">--Select--</option>
                                                <option value="13SQFT-PO-000185">13SQFT-PO-000185</option>
                                                <option value="13SQFT-PO-000192">13SQFT-PO-000192</option>
                                                <option value="13SQFT-PO-000191">13SQFT-PO-000191</option>
                                                <option value="13SQFT-PO-000190">13SQFT-PO-000190</option>
                                                <option value="13SQFT-PO-000189">13SQFT-PO-000189</option>
                                                <option value="13SQFT-PO-000188">13SQFT-PO-000188</option>
                                                <option value="13SQFT-PO-000187">13SQFT-PO-000187</option>

                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger-gradient text-nowrap ml-3">
                                            <i class="bx bx-save mr-1"></i> Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                <a href="{{ url()->previous() }}" class="btn btn-light">
                                    <i class="ti ti-arrow-left mr-1"></i> Go Back
                                </a>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <form action="">
                                    <div class="table-responsive">
                                        <table class="table table-striped mg-b-0 text-md-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="45">
                                                        <div class="checkbox">
                                                            <div
                                                                class="custom-checkbox custom-control d-flex align-items-center">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input"
                                                                    onchange="inputCheckAll(this)" id="checkbox-1"
                                                                    data-parsley-multiple="checkbox-1">
                                                                <label for="checkbox-1"
                                                                    class="custom-control-label text-danger c-pointer"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th class="text-center" width="45"> S.No. </th>
                                                    <th class="text-center">Item Name</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl-body">
                                                <tr>
                                                    <td align="center">
                                                        <div class="checkbox">
                                                            <div
                                                                class="custom-checkbox custom-control d-flex align-items-center">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-2"
                                                                    data-parsley-multiple="checkbox-2">
                                                                <label for="checkbox-2"
                                                                    class="custom-control-label text-danger c-pointer"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td align="center" scope="row">1.</td>
                                                    <td align="center">Hydraulic Scissor Trolley</td>
                                                    <td>Hydraulic Scissor Trolley Plate From Size -800*1200mm lifting Height
                                                        - 800 mm 6 inches wheel Weight â€“ 1 ton Color - RAL 7024 DARK GREY
                                                        Powder coating</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <div class="checkbox">
                                                            <div
                                                                class="custom-checkbox custom-control d-flex align-items-center">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-3"
                                                                    data-parsley-multiple="checkbox-3">
                                                                <label for="checkbox-3"
                                                                    class="custom-control-label text-danger c-pointer"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td align="center" scope="row">1.</td>
                                                    <td align="center">Hydraulic Scissor Trolley</td>
                                                    <td>Platform Size -700*1200mm lifting Height - 1800 mm Close Height
                                                        -300mm Weight - 300 kg 6 inches wheel Color - Yellow</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 text-center">
                                <button type="submit" id="swal-success" class="btn btn-danger-gradient"><i
                                        class="bx bx-file-blank mr-1"></i> Create DC</button>
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
        function inputCheckAll(e) {
            if ($(e).is(':checked') == true) {
                $(e).parents('table').find('tbody tr td:first-child input[type="checkbox"]').prop('checked', true);
            } else {
                $(e).parents('table').find('tbody tr td:first-child input[type="checkbox"]').prop('checked', false);
            }
        }

        // Success message after form submission
        @if(session('success'))
            swal({
                title: "Success!",
                text: "{{ session('success') }}",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        @endif
    </script>
@endsection