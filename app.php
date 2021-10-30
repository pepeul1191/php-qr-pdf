<?php

require 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// qr

$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';
$qr = (new QRCode)->render($data);
$image = new Zend_Pdf_Resource_Image_Png($qr);

// pdf

$pdf = Zend_Pdf::load(dirname(__FILE__)  .  DIRECTORY_SEPARATOR . 'base.pdf');
$page = $pdf->pages[0];
$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
$page->setFont($font, 12);
$page->drawText('Hello world!', 150, 50);
$page->drawImage($image, 150, 300, 300, 450); // source, x1, y1, x2, y2
$pdf->pages[0] = $page;
$pdf->save('zend2.pdf');

?>
