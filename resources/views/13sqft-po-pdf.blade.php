@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Purchase Order Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"> <a href="{{ url('13sqft/13sqft-dashboard') }}">Dashboard</a> </li>
                            <li class="breadcrumb-item"> <a href="{{ url('purchase-orders.index') }}">PO</a> </li>
                            <li class="breadcrumb-item active">Purchase Order Details</li>
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
                                <button type="button" class="btn btn-danger-gradient" id="printBtn"> <i
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
                                                    <img src="{{ asset('assets/img/brand/13sqft-logo-invoice.png') }}"
                                                        height="40" align="left">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="width:100%;display:block;margin-top:30px">
                                                        <strong>Bill To </strong>
                                                        <h6 style="margin:0;font-weight:600;margin-top:20px">BUILDMYINFRA
                                                            PVT LTD</h6>
                                                        <p style="margin:0;">Plot No.174, Ground floor, Udyog Vihar,
                                                            Phase-1, Gurugram, Haryana (122016),India</p>
                                                        <p style="margin:0;"><strong>GSTIN</strong> : 06AAHCB7963M1Z3</p>
                                                        <p style="margin:0;"><strong>PAN No.</strong> : AAHCB7963M</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" style="padding:10px 20px;border:1px solid #dde2ef">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding:0" colspan="3">
                                                    <h3>PURCHASE ORDER</h3>
                                                    <strong>#13SQFT-PO-000192</strong><br>
                                                    <strong>04-Dec-2024</strong><br><br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="200" style="padding:0">Vendor Name</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">HEERA INDUSTRIES</td>
                                            </tr>
                                            <tr>
                                                <th width="200" style="padding:0">Vendor Address</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">B/4, Safety Ware House, Opp:- Cosy Hotel, Narol
                                                    Ã¢â‚¬â€œ Sarkhej Highway, Narol, Ahmedabad Ã¢â‚¬â€œ 382405, Gujarat</td>
                                            </tr>
                                            <tr>
                                                <th width="200" style="padding:0">GST No.</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">06AAHCB7963M1Z3</td>
                                            </tr>
                                            <tr>
                                                <th width="200" style="padding:0">Ship To</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">Ghaghra, Yashoda Niwas Pakartoli, Kotamati Road
                                                    Ghaghra: - 835208</td>
                                            </tr>
                                            <tr>
                                                <th width="200" style="padding:0">Contact Person Name</th>
                                                <td style="padding:0 10px">:</td>
                                                <td style="padding:0 10px">Bandhu Prasad</td>
                                            </tr>
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
                                        <th style="border:1px solid #dde2ef;padding:10px" width="150">Make</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">Qty</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">Unit</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">GST (%)</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">Price Per Unit</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">Total</th>
                                        <th style="border:1px solid #dde2ef;padding:10px" width="120">GST Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border:1px solid #dde2ef;padding:10px;">1</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">Plastic Platform Trolley</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">The item has a 200kg capacity,
                                            weighs 10.5kg, and features a 730 x 470mm ABS plastic platform with an SS handle
                                        </td>
                                        <td style="border:1px solid #dde2ef;padding:10px;text-align:left">NA</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">4</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">0</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;">18</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;"><i
                                                style="font-family:'DeJaVu Sans">&#8377</i> 3450</td>
                                        <td style="border:1px solid #dde2ef;padding:10px;"><i
                                                style="font-family:'DeJaVu Sans">&#8377</i> 13,800.00 </td>
                                        <td style="border:1px solid #dde2ef;padding:10px;"><i
                                                style="font-family:'DeJaVu Sans">&#8377</i> 2,484.00 </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px" colspan="8" align="right"><strong>Sub Total</strong></td>
                                        <td style="padding:10px"><i style="font-family:'DeJaVu Sans">&#8377</i> 13,800.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px" colspan="8" align="right"><strong>Total GST Amount</strong>
                                        </td>
                                        <td style="padding:10px"><i style="font-family:'DeJaVu Sans">&#8377</i> 2,484.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px" colspan="8" align="right"><strong>Freight Amount</strong>
                                        </td>
                                        <td style="padding:10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px" colspan="8" align="right"><strong>Total GST Amount</strong>
                                        </td>
                                        <td style="padding:10px">0</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px" colspan="8" align="right"><strong>Total</strong></td>
                                        <td style="padding:10px">
                                            <h6 style="color:#ed1c24;margin:0"><i
                                                    style="font-family:'DeJaVu Sans">&#8377</i> 16,284.00</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="position:relative;width:100%;display:block;box-sizing:border-box;margin-top:30px">
                                <h5>Terms and Conditions</h5>
                                <br>
                                <ol>
                                    <li>Transportation : Inclusive in above quoted price</li>
                                    <li>Sales Tax : Inclusive 18 % GST in above quoted price.</li>
                                    <li>Payment : 100 % in advance with order</li>
                                    <li>Delivery : Within 7 days after receipt of confirmed order with advance.</li>
                                    <li>Warranty : One year from the date of inspection / delivery</li>
                                    <li>Validity : This offer is valid up to 20 days.</li>
                                </ol>
                                <p><strong>PURCHASE ORDER TERMS AND CONDITIONS: -</strong></p>
                                <p><strong>1. General. </strong>This Purchase Order is an off er by MakeMyInfra ("Buyer") to
                                    the seller listed on the accompanying Purchase Order ("Seller") and acceptance is
                                    limited to its provisions without additions, deletions, or other modifications. Buyer
                                    will not be responsible for goods or services delivered without issuance of its standard
                                    Purchase Order.</p>
                                <p><strong>2. Acceptance. </strong>This Purchase Order may be accepted by delivering the
                                    goods or services by the specified delivery date. This Purchase Order is limited to the
                                    terms and conditions: (i) specified herein;(ii) specified on the face of the
                                    accompanying Purchase Order; and (iii) if applicable, specified in Buyer's written
                                    agreement with Seller. Acceptance of all or part of the goods or services shall not (i)
                                    waive Buyer's right to cancel or return all or any portion of the goods or services that
                                    do not conform to the Purchase Order; (ii)bind Buyer to accept future shipments of goods
                                    or services; or (iii) preclude Buyer from making any claim for damages or breach of
                                    warranty. All purchases are subject to inspection and rejection by Buyer not
                                    withstanding prior payment. Rejected goods will be returned at Seller's expenses for
                                    transportation both ways and all related labor and packing costs. No goods returned as
                                    defective by Buyer shall be replaced by Seller without written permission of an
                                    authorized agent of Buyer. Buyer may at any time, by written order, make changes within
                                    the general scope of this Purchase Order in anyone or more of the following: (i)
                                    drawings, designs or specifications;(ii) method of shipment or packing; and (iii)place
                                    of delivery. If any such change causes an increase or decrease in the cost of, or the
                                    time required for, the performance of this Purchase Order, Seller may request an
                                    adjustment in the price or delivery schedule, or both, and the Purchase Order shall be
                                    modifi ed in writing accordingly upon agreement by the parties.</p>
                                <p><strong>3. Compliance </strong>with Laws. Seller warrants to Buyer that the goods and
                                    services shall be provided, manufactured, shipped, stored, and otherwise handled in
                                    strict compliance with all applicable laws, codes, ordinances, regulations, executive
                                    orders, and industry standards. Seller makes all warranties contained in the Uniform
                                    Commercial Code.</p>
                                <p><strong>4. Title</strong>.Title conveyed to Buyer by Seller shall be good and
                                    merchantable and its transfer rightful. The goods and services shall be delivered free
                                    and clear of any lien, security interest, claim or encumbrance whatsoever.</p>
                                <p><strong>5. Hold Harmless</strong>. Seller agrees to defend, indemnify and hold harmless
                                    Buyer, officers, directors, shareholders, affiliated entity, employees, agents,
                                    representatives, successors and assigns ("Indemnitees") from all losses, liabilities,
                                    damages ,and or expenses which may be sustained or claimed against an Indemnitee: (i)
                                    arising out of defective goods or negligent services hereby ordered;(ii) arising from
                                    injury to Seller employees while in the course of providing goods or services to Buyer
                                    or affiliated entity. (iii)arising from Seller's use of automobiles, trucks, or heavy
                                    equipment; or (iv) based on a claim that the goods or services supplied by Seller
                                    infringe a patent, copyright, or trademark or 2 misappropriate a trade secret of a third
                                    party. Seller shall, at the request of Buyer or affiliated entity, defend any such
                                    claim, action or lawsuit. If the goods or services become, or in Seller's opinion, are
                                    likely to become the subject of any infringement claim, Seller shall do one of the
                                    following at Seller's option and expense: (i) procure for Buyer the right to continue
                                    using the goods or services;(ii)replace or modify the goods or services so that they
                                    become no infringing without losing functionality; or (iii)terminate Buyer's right to
                                    use the goods and/or services, whereupon Seller will refund to Buyer all amounts paid
                                    for such goods or services. The indemnity under this Paragraph 5 shall survive delivery.
                                    and acceptance of goods and services and termination or expiration of this Purchase
                                    Order and/or Buyer's written agreement with Seller, if applicable.</p>
                                <p><strong>6. Price</strong>. The price for goods and services ordered hereby shall be the
                                    lower of: (i) the price stated on the accompanying Purchase Order or (ii) the same price
                                    charged by Seller to its most favored customers at the time of shipment of goods or
                                    provision of services of the same kind and quality taking into account quantity
                                    discounts. Price is inclusive of applicable taxes, freight, all packaging and handling,
                                    transportation, and insurance unless explicitly indicated on the face of this Purchase
                                    Order or agreed to in writing by Buyer.</p>
                                <p><strong>7. Taxes</strong>. Any tax, tariff or duty which is imposed upon Seller by any
                                    governmental authority and included by the Seller in the price shall be separately
                                    stated on Seller's invoice(s).</p>
                                <p><strong>8. Delivery. </strong>Unless designated otherwise: (i) For Domestic Orders: all
                                    deliveries are F.O.B. Destination to the location designated on this Purchase Order and
                                    (ii) For International Orders: all deliveries are Delivered Duty Paid as defined by
                                    Incoterms from time to time. For both domestic and international orders, all risk of
                                    loss shall remain with Seller until goods and services have actually been received and
                                    accepted by Buyer at the applicable destination according to the terms and conditions of
                                    this Purchase Order. The goods or services ordered must be received no later than the
                                    delivery date specified.</p>
                                <p><strong>9. Quantities. </strong>Quantities of goods or services ordered may not be
                                    changed without the prior written approval of Buyer . If the total or any portion of the
                                    goods received either exceeds or falls below the quantities ordered, Buyer shall have
                                    the right to reject and return any such shipments or portions thereof at Seller's
                                    expense for transportation both ways and all related labor and packing costs.</p>
                                <p><strong>10. Packaging and Shipping. </strong>All shipping containers shall be packed and
                                    packaged to: (i) ensure safe arrival to final destination ; (ii) secure the lowest
                                    transportation costs;(iii) comply with requirements of common carriers; (iv) meet
                                    Buyer's written instructions ; and (v) meet the requirements of all applicable laws,
                                    ordinances, rules and regulations. Each package or container shall be marked clearly to
                                    show this Purchase Order number, ship date, and name of consignee and consigner. An
                                    itemized packing list shall be included in each container</p>
                                <p><strong>11. Invoices. </strong>Seller shall issue a separate invoice for each separate
                                    shipment. Each invoice shall include: (i) the Purchase Order number; (ii) Buyer's part
                                    numbers; and (iii) quantities shipped. Undisputed amounts shall be paid within 30 days
                                    of receipt and acceptance of goods or services and a correct invoice. Delays in receipt
                                    of goods or services, acceptance of goods or services, or a correct invoice will be just
                                    cause for Buyer to withhold payment without losing discount privileges. Cash discounts,
                                    if any, shall be computed as commencing with receipt of the invoice or goods or
                                    services, whichever is later.</p>
                                <p><strong>12. Warranties. </strong>Seller warrants that the goods or services delivered,
                                    the packaging, labeling and sorting there of,any installation, repair, and maintenance
                                    of goods, and any other performance pursuant to this Purchase Order, will: (i) be free
                                    of infringement of property rights of third parties, including without limitation, any
                                    patent, trademark, trade name, copyright or right of publicity, or misappropriate any
                                    trade secret or violate any license or any other rights; (ii) be free from defects in
                                    material and workmanship, be of even kind and quality and run without variation; (iii)
                                    be of merchantable quality; (iv) be fi t for the intended use of the Buyer, Buyer's
                                    customer sand any other intended uses of such goods and shall be new and not
                                    refurbished; and (v) be of grade and performance in conformity with all specifications,
                                    blueprints, designs, drawings, samples, models, descriptions, instructions, and other
                                    items referred to in this Purchase Order, Seller shall maintain, solely at Seller's cost
                                    and expense, all licenses, permits, approvals, and the like necessary to conduct its
                                    business and perform its obligations under this Purchase Order.</p>
                            </div>
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