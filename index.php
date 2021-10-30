<?php

require 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

Flight::route('/', function(){
    $data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';
    // quick and simple:
    echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
    echo 'hello world!';
});


Flight::start();

?>
