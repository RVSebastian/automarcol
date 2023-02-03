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
    $telefono = $_POST['telefono'];
    $contactable = $_POST['contactable'];
    $query = "INSERT INTO usuarios(nombre, contraseña, cargo, usuario, estado, telefono, contactable) VALUES ('$nombre', '$contraseña', '$cargo','$usuario', 'activo', '$telefono', '$contactable')";
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
    $telefono = $_POST['telefono'];
    $contactable = $_POST['contactable'];
    $query = "UPDATE usuarios SET nombre = '$nombre', contraseña = '$contraseña', cargo = '$cargo', usuario = '$usuario', estado = '$estado', telefono = '$telefono', contactable='$contactable' where id='$id'";
    mysqli_query($conn, $query);
    header("Location: usuarios");

};

?>

<div class="home-content ">
    <div class="flex flex-wrap">
        <div class='basis-11/12 md:basis-2/4 m-4 mt-1'>
            <div class="relative overflow-x-auto bg-white p-4">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-center uppercase bg-gray-100 text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cargo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Usuario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                 $query = "SELECT * FROM usuarios";
                                 $result_task = mysqli_query($conn, $query);
                                 while ($row = mysqli_fetch_array($result_task)) { 
                                ?>
                        <tr class="border-b text-slate-900  hover:bg-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                <?php echo $row['nombre']; ?>
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <?php echo $row['cargo']; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $row['usuario']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                    <?php echo $row['estado'] ?>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="?id=<?php echo $row['id'] ?>"><i class='bx bx-edit'></i></a> /
                                <a href="?del=<?php echo $row['id'] ?>"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="basis-11/12 md:basis-1 m-4 mt-1">
            <div class='bg-white p-4'>
                <?php 
                if (isset($_GET['id'])) {
                    $idd = $_GET['id'];
                    $query = "SELECT * FROM usuarios where id=$idd";
                    $buscarid = mysqli_query($conn, $query);
                    $br = mysqli_fetch_array($buscarid);
            ?>
                <a href="./usuarios"><i class='bx bx-chevron-left'></i>Atras</a>
                <div class="title text-lg font-semibold text-gray-900 mb-4 text-center">Edicion de usuarios</div>
                <form action="" method="POST">
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Nombre completo</span>
                        <input name="nombre" value="<?php echo $br['nombre'] ?>"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Usuario</span>
                        <input name="usuario" value="<?php echo $br['usuario'] ?>"
                            class="border-slate-200 bg-slate-200 p-2 w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Contraseña</span>
                        <input name="contraseña" value="<?php echo $br['contraseña'] ?>" type="password"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Telefono</span>
                        <input name="telefono" value="<?php echo $br['telefono'] ?>"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Contactable</span>
                        <select name="contactable"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                            <option value="<?php echo $br['contactable'] ?>" selected hidden>
                                <?php echo $br['contactable'] ?></option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Cargo</span>
                        <select name="cargo"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                            <option value="<?php echo $br['cargo'] ?>" selected hidden><?php echo $br['cargo'] ?>
                            </option>
                            <?php
                        $query = "SELECT * FROM roles";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                            <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Estado</span>
                        <select name="estado"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                            <option value="<?php echo $br['estado'] ?>" selected hidden><?php echo $br['estado'] ?>
                            </option>
                            <option value="bloqueado">bloqueado</option>
                            <option value="activo">activo</option>
                        </select>
                    </label>
                    <button action="submit" name="edit"
                        class="rounded bg-blue-900 w-96 p-2 mt-2 text-white">Editar</button>
                </form>
                <?php } else{ ?>
                <div class="font-semi-bold text-lg mb-4 text-center title text-lg font-semibold text-gray-900">Crecion
                    de usuarios</div>
                <form action="" method="POST">
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Nombre completo</span>
                        <input name="nombre"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Usuario</span>
                        <input name="usuario"
                            class="border-slate-200 bg-slate-200 p-2 w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />

                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Contraseña</span>
                        <input name="contraseña" type="password"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />
                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Telefono</span>
                        <input name="telefono"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500" />
                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Contactable</span>
                        <select name="contactable"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="block text-md font-medium text-slate-700">Cargo</span>
                        <select name="cargo"
                            class="border-slate-200 bg-slate-200 p-2  w-96 rounded placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500">
                            <?php
                        $query = "SELECT * FROM roles";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                            <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </label>
                    <button action="submit" name="create"
                        class="rounded bg-blue-900 w-96 p-2 mt-2 text-white">Añadir</button>
                </form>
                <?php } ?>
            </div>
        </div>

    </div>



    <?php include'./components/footer.php';?>