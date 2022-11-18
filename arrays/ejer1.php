<html>
    
    <head> 
        <title>Hola mundo de php</title>
        <style type="TEXT/CSS">

        </style>
    </head>
    <body>

<?php
/*
	 * Imprimir pirámide sólida
	  * Número de espacios = número total de líneas-número actual de líneas
	  * Número de estrellas = número de filas * 2-1
*/
	 $n = 9; // Número total de filas
	for ($i=0; $i <=$n; $i++) { 
		 for ($s = 1; $s <= $n- $i; $s++) {// Imprime el número de espacios
			echo '&nbsp;';
		}
		 for ($j = 1; $j <= $i; $j ++) {// Imprime el número de estrellas
			echo '*';
		}
		echo '<br>';
	}
?>
    </body>
</html>