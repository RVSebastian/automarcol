<?php
    require '../includes/cn.php';
    if (!isset($_SESSION)) {
        session_start();
        }
    $usuario = $_SESSION['key']['usuario'];
   $select = "SELECT * FROM pagos where usuario='prueba' order by fecha desc";
   $result_task = mysqli_query($conn, $select);
?>
<div class="grid grid-cols-1 md:grid-cols-2 gap-0 mb-0 pb-0">
    <div class="p-4" style="height: 60rem">
        <div class="relative overflow-x-auto bg-white shadow p-4 h-5/6">
            <table class="w-full text-sm text-center text-gray-500">
                <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Cuenta
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Tercero
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                                  foreach($result_task as $row){ 
                                    if($row['estado'] == 'Pendiente'){
                        ?>
                    <tr class="bg-white border-b hover:bg-gray-200 "
                        data-modal-target="defaultModal<?php echo $row['id'] ?>"
                        data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                        <td class="px-2 py-4">
                            <?php echo $row['id'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['cuenta'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['valor'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['nombret'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['fecha'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                <?php echo $row['estado'] ?>
                            </div>
                        </td>
                    </tr>
                    <?php include '../components/pagos/usuario/viewpay.php' ?>
                    <?php include '../components/pagos/usuario/viewimg.php' ?>
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="p-4" style="height: 60rem">
        <div class="relative overflow-x-auto bg-white shadow p-4  h-5/6">
            <table class="w-full text-sm text-center text-gray-500">
                <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Cuenta
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Tercero
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                                  foreach($result_task as $row){ 
                                    if($row['estado'] != 'Pendiente'){
                        ?>
                    <tr class="bg-white border-b hover:bg-gray-200 "
                        data-modal-target="defaultModal<?php echo $row['id'] ?>"
                        data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                        <td class="px-2 py-4 ">
                            <?php echo $row['id'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['cuenta'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['valor'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['nombret'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <?php echo $row['fecha'] ?>
                        </td>
                        <td class="px-2 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                <?php echo $row['estado'] ?>
                            </div>
                        </td>
                    </tr>
                    <?php include '../components/pagos/usuario/viewpay.php' ?>
                    <?php include '../components/pagos/usuario/viewimg.php' ?>
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>