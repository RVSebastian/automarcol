<?php
   // leemos los pagos
   $select = "SELECT * FROM pagos order by fecha desc";
   $result_task = mysqli_query($conn, $select);
   $autorizados = "SELECT * FROM pagos where estado='Autorizado' order by fecha desc";
   $autorizador = $_SESSION['key']['usuario'];

   if (isset($_POST['recibo'])) {
    $id = $_POST['id'];
    $recibo = $_POST['recibo'];
    $query = "UPDATE pagos SET recibo_creador='$autorizador',recibo='$recibo', recibo_fecha= NOW() WHERE id='$id'";
    mysqli_query($conn, $query);
    unset($result_task);
    $result_task = mysqli_query($conn, $select);
    success($msg='El pago #'.$id.' ha sido generado con el recibo '.$recibo);
    unset($recibo);
   }
   unset($recibo);
?>
<div class="basis-11/12 p-4 mt-0">
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
                                  foreach($aut as $row){ 
                        ?>
                <tr class="bg-white border-b hover:bg-gray-200" data-modal-target="cajaview<?php echo $row['id'] ?>"
                    data-modal-toggle="cajaview<?php echo $row['id'] ?>">
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
                <?php include './components/pagos/caja/viewpay.php' ?>
                <?php include './components/pagos/caja/viewimg.php' ?>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>