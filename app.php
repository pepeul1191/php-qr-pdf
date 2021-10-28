<?php

require 'vendor/autoload.php';


$pdf = Zend_Pdf::load(dirname(__FILE__)  . 'base.pdf');
$page = $pdf->pages[0];
$page->rotate(0,0,deg2rad(270));
$pdf->pages[0] = $page;
$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
$page->setFont($font, 12);
$page->drawText('Hello world!', 72, 720);
$pdf->save('zend2.pdf');

?>