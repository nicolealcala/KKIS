
    <div class="modal fade" role="dialog" tabindex="1" id="viewMore">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kabataan Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php executeQuery($queryResidentsTbl); ?>
                <div class="modal-body m-0 px-4">
                    <div class="row rowContainer m-0 p-0">
                        <div class="col align-self-center col-lg-8 col-md-8 col-sm-12 col-12 py-2">
                            <p class="textName w-100 my-1"><?php echo $row['firstName']?></p>
                            <p class="text Gender w-100 my-1 mt-2"><?php echo $row['age']?> YEARS OLD</p>
                            <p class="textAge w-100 my-1">Man</p>
                        </div>
                        <div class="col align-self-center"><img class="img-fluid imgContainer" src="assets/img/misc/qrcode.png"></div>
                    </div>

                    <div class="row rowContainer my-4 mx-0 p-0">
                        <div class="col col-12 p-0">
                            <div class="markerContainer px-2">
                                <p class="modalMarker">Personal Information</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row gy-1">
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Birthday:</label>
                                    <p class="textRetrieved">02/19/2000</p>
                                </div>
                                <div class="col col-lg-8 col-md-8 col-sm-6 col-12"><label class="form-label modalLabel">Birthplace:</label>
                                    <p class="textRetrieved">CALAMBA CITY, LAGUNA</p>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Marital Status:</label>
                                    <p class="textRetrieved">SEPARATED</p>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Religion:</label>
                                    <p class="textRetrieved">CHRISTIAN</p>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Voter Type:</label>
                                    <p class="textRetrieved">REGISTERED</p>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Disability:</label>
                                    <p class="textRetrieved">VISSION DISABILITY</p>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Contact No:</label>
                                    <p class="textRetrieved">09123456789</p>
                                </div>
                                <div class="col col-lg-7 col-md-7 col-sm-6 col-12"><label class="form-label modalLabel">House No/Street/Subdivision:</label>
                                    <p class="textRetrieved">123 MABUHAY ST.&nbsp;</p>
                                </div>
                                <div class="col col-lg-5 col-md-5 col-sm-6 col-12"><label class="form-label modalLabel">Purok:</label>
                                    <p class="textRetrieved">PULONG KENDI</p>
                                </div>
                                <div class="col col-12"><label class="form-label modalLabel">Organization/s (if any):</label>
                                    <p class="textRetrieved">SAMAHAN NG MGA WALANG ASAWA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rowContainer my-4 mx-0 p-0">
                        <div class="col col-12 p-0">
                            <div class="markerContainer px-2">
                                <p class="modalMarker">Employment Status</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row gy-1">
                                <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Employment Status:</label>
                                    <p class="textRetrieved">EMPLOYED</p>
                                </div>
                                <div class="col col-lg-5 col-md-5 col-sm-6 col-12"><label class="form-label modalLabel">Employee Type:</label>
                                    <p class="textRetrieved">CONTRACTUAL</p>
                                </div>
                                <div class="col col-lg-3 col-md-3 col-sm-3 col-12"><label class="form-label modalLabel">Public/Private:</label>
                                    <p class="textRetrieved">PUBLIC</p>
                                </div>
                                <div class="col col-lg-12 col-md-12 col-sm-9 col-12"><label class="form-label modalLabel">Name of Employer/Company:</label>
                                    <p class="textRetrieved">DAVID M. CONSUNJI, INC.</p>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Occupation:</label>
                                    <p class="textRetrieved">CONSTRUCTION WORKER</p>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Salary Range:</label>
                                    <p class="textRetrieved">10,000 - 20,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rowContainer my-4 mx-0 p-0">
                        <div class="col col-12 p-0">
                            <div class="markerContainer px-2">
                                <p class="modalMarker">House Declaration</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row gy-1">
                                <div class="col col-12"><label class="form-label modalLabel">Head of the family:</label>
                                    <p class="textRetrieved">JUAN SANTOS DELA CRUZ</p>
                                </div>
                                <div class="col col-6"><label class="form-label modalLabel">Remarks:</label>
                                    <p class="textRetrieved">SOLO PARENT</p>
                                </div>
                                <div class="col col-6"><label class="form-label modalLabel">No. of members:</label>
                                    <p class="textRetrieved">5 to 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="assets/js/theme.js"></script>