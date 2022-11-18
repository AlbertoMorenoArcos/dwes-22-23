<?php 
$cadena='';
$texto='';
$error = false;
$vocales = 0;
$consonantes = 0;
$palindromo = "";
// $_GET Información de la cabecera
if (isset($_GET['cadena'])) {
    $texto = $_GET['cadena'];
    if ($texto == "") {
        $cadena = "Texto";
        $error = true;
    }
} else {
    $cadena = "Texto";
}

//Numero de vocales y consonantes
foreach (count_chars($cadena, 1) as $i => $val) 
	{
	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
            {
	        $vocales = $vocales + $val;
	        } else if (preg_match('/[a-z]/i',chr($i)))
		        {
	             $consonantes= $consonantes + $val;
		        }					
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
    <h1>Hola</h1>
    <div>
        <?php if ($error) { ?>
            <h3>Eres un poco manazas. Mete un texto.</h3>
        <?php } ?>
        <form action="ejercicioForm.php" method="get">
            Introduce un texto: <input type="text" step="0.001" name="cadena" id="" value="<?=$texto?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
        <div id="resultado">

    <ul>La palabra es: <?=$cadena?></ul>
    <ul>Nº vocales: <?=$vocales?></ul>
    <ul>Nº consonantes: <?=$consonantes?></ul>
    <ul>Palindromo: <?=$palindromo?></ul>
    
    </div>
</body>
</html>