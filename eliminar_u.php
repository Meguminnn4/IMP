<?php

include "../IMP/php/conexion_back.php";

session_start();


if (empty($_GET['id'])) {
    header('location: usuarios.php');
}

$id = $_GET['id'];

$sql="DELETE FROM login WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    header("Location: Usuarios.php");
}

?>