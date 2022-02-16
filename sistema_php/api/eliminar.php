<?php
//http://localhost/sistema_php/api/eliminar.php?id=4
$conexion = new mysqli("localhost", "root", "", "sistema") or die ("Error de conexion: ".mysqli_connect_error());

if(isset($_GET['id'])){
    $id = $_GET['id'];
        
    $sql = "DELETE FROM `clientes` WHERE `clientes`.`id` = $id;"; 
    
    $query = mysqli_query($conexion, $sql);
    if ($query)echo "1 fila borrada";
    else echo mysql_error($conexion);
}


?>