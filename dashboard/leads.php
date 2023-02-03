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
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vehiculo Interes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Marca
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Medio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                 $query = "SELECT * FROM leads";
                                 $result_task = mysqli_query($conn, $query);
                                 while ($row = mysqli_fetch_array($result_task)) { 
                                ?>
                        <tr class="bg-white border-b hover:bg-gray-200 ">
                            <td class="px-6 py-4">
                                <?php echo $row['nombres']?> <?php echo $row['apellidos'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['correo'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['telefono'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['vinteres'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['marca'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['medio'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['fecha'] ?>
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