<?php
include 'config.php';
require('assets/fpdf17/fpdf.php');

$pdf = new FPDF("L", "cm", "A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 11); // Menggunakan font Arial dengan style Bold dan ukuran 11
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'KIOS SKANIFO', 0, 'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : +62xxxxxxx',0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. In Aja Dulu',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.skanifo.com email : skanifo@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang", 0,1, 'C');
$pdf->SetFont('Arial', 'B',10);
$pdf->Cell(5,0.7, "Di Cetak Pada : ".date("D-d/m/Y"),0,1,'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(1, 0.8, 'NO',1,0, 'C');
$pdf->Cell(3, 0.8, 'Kode', 1,0,'C');
$pdf->Cell(7, 0.8, 'Nama Produk', 1,0,'C');
$pdf->Cell(3, 0.8, 'Satuan', 1,0, 'C');
$pdf->Cell(4,0.8, 'Harga', 1,0,'C');
$pdf->Cell(2,0.8, 'Stok', 1,1,'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "select * from barang");
while($lihat=mysqli_fetch_array($query)){
    $pdf->Cell(1, 0.8, $no, 1,0, 'C');
    $pdf->Cell(3,0.8, $lihat['kode'],1,0,'C');
    $pdf->Cell(7, 0.8, $lihat['nama'],1,0,'C');
    $pdf->Cell(3, 0.8 , $lihat['satuan'],1,0,'C');
    $pdf->Cell(4, 0.8, $lihat['harga'],1,0,'C');
    $pdf->Cell(2, 0.8, $lihat['stok'],1,1,'C');
    $no++;
}
$pdf->Output("laporan_buku.pdf","I");
?>
