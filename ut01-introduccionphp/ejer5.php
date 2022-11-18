<?php
$nombre = "Alberto";
$r = 23;
?>



<html>
    
    <head> 
        <title>Hola mundo de php</title>
        <style type="TEXT/CSS">
            #p1{color:red; font-size:10px;}
            #p2{color:blue; font-size:20px;}
            #p3{color:green; font-size:30px;}
        </style>
    </head>
    <body>

        <?php
            $resultadoPe = 2*$r*M_PI;
            $resultadoAr = M_PI*($r*$r);
            $perimetro = $resultadoPe;
            $area = $resultadoAr;

        
            echo "<p id='p1'>Hola bienvenido " . $nombre . "</p>" . 
                "<p id='p2'>El perímetro es: " .  $resultadoPe . "</p>" . 
                "<p id='p3'>El área es: " .  $resultadoAr . "</p>" ;
              
         ?>
    </body>
</html>