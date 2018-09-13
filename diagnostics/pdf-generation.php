<?php
//echo phpversion(); exit;

include("fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',36);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();

/*$p = PDF_new();


if (PDF_begin_document($p, "", "") == 0) {
    die("Error: " . PDF_get_errmsg($p));
}

PDF_set_info($p, "Creator", "hello.php");
PDF_set_info($p, "Author", "Rainer Schaaf");
PDF_set_info($p, "Title", "Hello world (PHP)!");

PDF_begin_page_ext($p, 595, 842, "");

$font = PDF_load_font($p, "Helvetica-Bold", "winansi", "");

PDF_setfont($p, $font, 24.0);
PDF_set_text_pos($p, 50, 700);
PDF_show($p, "Hello world!");
PDF_continue_text($p, "(says PHP)");
PDF_end_page_ext($p, "");

PDF_end_document($p, "");

$buf = PDF_get_buffer($p);
$len = strlen($buf);

header("Content-type: application/pdf");
header("Content-Length: $len");
header("Content-Disposition: inline; filename=hello.pdf");
print $buf;

PDF_delete($p);*/

/*$pdf = pdf_new();
pdf_open_file($pdf, "philosophy.pdf");
pdf_begin_page($pdf, 595, 842);
$arial = pdf_findfont($pdf, "Arial", "host", 1); pdf_setfont($pdf, $arial, 10); pdf_show_xy($pdf, "There are more things in heaven and earth, Horatio,", 50, 750);
pdf_show_xy($pdf, "than are dreamt of in your philosophy", 50, 730);
pdf_end_page($pdf);
pdf_close($pdf);*/
?>