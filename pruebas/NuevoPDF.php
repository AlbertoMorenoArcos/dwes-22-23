<?php

function generarPDF(){
    require('./fpdf184/fpdf.php');
  
    // New object created and constructor invoked
    $pdf = new FPDF();
      
    // Add new pages. By default no pages available.
    $pdf->AddPage();
      
    // Set font format and font-size
    $pdf->SetFont('Times', 'B', 20);
    
    // Framed rectangular area
    $pdf->Cell(176, 5, 'Carta de recomendacion', 0, 0, 'C');
    
    // Set it new line
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
      
    // Set font format and font-size
    $pdf->SetFont('Times', '', 12);
      
    // Framed rectangular area
    $pdf->Cell(176, 10, 'Estimado {$nombre}, ', 0, 0, 'L');
      
    // Close document and sent to the browser
    $pdf->Output();

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genera tu carta de motivación</h1>
    <div>
        <form action="NuevoPDF.php" method="get">
            Nombre: <input type="text" name="cadena" id="" value="Nombre"><br/>
            Empresa: <input type="text" name="cadena" id="" value="Empresa"><br/>
            Representante: <input type="text" name="cadena" id="" value="Representante"><br/>
            Fecha: <input type="date" name="cadena" id="" value="Fecha"><br/>
            <input type="submit" value="Generar PDF">
        </form>
    </div>
</body>
</html>