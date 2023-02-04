<?php include'./components/header.php';?>
<style>
.Activo {
    background-color: #F4D03F;
}

.Atendido {
    background-color: #27AE60;
}

.Rechazado {
    background-color: #C0392B;
}
</style>
<?php 

if (isset($_POST['rechazado']) or isset($_POST['atendido'])) {
    $id = $_POST['id'];
    if (isset($_POST['rechazado'])) {
        $accion = 'Rechazado';
    }else {
        $accion = 'Atendido';
    }
    $query = "UPDATE pqrs SET estado='$accion' WHERE id=$id";
    $result_task = mysqli_query($conn, $query);
}
?>

<div class="home-content">
    <div class="flex flex-wrap">
        <div class="basis-full m-4 mt-0 p-2">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                <table class="w-full text-sm text-left text-gray-500 text-center">
                    <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombres
                            </th>
                            <th scope="col" class="px-6 py-3">
                                #Documento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Solicitud
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lugar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                 $query = "SELECT * FROM pqrs ORDER BY id desc";
                                 $result_task = mysqli_query($conn, $query);
                                 while ($row = mysqli_fetch_array($result_task)) { 
                                ?>
                        <tr class="bg-white border-b hover:bg-gray-200"
                            data-modal-target="defaultModal<?php echo $row['id'] ?>"
                            data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                            <td class="px-6 py-4">
                                <?php echo $row['correo'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['documento'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['ncontacto'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['tsolicitud'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['levento'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['fevento'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                    <?php echo $row['estado'] ?>
                                </div>
                            </td>
                        </tr>
                        <div id="defaultModal<?php echo $row['id'] ?>" tabindex="110" style='z-index: 200 !important'
                            aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <div class="flex items-start justify-between p-4 border-b rounded-t bg-blue-900">
                                        <h3 class="text-xl font-semibold text-gray-100">
                                            Visualizador de PQRS
                                        </h3>
                                        
                                    </div>
                                    <div class="p-6 space-y-6 overflow-y-auto text-justify">
                                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                                            <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            <?php echo $row['fevento'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            <?php echo $row['ncontacto'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            <?php echo $row['descripcion'] ?>
                                        </p>

                                    </div>
                                    <div class="flex items-center p-6 space-x-2 border-t  bg-gray-100 rounded-b">
                                        <form method='POST'>
                                            <input type="hidden" name="id" value='<?php echo $row['id'] ?>'>
                                            <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit" 
                                                name="rechazado"
                                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Rechazado</button>
                                            <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit"
                                                name="atendido"
                                                class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10">Atendido</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include'./components/footer.php';?>