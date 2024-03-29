<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Debes iniciar sesión.");
                window.location = "login/login.php";
            </script>
        ';
    session_destroy();
    die();
}
?>
<?php
include "../IMP/php/conexion_back.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icono Pestaña-->
    <link rel="icon" href="img/IMPlogo.png" type="image" sizes="16x16">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!--FONT OSWALD-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/tareas1.css">
    <title>IMP | Agregar Tareas</title>
</head>

<body>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>
    <div class:="container">
        <nav class="nav-main">
            <img src="img/IMPlogo.png" alt="Imp Logo" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <i class="fa-solid fa-inbox"></i>
                    &nbsp;&nbsp;
                    <a href="inicio.php">Inicio</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-user"></i>
                    &nbsp;&nbsp;
                    <a href="Usuarios.php">Usuarios</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                    &nbsp;&nbsp;
                    <a href="Tareas.php">Asignar Tareas</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-user"></i>
                    &nbsp;&nbsp;
                    <a href="agregar_usuario.php">Agregar Usuarios</i></a>
                </li>
                <li>
                    <i class="fa-solid fa-circle-user"></i>
                    &nbsp;&nbsp;
                    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
                </li>
                <li>
                    <i class="fa-sharp fa-solid fa-user-shield"></i>
                    &nbsp;&nbsp;
                    <a href=""><?php echo $_SESSION['usuario'] ?></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="showcase">
        <h2>Agregar Tareas</h2>
        <h3>Usted está agregando tareas como <?php echo $_SESSION['usuario'] ?></h3>
        <form action="php/registro_tarea_back.php" method="POST" class="formulario_registro">
            <label>Asignar Funcionario</label>
            <select name="usuario" id="">
            <?php 
                $v = mysqli_query($conexion, "SELECT * FROM login");
                while($usuario = mysqli_fetch_array($v)){ 
            ?>       
                <option value="usuario"><?php echo $usuario["usuario"]?></option>
            <?php  } ?>
            </select>
            <label>Descripción de la tarea a realizar</label>
            <input type="text" placeholder="Descripción" name="descripcion">
            <label>Estado</label>
            <select name="estado" class="estado">
                <option type="text" placeholder="Estado" name="estado">Sin Terminar</option>
            </select>
            <label>Progreso</label>
            <select name="progreso" class="progreso">
                <option type="text" placeholder="progreso" name="progreso">0%</option>
            </select>
            <div class="row">
                <div class="col">
                    <label style="padding-right: 30px;">Fecha Inicio</label>
                    <input type="date" name="fecha_inicio">
                </div>
                <div class="col">
                    <label style="padding-right: 15px;">Fecha Termino</label>
                    <input type="date" name="fecha_termino">
                </div>
            </div>
            <button class="btn" style="margin-top: 15px;">Crear Tarea</button>
        </form>
    </div>
    <div class="footer-links">
        <div class="footer-container">
            <ul>
                <li>
                    <h2>Recuerda Guardar Bien tus Documentos</h2>
                </li>   
            </ul>
            <ul>
                <li>
                    <h2>Aplicación de Escritorio</h2>
                </li>
                <li>

                    <a href="">(URL DESCARGA)</a>
                </li>
            </ul>
        </div>
        <footer class="footer">
            <h3>Improve My Process Copyright</h3>
        </footer>
        <script src="js/navbar.js"></script>
    </div>
</body>

</html>