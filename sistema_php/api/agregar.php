<?php
http://localhost/sistema_php/api/agregar.php?nombre=Veronica&apellido=Giampietro&email=df@gmail.com&telefono=233324&detalle=tecojotoda
$conexion = new mysqli("localhost", "root", "", "sistema") or die ("Error de conexion: ".mysqli_connect_error());

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];
    
    $sql = "INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";
    $query = mysqli_query($conexion, $sql);
    if ($query)echo "1 fila insertada";
    else echo mysql_error($conexion);
}


?>