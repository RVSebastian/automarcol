<?php include'./components/header.php';?>
<?php 
// detectores

if (isset($_SESSION['key'])){
    $cg = $_SESSION["key"]["cargo"];
    if($cg !== "Administrador") {
        header("Location: index");
    }
}
?>
<?php
// controladores
if (isset($_POST['create'])) {
    $nombre = $_POST['nombre']; 
    $contraseña = $_POST['contraseña'];
    $cargo = $_POST['cargo']; 
    $usuario = $_POST['usuario'];
    $query = "INSERT INTO usuarios(nombre, contraseña, cargo, usuario, estado) VALUES ('$nombre', '$contraseña', '$cargo','$usuario', 'activo')";
    mysqli_query($conn, $query);
    header("Location: usuarios");
};

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = "DELETE FROM usuarios WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: usuarios");
};

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre']; 
    $contraseña = $_POST['contraseña'];
    $cargo = $_POST['cargo']; 
    $usuario = $_POST['usuario'];
    $estado = $_POST['estado'];
    $query = "UPDATE usuarios SET nombre = '$nombre', contraseña = '$contraseña', cargo = '$cargo', usuario = '$usuario', estado = '$estado' where id='$id'";
    mysqli_query($conn, $query);
    header("Location: usuarios");

};

?>
<style>
.home-content .sales-boxes .usuarios {

    background: #fff;
    padding: 30px 30px;
    margin: 1% 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.home-content .sales-boxes .usuarios-add {
    background: #fff;
    padding: 30px 30px;
    margin: 1% 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

</style>
<div class="home-content">
    <div class="sales-boxes ">
        <div class="usuarios box md:w-9/12 sm:w-1/2">
            <div class="title text-center">Lista de Usuarios</div>
            <div class="sales-details text-center">
                <ul class="details">
                    <li class="topic">Nombre</li>
                    <?php
                        $query = "SELECT * FROM usuarios";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <li><a href="#"></a><?php echo $row['nombre'] ?></li>
                    <?php } ?>
                </ul>
                <ul class="details">
                    <li class="topic">Usuario</li>
                    <?php
                        $query = "SELECT * FROM usuarios";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <li><a href="#"></a><?php echo $row['usuario'] ?></li>
                    <?php } ?>
                </ul>
                <ul class="details">
                    <li class="topic">Cargo</li>
                    <?php
                        $query = "SELECT * FROM usuarios";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <li><a href="#"></a><?php echo $row['cargo'] ?></li>
                    <?php } ?>

                </ul>
                <ul class="details">
                    <li class="topic">Opciones</li>
                    <?php
                        $query = "SELECT * FROM usuarios";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <li>
                        <a href="?id=<?php echo $row['id'] ?>">Editar</a> /
                        <a href="?del=<?php echo $row['id'] ?>">Eliminar</a> 
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="usuarios-add box sm:w-98 md:w-auto">
            <?php 
                if (isset($_GET['id'])) {
                    $idd = $_GET['id'];
                    $query = "SELECT * FROM usuarios where id=$idd";
                    $buscarid = mysqli_query($conn, $query);
                    $br = mysqli_fetch_array($buscarid);
            ?>
            <a href="./usuarios"><i class='bx bx-chevron-left' ></i>Atras</a>
            <div class="title mb-4">Edicion de usuarios</div>
            <form action="" method="POST">
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Nombre completo</span>
                    <input name="nombre" value="<?php echo $br['nombre'] ?>"
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Usuario</span>
                    <input name="usuario"  value="<?php echo $br['usuario'] ?>"
                        class="border-slate-200 bg-slate-300 p-2 w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Contraseña</span>
                    <input name="contraseña"  value="<?php echo $br['contraseña'] ?>" type="password"
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Cargo</span>
                    <select name="cargo" 
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                        <option value="<?php echo $br['cargo'] ?>" selected hidden><?php echo $br['cargo'] ?></option>
                        <option value="Asesor Ford">Asesor Ford</option>
                        <option value="Asesor Multimarcas">Asesor Multimarcas</option>
                        <option value="Repuestos Ford">Repuestos Ford</option>
                        <option value="Repuestos Multimarcas">Repuestos Multimarcas</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Estado</span>
                    <select name="estado" 
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                        <option value="<?php echo $br['estado'] ?>" selected hidden><?php echo $br['estado'] ?></option>
                        <option value="bloqueado">bloqueado</option>
                        <option value="activo">activo</option>
                    </select>
                </label>
                <button action="submit" name="edit" class="rounded bg-blue-900 w-72 p-2 mt-2 text-white">Añadir</button>
            </form>
            <?php } else{ ?>
            <div class="title mb-4">Crecion de usuarios</div>
            <form action="" method="POST">
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Nombre completo</span>
                    <input name="nombre"
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Usuario</span>
                    <input name="usuario"
                        class="border-slate-200 bg-slate-300 p-2 w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Contraseña</span>
                    <input name="contraseña"
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                </label>
                <label class="block">
                    <span class="block text-md font-medium text-slate-700">Cargo</span>
                    <select name="cargo"
                        class="border-slate-200 bg-slate-300 p-2  w-72 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                        <option value="Asesor Ford">Asesor Ford</option>
                        <option value="Asesor Multimarcas">Asesor Multimarcas</option>
                        <option value="Repuestos Ford">Repuestos Ford</option>
                        <option value="Repuestos Multimarcas">Repuestos Multimarcas</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </label>
                <button action="submit" name="create"
                    class="rounded bg-blue-900 w-72 p-2 mt-2 text-white">Añadir</button>
            </form>
            <?php } ?>

        </div>
    </div>

</div>



<?php include'./components/footer.php';?>