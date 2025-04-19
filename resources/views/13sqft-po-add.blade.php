@extends('layouts.app') {{-- Assuming you have a layout file with header, sidebar, and footer --}}

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Add New Purchase Order</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('purchase-order.index') }}">PO</a></li>
                            <li class="breadcrumb-item active">Add New Purchase Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <form method="POST" action="{{ route('purchase-order.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-end">
                                <div class="col-12 text-right btn-set">
                                    <a href="javascript:history.back()" class="btn btn-light">
                                        <i class="ti ti-arrow-left mr-1"></i> Go Back
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>PO Date<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Contact Person Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Vendor Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Vendor Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Vendor GST No.<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Project ID<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Project Location<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Payment Terms<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Site Engineer<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Hub Coordinator No.<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                    <label>Material Delivery Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>

                            {{-- Item Table --}}
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped mg-b-0 text-md-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="45">S.No.</th>
                                                    <th class="text-center">Item Name</th>
                                                    <th class="text-center">Description</th>
                                                    <th class="text-center">Make</th>
                                                    <th class="text-center">HSN Code</th>
                                                    <th class="text-center">Qty.</th>
                                                    <th class="text-center">Unit</th>
                                                    <th class="text-center">GST (%)</th>
                                                    <th class="text-center">Price Per Unit</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">GST Amount</th>
                                                    <th class="text-center" width="90"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl-body">
                                                <tr>
                                                    <td align="center">1.</td>
                                                    @for ($i = 0; $i < 10; $i++)
                                                        <td align="center"><input type="text" name="items[{{ $i }}][item_name]"
                                                                class="form-control"></td>
                                                    @endfor
                                                    <td align="center">
                                                        <span class="mx-2 c-pointer" onclick="insertRow(this)">
                                                            <i
                                                                class="bx bx-plus-circle tx-22 btn-success-gradient p-1 badge-pill"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <th colspan="9" class="text-right">Sub Total</th>
                                                    <td colspan="3"><input type="text" name="sub_total"
                                                            class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="9" class="text-right">Total GST Amount</th>
                                                    <td colspan="3"><input type="text" name="gst_total"
                                                            class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="9" class="text-right">Freight Amount</th>
                                                    <td colspan="3"><input type="text" name="freight_amount"
                                                            class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="9" class="text-right">Freight GST Amount</th>
                                                    <td colspan="3"><input type="text" name="freight_gst_amount"
                                                            class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="9" class="text-right">Total</th>
                                                    <td colspan="3"><input type="text" name="final_total"
                                                            class="form-control"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- Terms and Conditions --}}
                            <div class="row mt-4">
                                <div class="col-12 mt-3">
                                    <h4>Terms and Conditions</h4>
                                    <div class="w-100 mt-3">
                                        <div id="quillEditor"></div>
                                        <input type="hidden" name="terms" id="termsInput">
                                    </div>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="row mt-4">
                                <div class="col-12 mt-5 text-center">
                                    <button type="submit" class="btn btn-danger-gradient">
                                        <i class="bx bx-save mr-1"></i> Save Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-editor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#printBtn').on('click', function () {
                printDiv('po-invoice');
            });
        });

        function printDiv(divId) {
            const content = $('#' + divId).html();
            const originalContent = $('body').html();

            const printHtml = `
                <html>
                    <head>
                        <title>Print MDC</title>
                        <style>
                            body { font-family: Arial, sans-serif; margin: 40px; }
                            table { width: 100%; border-collapse: collapse; }
                            th, td { border: 1px solid #ccc; padding: 10px; }
                            .text-center { text-align: center; }
                            .text-right { text-align: right; }
                            .bg-light { background-color: #ecf0fa; }
                            input.form-control { border: none; width: 100%; }
                        </style>
                    </head>
                    <body>
                        ${content}
                    </body>
                </html>
            `;

            $('body').html(printHtml);
            window.print();
            $('body').html(originalContent);
            location.reload();
        }

        function insertRow(e) {
            const row = `
                <tr>
                    <td align="center" scope="row">1.</td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center"><input type="text" class="form-control"></td>
                    <td align="center">
                        <div class="d-flex">
                            <span class="mx-2 c-pointer" onclick="deleteRow(this)">
                                <i class="bx bx-minus tx-22 btn-danger-gradient p-1 badge-pill"></i>
                            </span>
                        </div>
                    </td>
                </tr>
            `;
            $('#tbl-body').prepend(row);
            updateSerialNumbers();
        }

        function deleteRow(element) {
            $(element).closest('tr').remove();
            updateSerialNumbers();
        }

        function updateSerialNumbers() {
            $('#tbl-body tr').each(function (index) {
                $(this).find('td:first-child').html((index + 1) + '.');
            });
        }
    </script>
@endsection