<!--Codigo PHP-->
<?php

$horario = [
    1 => ["16:00 - 16:55", "DWEC", "ING", "DIW", "EMP", "DWES"],
    2 => ["16:55 - 17:50", "DWEC", "DAW", "DIW", "DAW", "DWES"],
    3 => ["17:50 - 18:45", "DWEC", "DAW", "DIW", "DAW", "DWES"],
    4 => ["", "RECREO", "RECREO", "RECREO", "RECREO", "RECREO"],
    5 => ["19:10 - 20:05", "EMP", "DIW", "DWES", "DWES", "DWEC"],
    6 => ["20:05 - 21:00", "EMP", "DIW", "DWES", "DWES", "DWEC"],
    7 => ["21:00 - 21:55", "ING", "DIW", "DWES", "DWES", "DWEC"]
];

$dias = [
    1 => "Horas",
    2 => "Lunes",
    3 => "Martes",
    4 => "Miercoles",
    5 => "Jueves",
    6 => "Viernes"
];

?>
<!--Codigo PHP-->

<!--Codigo HTML-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Horario</title>
        <style>

        </style>
    </head>
    
    <body>

        <table border="1">
            <thead>
                <tr>
                    <th colspan="6">Horario</th>
                </tr>
            </thead>

            <tbody>
<!--Codigo HTML-->

<!--Codigo PHP-->
            <?php

                foreach($dias as $nombreDias){
                       echo '<th bgcolor="green" >' . $nombreDias . '</th>';
                }
                 foreach ($horario as $horarioDias){
                       echo "<tr>";

                    foreach($horarioDias as $horarioClases){
                        echo '<td style="text-align:center">' . $horarioClases . '</td>';
                        
                    }
                    echo "</tr>";
                 }

        ?>
<!--Codigo PHP-->

<!--Codigo HTML-->
            </tbody>
 
        </table>


    </body>
</html>