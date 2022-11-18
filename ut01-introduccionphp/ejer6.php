<html>
    
    <head> 
        <title>Hola mundo de php</title>
        <style type="TEXT/CSS">

        </style>
    </head>
    <body>

<?php
$var1=10;
$var2=7;

echo "Suma = ". $var1+$var2 . "<br/>";
echo "Resta = ". $var1-$var2 . "<br/>";
echo "Multiplicacion = ". $var1*$var2 . "<br/>";
echo "Division = ". $var1/$var2 . "<br/>";
echo "Resto = ". $var1%$var2 . "<br/>";
echo "Funcion de variables definidas: <br/>";
print_r(get_defined_vars());

?>
    </body>
</html>