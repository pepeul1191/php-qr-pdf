<?php

require 'vendor/autoload.php';


$pdf = Zend_Pdf::load(dirname(__FILE__)  .  DIRECTORY_SEPARATOR . 'base.pdf');
$page = $pdf->pages[0];
$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
$page->setFont($font, 12);
$page->drawText('Hello world!', 150, 50);
$pdf->pages[0] = $page;
$pdf->save('zend2.pdf');

?>