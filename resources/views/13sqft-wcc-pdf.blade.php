@extends('layouts.app') <!-- Assuming your app layout contains the header, footer, and other structure -->

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">WCC Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"> <a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a> </li>
                            <li class="breadcrumb-item"> <a href="{{ url('wcc.index') }}">WCC</a></li>
                            <li class="breadcrumb-item active">WCC Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card card-invoice">
                    <div class="card-header">
                        <div class="text-right">
                            <button class="btn btn-danger-gradient" id="printBtn"> <i
                                    class="mdi mdi-download mr-1"></i>Download PO</button>
                            <a href="javascript:history.back()" class="btn btn-light"><i class="ti ti-arrow-left mr-1"></i>
                                Go Back</a>
                        </div>
                    </div>
                    <div class="card-body" id="po-invoice">
                        <table width="100%" border="1" style="border-collapse:collapse;">
                            <tr>
                                <td colspan="2" align="left"
                                    style="border:1px solid #dde2ef;padding:20px 10px;border-right:none;"><img
                                        src="../assets/img/brand/13sqft-logo-invoice.png" height="40"></td>
                                <td colspan="2" align="right"
                                    style="border:1px solid #dde2ef;padding:20px 10px;border-left:none;"><span
                                        style="font-size:24px; font-weight:bold;">Work Completion Certificate</span></td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">COMPANY</td>
                                <td style="border:1px solid #dde2ef;padding:10px">MAKEMYINFRA PRIVATE LIMITED</td>
                                <th style="border:1px solid #dde2ef;padding:10px">CLIENT </th>
                                <td style="border:1px solid #dde2ef;padding:10px">Coldman Logistics</td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">GSTIN</th>
                                <td style="border:1px solid #dde2ef;padding:10px">07AALCM2173N1Z0</td>
                                <th style="border:1px solid #dde2ef;padding:10px">Date</th>
                                <td style="border:1px solid #dde2ef;padding:10px">2023-05-26 </td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">PAN NO</th>
                                <td style="border:1px solid #dde2ef;padding:10px">AALCM2173N</td>
                                <th style="border:1px solid #dde2ef;padding:10px">PR No.</th>
                                <td style="border:1px solid #dde2ef;padding:10px">NA</td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">Project ID:</th>
                                <td style="border:1px solid #dde2ef;padding:10px">NA</td>
                                <th style="border:1px solid #dde2ef;padding:10px">Client PO NO.:</th>
                                <td style="border:1px solid #dde2ef;padding:10px">SRC1/OPX/23-24/00007</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="border:1px solid #dde2ef;padding:20px" align="center">537, Adarsh
                                    Apartment,Pocket 16, Sector-3, Dwarka,South West Delhi, Delhi, 110078</td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">LC &amp; NAME: </th>
                                <td colspan="3" style="border:1px solid #dde2ef;padding:10px">Varadaiahpalem Varadaiahpalem
                                </td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">Site Address: </th>
                                <td colspan="3" style="border:1px solid #dde2ef;padding:10px">SY No. 201, 1305, Italia Lane,
                                    Mopurupalli Village NEAR MONDELEZ COMPANY, Varadaiahpalem Mandal Chittoor, AP-517541
                                </td>
                            </tr>
                            <tr>
                                <th style="border:1px solid #dde2ef;padding:10px">Contact Person:</th>
                                <td style="border:1px solid #dde2ef;padding:10px">Mr. Kartikey</td>
                                <th style="border:1px solid #dde2ef;padding:10px">Contact No.:</th>
                                <td style="border:1px solid #dde2ef;padding:10px">+91 76520 23189</td>
                            </tr>
                        </table>

                        <table width="100%" border="1" style="border-collapse:collapse;margin-top:40px;">
                            <tr style="background:#ecf0fa">
                                <th colspan="6"
                                    style="border:1px solid #dde2ef;padding:10px;font-size:25px;text-align:center">13SQFT
                                    Feedback</th>
                            </tr>
                            <tr>
                                <td style="border:1px solid #dde2ef;padding:10px" width="33.33%" colspan="2"><input
                                        type="checkbox" style="margin-right:7px;" name="requiredvaluablefeedback"
                                        value="Good">Good</td>
                                <td style="border:1px solid #dde2ef;padding:10px" width="33.33%" colspan="2"><input
                                        type="checkbox" style="margin-right:7px;" name="requiredvaluablefeedback"
                                        value="V Good">V Good</td>
                                <td style="border:1px solid #dde2ef;padding:10px" width="33.33%" colspan="2"><input
                                        type="checkbox" style="margin-right:7px;" name="requiredvaluablefeedback"
                                        value="Excellent">Excellent</td>
                            </tr>
                            <tr>
                                <th valign="top" style="border:1px solid #dde2ef;padding:10px" height="150" colspan="2">
                                    FEEDBACK</th>
                                <td valign="top" style="border:1px solid #dde2ef;padding:10px" height="150" colspan="4">
                                </td>
                            </tr>
                        </table>
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
            $('#printBtn').on('click', function () {
                const content = $('#po-invoice').html();
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
            });
        });

        $(document).ready(function () {
            $('#printBtn').on('click', function () {
                printDiv('po-invoice');
            });
        });

        function insertRow(e) {
            var row = `
                                        <tr>
                                            <td align="center" scope="row">1.</td>
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