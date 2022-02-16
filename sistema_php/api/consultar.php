<?php
//http://localhost/sistema_php/api/consultar.php
$conexion = new mysqli("localhost", "root", "", "sistema") or die ("Error de conexion: ".mysqli_connect_error());

$sql = "SELECT * FROM clientes"; 
$resultado = mysqli_query($conexion, $sql);

$clientes = array();
while ($fila = mysqli_fetch_array($resultado)) {
    array_push($clientes, $fila);
}
echo json_encode($clientes);

mysqli_free_result($resultado);
mysqli_close($conexion);



?>