<?php
//http://localhost/sistema_php/api/agregar.php?nombre=Veronica&apellido=Giampietro&email=df@gmail.com&telefono=233324&detalle=tecojotoda&id=1
$conexion = new mysqli("localhost", "root", "", "sistema") or die ("Error de conexion: ".mysqli_connect_error());

if(isset($_GET['nombre'])){
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];
    
    $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id;";
    $query = mysqli_query($conexion, $sql);
    if ($query)echo "1 fila editada.";
    else echo mysql_error($conexion);
}


?>