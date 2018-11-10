<html>
<head>
	<title>LAPORAN</title>
</head>
<body>
	<?php 
	$pdf = new FPDF('l','mm','A5');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,7,'LAPORAN PERKEMBANGAN BAYI',0,1,'C');
	$pdf->Output();
	?>
</body>
</html>