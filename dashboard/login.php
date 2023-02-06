<?php 
include'./includes/cn.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['login'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $query = "SELECT usuario,cargo,permisos FROM usuarios as us INNER JOIN roles as rl on rl.nombre=us.cargo  WHERE usuario='$usuario' and contraseña='$contraseña' and estado='activo'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) { 
    $_SESSION['key'] = $row;
    $_SESSION['ipaddress'] =  $_SERVER['REMOTE_ADDR'];
    $_SESSION['useragent'] =  $_SERVER['HTTP_USER_AGENT'];
    header("Location: index");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../logo.jpeg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <header>Iniciar Seccion</header>
        <form method="POST">
            <div class="field email">
                <div class="input-area">
                    <input type="text" name="usuario" placeholder="Nombre de Usuario">
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>

            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
            </div>

            <input type="submit" value="Login" name="login">
        </form>

    </div>


</body>

</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2c3b6d;
}

::selection {
    color: #fff;
    background: #5372F0;
}

.wrapper {
    width: 380px;
    padding: 40px 30px 50px 30px;
    background: #fff;
    border-radius: 5px;
    text-align: center;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);
}

.wrapper header {
    font-size: 35px;
    font-weight: 600;
}

.wrapper form {
    margin: 40px 0;
}

form .field {
    width: 100%;
    margin-bottom: 20px;
}

form .field.shake {
    animation: shake 0.3s ease-in-out;
}

@keyframes shake {

    0%,
    100% {
        margin-left: 0px;
    }

    20%,
    80% {
        margin-left: -12px;
    }

    40%,
    60% {
        margin-left: 12px;
    }
}

form .field .input-area {
    height: 50px;
    width: 100%;
    position: relative;
}

form input {
    width: 100%;
    height: 100%;
    outline: none;
    padding: 0 45px;
    font-size: 18px;
    background: none;
    caret-color: #5372F0;
    border-radius: 5px;
    border: 1px solid #bfbfbf;
    border-bottom-width: 2px;
    transition: all 0.2s ease;
}

form .field input:focus,
form .field.valid input {
    border-color: #5372F0;
}

form .field.shake input,
form .field.error input {
    border-color: #dc3545;
}

.field .input-area i {
    position: absolute;
    top: 50%;
    font-size: 18px;
    pointer-events: none;
    transform: translateY(-50%);
}

.input-area .icon {
    left: 15px;
    color: #bfbfbf;
    transition: color 0.2s ease;
}

.input-area .error-icon {
    right: 15px;
    color: #dc3545;
}

form input:focus~.icon,
form .field.valid .icon {
    color: #5372F0;
}

form .field.shake input:focus~.icon,
form .field.error input:focus~.icon {
    color: #bfbfbf;
}

form input::placeholder {
    color: #bfbfbf;
    font-size: 17px;
}

form .field .error-txt {
    color: #dc3545;
    text-align: left;
    margin-top: 5px;
}

form .field .error {
    display: none;
}

form .field.shake .error,
form .field.error .error {
    display: block;
}

form .pass-txt {
    text-align: left;
    margin-top: -10px;
}

.wrapper a {
    color: #5372F0;
    text-decoration: none;
}

.wrapper a:hover {
    text-decoration: underline;
}

form input[type="submit"] {
    height: 50px;
    margin-top: 30px;
    color: #fff;
    padding: 0;
    border: none;
    background: #2c3b6d;
    cursor: pointer;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

form input[type="submit"]:hover {
    background: #2c52ed;
}
</style>