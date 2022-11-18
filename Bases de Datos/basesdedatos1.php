<!--PDO
=========================================
testConnectionPDO.php-->
<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=formulario', "albertomoreno", "moreno1");

    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM Ciclistas');

    foreach ($resultado as $fila){
      foreach ($fila as $clave => $valor){
        echo $clave . " " . $valor . "<br>";
      }
      echo "<hr><br>";
    }
  /*  while($row = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "Nombre: " . $row->nombre . "<br>";
      echo "Ciudad: " . $row->ciudad . "<br>";
  }
  id 1
0 1
nombre Jorge
1 Jorge
num_trofeos 10
2 10*/
    // Ya se ha terminado; se cierra
    $resultado = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "\n";
    die();
}

?>