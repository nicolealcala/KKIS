<?php
// Storing a string into the variable which
    // needs to be Encrypted
    $simple_string = "Welcome to W3docs\n";

    // Displaying the original string
    echo "Original String: " . $simple_string;

    // Storingthe cipher method
    $ciphering = "AES-128-CTR";

    // Using OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';

    // Storing the encryption key
    $encryption_key = "W3docs";

    // Using openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);

    // Displaying the encrypted string
    echo "Encrypted String: " . $encryption . "\n";
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Added Entry</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/modal.css">
</head>

<body id="page-top">
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdded">
            Launch demo modal
        </button>
    </div>
    <div class="modal fade center" role="dialog" tabindex="-1" id="modalAdded">
        <div class="modal-dialog h-100 m-auto d-flex align-items-center" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="m-0 d-flex justify-content-end align-items-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row m-0">
                        <div class="col col-12 p-0">
                            <svg class="checkmark my-4" xmlns="https://www.svgrepo.com/show/137031/check.svg" viewBox="0 0 50 50">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                              </svg>
                        </div>
                        <div class="col col-12">
                            <h3 class="modalAlert text-center">Added New Entry</h3>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div> -->
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>