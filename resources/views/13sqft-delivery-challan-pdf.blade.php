@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Delivery Challan Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"> <a href="13sqft-dashboard.php">Dashboard</a> </li>
                            <li class="breadcrumb-item"> <a href="13sqft-delivery-challan.php">Delivery Challan</a> </li>
                            <li class="breadcrumb-item active">Delivery Challan Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-12 col-xl-12">
                <div class="main-content-body-invoice">
                    <div class="card card-invoice">
                        <div class="card-header">
                            <div class="text-right">
                                <button type="button" id="printBtn" class="btn btn-danger-gradient"> <i
                                        class="mdi mdi-download mr-1"></i>Download
                                    PO</button>
                                <a href="javascript:history.back()" class="btn btn-light"><i
                                        class="ti ti-arrow-left mr-1"></i> Go Back</a>
                            </div>
                        </div>
                        <div class="card-body" id="po-invoice">
                            <table width="100%" border="1" align="center"
                                style="border-collapse:collapse;margin-bottom:20px">
                                <tr>
                                    <td width="50%" style="vertical-align:top;padding:10px;border:1px solid #dde2ef">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <img src="../assets/img/brand/13sqft-logo-invoice.png" height="45"
                                                        align="left">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="width:100%;display:block;margin-top:30px">
                                                        <strong>Bill To </strong>
                                                        <h6 style="margin:0;font-weight:600;margin-top:20px">MAKEMYINFRA
                                                            PRIVATE LIMITED</h6>
                                                        <p style="margin:0;">537, S/F, 345, LIG, POCKET-3C, SECTOR-16B,
                                                            Dwarka, PHASE-II, South West Delhi, Delhi, 110078</p>
                                                        <p style="margin:0;"><strong>GSTIN</strong> : 07AALCM2173N1Z0</p>
                                                        <p style="margin:0;"><strong>PAN No.</strong> : AALCM2173N</p>
                                                    </div>
                                                    <table border="0" cellspacing="0" cellpadding="0"
                                                        style="margin-top:50px">
                                                        <tr>
                                                            <th width="200" style="padding:0">Client Name</th>
                                                            <td style="padding:0 10px">:</td>
                                                            <td style="padding:0 10px"> Maninder JI</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" style="padding:10px 20px;border:1px solid #dde2ef">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding:0" colspan="3">
                                                    <h3>DELIVERY CHALLAN</h3>
                                                    <strong>#13SQFT-DC-00042</strong><br>
                                                    <strong>02-Nov-2022</strong><br><br><br>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                            <th width="200" style="padding:0">Vendor Name</th>
                                                            <td style="padding:0 10px">:</td>
                                                            <td style="padding:0 10px">HEERA INDUSTRIES</td>
                                                        </tr>
                                                        <tr>
                                                            <th width="200" style="padding:0">Vendor Address</th>
                                                            <td style="padding:0 10px">:</td>
                                                            <td style="padding:0 10px">B/4, Safety Ware House, Opp:- Cosy Hotel, Narol Ã¢â‚¬â€œ Sarkhej Highway, Narol, Ahmedabad Ã¢â‚¬â€œ 382405, Gujarat</td>
                                                        </tr>
                                                        <tr>
                                                            <th width="200" style="padding:0">GST No.</th>
                                                            <td style="padding:0 10px">:</td>
                                                            <td style="padding:0 10px">06AAHCB7963M1Z3</td>
                                                        </tr> -->
                                            <tr>
                                                <th width="200" style="padding:0">Ship To</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">Khasra No. 4629/195, 198,4630/195, Daulatabad
                                                    Road, Gurgaon, Haryana - 122006, India, Contact Person : Sachin :
                                                    8287958142</td>
                                            </tr>
                                            <!-- <tr>
                                                            <th width="200" style="padding:0">Contact Person Name</th>
                                                            <td style="padding:0 10px">:</td>
                                                            <td style="padding:0 10px">Bandhu Prasad</td>
                                                        </tr> -->
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table width="100%" border="1"
                                style="font-size:12px;border-color:#d0d7e8;border-collapse:collapse;">
                                <thead style="background:#ecf0fa">
                                    <tr>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="65">S. No.</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="200">Item Name</th>
                                        <th style="border:1px solid #dde2ef;padding:10px;text-align:left">Description</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border:1px solid #dde2ef;padding:10px;">1</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">Supply of Thermal Tiger Shield
                                            Bubble Aluminum Foil</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">Sheet thickness - 10mm, Single
                                            bubbling</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">1200</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-top:50px;text-align:right;">
                                <p>Authorized Signature<br><br><br><br><br><br><br>
                                    ..................................................................</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL-END -->
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