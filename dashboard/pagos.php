<?php include'./components/header.php';?>
<style>
.Activo{
    background-color: #F4D03F;
}
.Atendido{
    background-color: #27AE60;
}
.Rechazado{
    background-color: #C0392B;
}
</style>
<div class="home-content">
    <div class="flex flex-wrap">
        <div class="basis-11/12 m-4 mt-0 p-2">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombres
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellidos
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
                                 $query = "SELECT * FROM pqrs";
                                 $result_task = mysqli_query($conn, $query);
                                 while ($row = mysqli_fetch_array($result_task)) { 
                                ?>
                        <tr class="bg-white border-b hover:bg-gray-200 ">
                            <td class="px-6 py-4">
                                <?php echo $row['correo'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['nombre'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['apellido'] ?>
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
                                    <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div> <?php echo $row['estado'] ?>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include'./components/footer.php';?>