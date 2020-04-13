<?php
 require "fpdf.php";
$link= new PDO('mysql:host=localhost;dbname=reportes_padres','root','');
	


 class myPDF extends FPDF{

 	function header(){
 	
 		//this->Image('logo.png',10,6);
 		$this->SetFont('Arial','B',14);
 		$this->Cell(276,5,'REPORTE DE ALUMNOS POR GRUPO',0,0,'C');
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
 		$this->Cell(70,10,'ID',1,0,'C');
 		$this->Cell(70,10,'Nombre',1,0,'C');
 		$this->Cell(70,10,'Telefono',1,0,'C');
 		$this->Cell(70,10,'Notas',1,0,'C');

 		$this->Ln();
 	}
 	function viewTable($link){
 		if(isset($_POST['tipos'])) {
		$destino=$_POST['tipos'];
		}
 		$this->SetFont('Times','',12);
 		$stmt=$link->query("select id,nombre,telefono,notas from alumnos where id_grupo like '".$destino."'");
 		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
 				$this->Cell(70,10,$data->id,1,0,'C');
		 		$this->Cell(70,10,$data->nombre,1,0,'L');
		 		$this->Cell(70,10,$data->telefono,1,0,'L');
		 		$this->Cell(70,10,$data->notas,1,0,'L');

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