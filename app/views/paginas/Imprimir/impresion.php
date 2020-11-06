<?php
    $pdf=new FPDF;
    $pdf->AddPage('L');
    $pdf->SetFont('arial','8',15);
    $pdf->Image(RUTA_URL . '/img/Betos.png',10,10,20);
    $pdf->SetFillColor(90,90,90);
    $pdf->SetTextColor(255);
    $pdf->SetXY(35,17.5);
    $pdf->Cell(240,10,utf8_decode('Tortilleria Beto´s , S.A. de C.V'),1,1,'C',1);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0);
    $pdf->SetXY(80,27.5);
    $pdf->SetFont('arial','8',12);
    $pdf->Cell(290,11,'Fecha de nomina:  '.$datos['Fecha'],'0',1,'C',1);
    $pdf->Cell(395,6,utf8_decode('Número de nomina: ').$datos['idNomina'],'0',1,'C',1);
    $pdf->Cell(392,6,utf8_decode('Días pagados: 30.4'),'0',1,'C',1);
    $pdf->SetXY(10,27.5);
    $pdf->Cell(30,20,'Datos de la empresa ','0',1,'C');
    $pdf->SetXY(10,32.5);
    $pdf->Cell(92,20,'Conocido. Rancho San Ignacio, Camargo, Chihuahua.','0',1,'C');
    $pdf->SetXY(10,38.5);
    $pdf->Cell(38,20,'RFC: MARL980207VE10 ','0',1,'C');
     
     
    $pdf->SetXY(20,40);
    $pdf->SetTextColor(0);
    $pdf->SetFont('arial','8',16);
    $pdf->Cell(20,49,'Datos del empleado',0,1,'C');
    
    $pdf->Ln(5);
    $pdf->SetXY(20,70);
    #Encabezado
    $pdf->SetFont('arial','8',12);
    $pdf->Cell(30,6,'Nombre:  '.$datos['Nombre'].'.','0',0,'C');
    $pdf->Cell(160,6,'Curp:  '.$datos['Curp'].'.','0',0,'C');
    $pdf->Cell(34,6,'RFC:  '.$datos['RFC'].'.','0',1,'C');
    $pdf->Cell(32,6,utf8_decode('Teléfono: ').$datos['Telefono'].'.','0',0,'C');
    $pdf->Cell(185,6,'Correo:  '.$datos['Correo'].'.','0',0,'C');
    $pdf->Cell(1,6,'Puesto:  '.$datos['Puesto'].'.','0',1,'C');
    $pdf->Cell(20,6,'Turno:  '.$datos['Turno'].'.','0',0,'C');
    $pdf->Cell(196,6,'Fecha de ingreso:  '.$datos['FechaEntrada'].'.','0',0,'C');
    $pdf->Cell(-5,6,'Salario diario:  $'.$datos['Salario'].'.','0',1,'C');
    $pdf->Cell(55,6,utf8_decode('Salario base de cotización: $').$datos['SalBaseCoti'].'.','0',0,'C');
    $pdf->Cell(328,6,'Salario mensual:  $'.$datos['SalarioMes'].'.','0',1,'C'); 
    $pdf->SetXY(30,100);
    $pdf->Cell(15,11,'Percepciones / Otros Pagos ',0,0,'C');
    $pdf->Cell(250,11,'Deducciones',0,1,'C');
    $pdf->Cell(250,0,'_____________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
    $pdf->Cell(50,11,'Bono de asistencia:  $'.$datos['BonoA'].'.',0,0,'C');
    $pdf->Cell(220,11,'ISR:  $'.$datos['ISR'].'.',0,1,'C');
    $pdf->Cell(52,11,'Bono de puntualidad:  $'.$datos['BonoP'].'.',0,0,'C');
    $pdf->Cell(220,11,'IMSS:   $'.$datos['IMSS'].'.',0,1,'C');
    $pdf->Cell(40,11,'Vacaciones (Dias):  '.$datos['Vacaciones'].'.',0,0,'C');
    $pdf->Cell(260,11,'Fondo de vivienda:  $'.$datos['FondoVivienda'].'.',0,1,'C');
    $pdf->Cell(45,11,'Prima vacacional:  $'.$datos['PrimVa'].'.',0,1,'C');
    $pdf->Cell(250,0,'_____________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
    $pdf->Cell(50,11,'Total de percepciones:  '.$datos['TPercepciones'].'.',0,0,'C');
    $pdf->Cell(250,11,'Total de deducciones:  '.$datos['TDeducciones'].'.',0,1,'C');
    
    $pdf->SetXY(30,165);
    $pdf->Cell(20,15,'Firma:____________________.',0,0,'C');
    $pdf->SetXY(100,170);
    $pdf->Cell(140,15,'Total:  '.$datos['SueldoTot'].'.',0,1,'C');
    $pdf->SetXY(30,175);
    $pdf->Cell(20,12,utf8_decode('Sello digital del SAT: Por definir.'),'0',1,'C');
    
    $pdf->OutPut('Nomina'.time().'.pdf','I');
?>