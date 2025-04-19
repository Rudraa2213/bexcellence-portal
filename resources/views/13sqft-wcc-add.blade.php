@extends('layouts.app') <!-- Assuming 'layouts.app' contains your common header and footer -->

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Add New WCC</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"> <a href="{{ url('13sqft-dashboard') }}">Dashboard</a> </li>
                            <li class="breadcrumb-item"> <a href="{{ url('wcc.index') }}">WCC</a></li>
                            <li class="breadcrumb-item active">Add New WCC</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-xl-12">
                <form action="{{ route('wcc.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-end">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                    <a href="javascript:history.back()" class="btn btn-light"><i
                                            class="ti ti-arrow-left mr-1"></i> Go Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Client Name<span class="text-danger">*</span></label>
                                    <input type="text" name="client_name" class="form-control" required>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                    <label>Date<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="date" class="form-control fc-datepicker"
                                            placeholder="MM/DD/YYYY" required>
                                    </div>
                                </div>
                                <!-- Other form fields here -->
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped mg-b-0 text-md-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="45"> S.No. </th>
                                                    <th class="text-center">Item</th>
                                                    <th class="text-center">Qty.</th>
                                                    <th class="text-center">S/I</th>
                                                    <th class="text-center">Yes/No</th>
                                                    <th class="text-center" width="90"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl-body">
                                                <tr>
                                                    <td align="center" scope="row">1.</td>
                                                    <td align="center"><input type="text" name="item[]" class="form-control"
                                                            required></td>
                                                    <td align="center"><input type="text" name="quantity[]"
                                                            class="form-control" required></td>
                                                    <td align="center"><input type="text" name="si[]" class="form-control"
                                                            required></td>
                                                    <td align="center"><input type="text" name="yes_no[]"
                                                            class="form-control" required></td>
                                                    <td align="center">
                                                        <div class="d-flex">
                                                            <span class="mx-2 c-pointer ds-click"><i
                                                                    class="bx bx-plus-circle tx-22 btn-success-gradient p-1 badge-pill"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 text-center">
                                    <button type="submit" id="swal-success" class="btn btn-danger-gradient"><i
                                            class="bx bx-save mr-1"></i> Save Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.ds-click').on('click', function () {
                const row = `<tr>
                            <td align="center">1.</td>
                            <td align="center"><input type="text" class="form-control" name="item[]" required></td>
                            <td align="center"><input type="text" class="form-control" name="qty[]" required></td>
                            <td align="center"><input type="text" class="form-control" name="unit[]" required></td>
                            <td align="center"><input type="text" class="form-control" name="unit[]" required></td>
                            <td align="center">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-sm btn-danger remove-row"><i class="bx bx-minus"></i></button>
                                </div>
                            </td>
                        </tr>`;
                $('#tbl-body').prepend(row);
                updateSerialNumbers();
            });
            $(document).on('click', '.remove-row', function () {
            $(this).closest('tr').remove();
            updateSerialNumbers();
        });
         function updateSerialNumbers() {
            $('#tbl-body tr').each(function (index) {
                $(this).find('td:first').text((index + 1) + '.');
            });
        }
    });
    </script>
@endsection