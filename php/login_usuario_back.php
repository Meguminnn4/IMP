<?php

    session_start();

    include 'conexion_back.php';

    $nombreUsuario = $_POST['nombreUsuario'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM login WHERE nombreusuario='$nombreUsuario'
    and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $nombreUsuario;
        header("location: ../inicio.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, verifique datos introducidos.");
                window.location = "../login/login.php";
            </script>
        ';
        exit;
    }

?>