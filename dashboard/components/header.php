<?php include'./includes/cn.php';?>
<?php

session_start();
$js_code = '<script>console.log(' . json_encode($_SESSION["key"], JSON_HEX_TAG) . ');</script>';
if (isset($_GET['l'])) {
    session_destroy();
    header("Location: login");
}

if (isset($_SESSION["key"])){
        $usi = $_SESSION["key"]["id"];
        // actualizamos los datos constantemente
        $query = "SELECT * FROM usuarios WHERE id = '$usi'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) { 
        $_SESSION['key'] = $row;
        }
}else{
    header("Location: login");
}

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


</head>

<body>
    <div class="sidebar">

        <ul class="nav-links">
            <li>
                <a href="./" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="./products">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Productos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Lista de pagos</span>
                </a>
            </li>
            <?php 
                if (isset($_SESSION["key"])) {
                    $cg = $_SESSION["key"]["cargo"];
                    if($cg == "Administrador") {
            ?>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
            </li>
            <?php } ?>
            <?php } ?>

            <li>
                <a href="#">
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
                <a href="./editpage">
                    <i class='bx bx-edit-alt'></i>
                    <span class="links_name">Editar paginas</span>
                </a>
            </li>
            <?php } ?>
            <?php } ?>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="?l=1">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>

        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>

            <div class="profile-details">
                <i class='bx bx-group p-2'></i>
                <span class="admin_name"><?php echo $_SESSION['key']['nombre']?></span>
            </div>
        </nav>