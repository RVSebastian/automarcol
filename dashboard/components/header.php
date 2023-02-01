<?php 
include'./includes/cn.php'; // incluimos la base de datos
date_default_timezone_set('America/Bogota'); // detectamos la hora
$Hora=date('h:i:s '); // y se la damos a una variable
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // inicimoas la session nuevamente
if (!isset($_SESSION["key"])){ 
    header("Location: login");
}
include'./includes/php/validador.php'; // añadimos las validaciones de session
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="./includes/styles.css">
    <link rel="icon" href="../logo.jpeg" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <ul class="nav-links">
            <li>
                <a href="./">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Productos</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Lista de pagos</span>
                </a>
            </li>


            <li>
                <a href="./stock">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Pedidos</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-notification'></i>
                    <span class="links_name">Mis Pagos</span>
                </a>
            </li>
            <li>
                <a href="./pqrs">
                    <i class='bx bx-message-dots'></i>
                    <span class="links_name">Pqrs</span>
                </a>
            </li>
            <li>
                <a href="./citas">
                    <i class='bx bxs-car-mechanic' ></i>
                    <span class="links_name">Citas</span>
                </a>
            </li>
            <?php 
                if (isset($_SESSION["key"])) {
                    $cg = $_SESSION["key"]["cargo"];
                    if($cg == "Administrador") {
            ?>
            <li>
                <a href="./usuarios">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuarios</span>
                </a>
            </li>
            <?php } ?>
            <?php } ?>

            <?php 
                if (isset($_SESSION["key"])) {
                    $cg = $_SESSION["key"]["cargo"];
                    if($cg == "Administrador") {
            ?>
             <li>
                <a href="./ajustes">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <?php } ?>
            <?php } ?>
          
            <!--
            <script>
            $(document).ready(function() {
                var pageRefresh = 1000; //5 s
                setInterval(function() {
                    refresh();
                }, pageRefresh);
            });

            function refresh() {
                $('#div1').load(location.href + " #div1");
            }
            </script>
            <li class="div1" id='div1'>
                <a href="?l=1">
                    <i class='bx bx-time-five bx-spin'></i>
                    <span class="links_name"><?php echo $Hora?></span>
                </a>
            </li>
            -->
            <li class="log_out">
                <a href="?l=1">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Cerrar Sesión</span>
                </a>
            </li>

        </ul>
    </div>
    <section class="home-section ">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>


        </nav>