<?php
//Importamos el archivo que establecera la conexion con la base de datos.
include 'utils/connection.php';

//este es el valor que recuperamos desde la url. 
echo $_GET['tabla'];
//esto es un salto de linea.
echo "<br>";
//esto es un salto de linea.
echo "<br>";

//colocamos la conulta que deceamos hacer en nuestra base de datos.
$sql = "SELECT * FROM productos";
//Ejecuta la consulta que declaramos  en la variable $sql.
$result = $conn->query($sql);

//imprime un mensaje sensillo.
echo "INFORMACIÓN RECUPERADA DE LA BASE DE DATOS:";

//esto es un salto de linea.
echo "<br>";

//esta estructura de if validara que la informacion obtenida de dicha consulta sea mayor a 0.
//en otras palabras, valida que nos regrese informacion de algun o algunos registros.
if ($result->num_rows > 0) {
  //recordemos que el ciclo while funciona una y otra vez hasta que se cumpla una condicion.
  //En este caso, todo lo que este dentro de las llaves {} del while, se ejecutara una y otra vez
  //hasta que ya no queden registros obtenidos por la consulta.
  //Ejemplo: si realizamos un selec * from y nos regresa 2 registros, el ciclo while se ejecutara 2 veces.	
  while($row = $result->fetch_assoc()) {
  	//estamos asignando a la variable $valorObtenidoDeTabla el valor de la consulta con el campo nombre.
  	//El valor "["Nombre"]" debe sustituirse por el nombre del campo que nos interese saber.
  	$valorObtenidoDeTabla= $row["Nombre"];
  	//Simplemente estamo imprimiendo el valor obtenido
echo $valorObtenidoDeTabla;
//esto es un salto de linea.
echo "<br>";

//llave que cierra el ciclo while
  }
//llave que cierra el  if
}
//si la consulta, no nos regresa informacion, entra al eslse y muestra un mensaje de error.
 else {
 	//imprime un mensaje de error sensillo.
  echo "Error al cargar los resultados.";
//llave que cierra el else  
}
//Cierra la conecion con la base de datos.
$conn->close();

//cierre de etiqueta php
?>  