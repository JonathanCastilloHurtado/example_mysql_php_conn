<?php
include 'utils/connection.php';

session_start();
 
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


echo  $row["Nombre"]. "<br>";

  }
}

 else {
  echo "Error al cargar los resultados.";
}
$conn->close();
?>  