<?php
    require  './includes/alerts.php';
   // leemos los pagos
   $select = "SELECT * FROM pagos order by fecha desc";
   $result_task = mysqli_query($conn, $select);

   $autorizador = $_SESSION['key']['usuario'];

   if (isset($_POST['rechazado'])) {
    $id = $_POST['id'];
    $query = "UPDATE pagos SET estado='Rechazado',autorizador='$autorizador', fecha_autorizado= NOW() WHERE id='$id'";
    mysqli_query($conn, $query);
    unset($result_task);
    $result_task = mysqli_query($conn, $select);
    error($msg='Se ha Rechazado el pago #'.$id.' con exito');
   }
   if (isset($_POST['autorizado'])) {
    $id = $_POST['id'];
    $query = "UPDATE pagos SET estado='Autorizado',autorizador='$autorizador', fecha_autorizado= NOW() WHERE id='$id'";
    mysqli_query($conn, $query);
    unset($result_task);
    $result_task = mysqli_query($conn, $select);
    success($msg='Se ha Autorizado el pago #'.$id.' con exito');
   }
   unset($autorizado);
   unset($rechazado);
?>

<div class="home-content">
    <div class='basis-11/12 md:basis-1/4 m-5 p-5 mt-1'>
        <div class="relative overflow-x-auto bg-white shadow p-4  h-4/6">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cuenta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tercero
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Documento
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
                                  foreach($result_task as $row){ 
                                    if($row['estado'] == 'Pendiente'){
                        ?>
                    <tr class="bg-white border-b hover:bg-gray-200"
                        data-modal-target="defaultModal<?php echo $row['id'] ?>"
                        data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                        <td class="px-6 py-4">
                            <?php echo $row['id'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['usuario'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['cuenta'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['valor'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['nombret'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['documentot'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['fecha'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                <?php echo $row['estado'] ?>
                            </div>
                        </td>
                    </tr>
                    <?php include './components/pagos/admin/viewpay.php' ?>
                    <?php include './components/pagos/admin/viewimg.php' ?>
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>

    <div class="basis-11/12 m-5 p-5 mt-1">
        <div class="relative overflow-x-auto bg-white shadow p-4  h-4/6">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cuenta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tercero
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Documento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Subido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Autorizado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Autorizador
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                      
                                  foreach($result_task as $row){ 
                                    if($row['estado'] == 'Autorizado'){
                        ?>
                    <tr class="bg-white border-b hover:bg-gray-200"
                        data-modal-target="defaultModal<?php echo $row['id'] ?>"
                        data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                        <td class="px-6 py-4">
                            <?php echo $row['id'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['usuario'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['cuenta'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['valor'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['nombret'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['documentot'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['fecha'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['fecha_autorizado'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['autorizador'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                <?php echo $row['estado'] ?>
                            </div>
                        </td>
                    </tr>
                    <?php include './components/pagos/admin/viewpay.php' ?>
                    <?php include './components/pagos/admin/viewimg.php' ?>
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="basis-11/12 m-5 p-5 mt-1">
        <div class="relative overflow-x-auto bg-white shadow p-4 h-4/6">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cuenta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tercero
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Documento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Subido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha Rechazado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Autorizador
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                                  foreach($result_task as $row){ 
                                    if($row['estado'] == 'Rechazado'){
                        ?>
                    <tr class="bg-white border-b hover:bg-gray-200"
                        data-modal-target="defaultModal<?php echo $row['id'] ?>"
                        data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                        <td class="px-6 py-4">
                            <?php echo $row['id'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['usuario'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['cuenta'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['valor'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['nombret'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['documentot'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['fecha'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['fecha_autorizado'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['autorizador'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                <?php echo $row['estado'] ?>
                            </div>
                        </td>
                    </tr>
                    <?php include './components/pagos/admin/viewpay.php' ?>
                    <?php include './components/pagos/admin/viewimg.php' ?>
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>



</div>

<style>
.Pendiente {
    background-color: #F4D03F;
}

.Autorizado {
    background-color: #27AE60;
}

.Rechazado {
    background-color: #C0392B;
}
</style>