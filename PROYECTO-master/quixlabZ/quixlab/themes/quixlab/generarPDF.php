<?php
 require "fpdf.php";
$link= new PDO('mysql:host=localhost;dbname=reportes_padres','root','');
	



 class myPDF extends FPDF{

 	function header(){
 	
 		//this->Image('logo.png',10,6);
 		$this->SetFont('Arial','B',14);
 		$this->Cell(276,5,'REPORTE DE MOVIMIENTOS SEGUN DIA',0,0,'C');
 		$this->Ln();
 		$this->SetFont('Times','',12);
 		$this->Cell(276,10,'',0,0,'C');
 		$this->Ln(20);
 	}

 	function footer(){
 		$this->SetY(-15);
 		$this->SetFont('Arial','',8);
 		$this->Cell(0,10,'Page ',$this->PageNo().'/{nb}',0,0,'C');
 	}

 	function headerTable(){
 		$this->SetFont('Times','B',12);
 		$this->Cell(90,10,'ID',1,0,'C');
 		$this->Cell(90,10,'Descripcion',1,0,'C');
 		$this->Cell(90,10,'Fecha',1,0,'C');
 		$this->Ln();
 	}
 	function viewTable($link){
 		if(isset($_POST['val-seccion'])) {
		$destino=$_POST['val-seccion'];
		}
 		$this->SetFont('Times','',12);
 		$stmt=$link->query("select id,movimiento,fecha from rastreos where fecha like '".$destino."'");
 		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
 				$this->Cell(90,10,$data->id,1,0,'C');
		 		$this->Cell(90,10,$data->movimiento,1,0,'L');
		 		$this->Cell(90,10,$data->fecha,1,0,'L');
		 		$this->Ln();
 		}

 	}
 }

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($link);
$pdf->Output();


 ?>