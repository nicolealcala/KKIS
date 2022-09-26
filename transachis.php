<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TransacHis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/TransacHis.compiled.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.scss">
</head>

<body style="backdrop-filter: opacity(1);border-radius: 0px;border-color: var(--bs-white);">
    <h1 id="title" class="title" style="font-weight: bold;font-family: Poppins;font-size: 2em;">Transaction History</h1><img src="assets/img/decorative.png" width="350" height="7" style="margin-right: 11px;padding-right: 166px;padding-left: 0px;margin-left: 80px;"><!-- Start: 1 Row 3 Columns -->
    <div class="container">
        <div class="row" id="SelDel">
            <div class="col-3 col-sm-5 col-md-7 col-lg-8 col-xl-9 col-xxl-9"></div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-1 col-xl-1 col-xxl-1 me-xxl-1 ms-xxl-1 me-xl-1 ms-xl-1 me-lg-1 ms-lg-1 me-md-1 ms-md-1 me-sm-1 ms-sm-1 me-1 ms-1">
                <div class="form-check user-select-all" style="margin-top: 3px;"><input class="form-check-input" type="checkbox" id="selectAll"><label class="form-check-label" for="formCheck-1" style="font-size: 14px;font-family: 'DM Sans', sans-serif;">Select All</label></div>
            </div>
            <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-1 col-xxl-1 ps-xl-1 pe-xl-1"><button class="btn btn-primary delete ps-xxl-1 pe-xxl-1" type="button" style="color: rgb(51,51,51);background: rgb(255,255,255);margin-top: 0px;padding-top: 4px;padding-bottom: 4px;font-size: 14px;font-family: 'DM Sans', sans-serif;"><i class="far fa-trash-alt me-xxl-1 me-xl-1 me-lg-1 me-md-1 me-sm-1 me-1"></i>Delete</button></div>
        </div>
    </div><!-- End: 1 Row 3 Columns -->
    <div></div>
    <div id= "wrapper" class="row" style="width: 100%;">
        <div class="content col-sm-11 col-md-11 col-lg-10 col-xl-11 col-xxl-11 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4 d-none d-lg-block" id="transac-table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr id="row-title" class="row-title">
                            <th style="padding-right: 0px;margin-right: 1px;margin-left: 0px;padding-left: 0px;font-family: 'DM Sans', sans-serif;font-weight: bold;width: 289px;" class="pe-xxl-0 ms-xxl-0 ps-xxl-0 me-xxl-0">Transaction ID</th>
                            <th style="font-family: 'DM Sans', sans-serif;font-weight: bold;" class="ms-xxl-0 me-xxl-1">Name</th>
                            <th style="font-family: 'DM Sans', sans-serif;font-weight: bold;width: 289px;">Issued On</th>
                            <th style="width: 40.5px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="margin-bottom: 0px;text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                        <tr>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Transaction ID"></td>
                            <td class="pb-md-4 pb-sm-4 pb-4" data-label="Name"></td>
                            <td data-label="Issued On" class="pb-md-4 pb-sm-4 pb-4"></td>
                            <td style="text-align: center;"><input type="checkbox" class="checkitem"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="accordion d-block d-xxl-none d-xl-none d-lg-none pe-md-3 me-md-0" role="tablist" id="accordion-1">
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-1 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-2 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-3 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-4 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-5 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-6" aria-expanded="false" aria-controls="accordion-1 .item-6" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-6 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-7" aria-expanded="false" aria-controls="accordion-1 .item-7" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-7 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-8" aria-expanded="false" aria-controls="accordion-1 .item-8" style="margin-left: 70px;font-family: 'DM Sans', sans-serif;font-weight: bold;">Name</button></h2>
                    <div class="accordion-collapse collapse item-8 ms-md-0 pe-md-0 me-md-0" role="tabpanel" data-bs-parent="#accordion-1">
                        <div class="accordion-body">
                            <!-- Start: 1 Row 2 Columns -->
                            <div class="container">
                                <div class="row ps-md-0">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Transaction ID</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5" style="font-weight: bold;">
                                        <p>Issued On</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ms-md-5">
                                        <p></p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-end text-end">
                                        <p></p><input type="checkbox" class="checkitem" style="text-align: center;">
                                    </div>
                                </div>
                            </div><!-- End: 1 Row 2 Columns -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/TransacHis.js"></script>
</body>

</html>