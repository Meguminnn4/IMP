<?php
include "conexion_back.php";

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombreusuario = $_POST['nombreusuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];

$sql = "UPDATE login SET usuario='$usuario',nombreusuario='$nombreusuario',clave='$clave',rol='$rol',sexo='$sexo',correo='$correo'";
$query = mysqli_query($conexion, $sql);
if ($query) {
    header("Location: ../Usuarios.php");
}
