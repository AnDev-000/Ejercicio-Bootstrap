<?php

//conexion bd mysql
$conexion = mysqli_connect("localhost","root","","timark");

//obtener nombre a buscar
$nombreCont = $_POST['nombre'];

// echo("Resultados:");

//Seleccionar todos los nombres que coincidan y seguido cualquier cantidad de caracteres
$seleccionar = "SELECT * From perfil WHERE nombreContacto = '$nombreCont'";


$resultado = mysqli_query($conexion, $seleccionar);

$row = $resultado->fetch_assoc();
echo "Nombre: " . $row["nombreContacto"]. "<br>";

// Mostrar los resultados
// if ($resultado->num_rows > 0) {
//     // Mostrar los datos encontrados
//     while($row = $resultado->fetch_assoc()) {
//       echo "Nombre: " . $row["nombreContacto"]. "<br>";
//     }
//   } else {
//     echo "0 resultados";
//   }


?>