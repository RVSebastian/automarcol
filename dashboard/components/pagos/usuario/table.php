<?php
  require '../../../includes/cn.php';

  if (!isset($_SESSION)) {
   session_start();
   }
   $usuario = $_SESSION['key']['usuario'];
   $sql = "SELECT * FROM pagos order by fecha desc";
   $result_task = mysqli_query($conn, $sql);
?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-0 mb-0 pb-0">
    <div class="p-4" style="height: 60rem">
        <div class="relative overflow-x-auto bg-white shadow p-4 h-5/6">
            <table class="w-full text-sm text-center text-gray-500 text-xs " id="mytable">
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
                    <tr class="bg-white border-b hover:bg-gray-200" data-modal-target="viewpay<?php echo $row['id'];?>"
                        data-modal-toggle="viewpay<?php echo $row['id'];?>"
                        data-toggle="viewpay<?php echo $row['id'];?>"
                        onclick="openModal(id='<?php echo $row['id'];?>')">
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
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="p-4" style="height: 60rem">
        <div class="relative overflow-x-auto bg-white shadow p-4  h-5/6">
            <table class="w-full text-sm text-center text-gray-500 text-xs ">
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
                    <tr class="bg-white border-b hover:bg-gray-200" data-modal-target="viewpay<?php echo $row['id'];?>"
                        data-modal-toggle="viewpay<?php echo $row['id'];?>"
                        data-toggle="viewpay<?php echo $row['id'];?>"
                        onclick="openModal(id='<?php echo $row['id'];?>')">
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
                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
foreach ($result_task as $row) {
    include '../../../components/pagos/usuario/viewpay.php'; 
    include '../../../components/pagos/usuario/viewimg.php' ;
}
?>

<script>
function openModal(id) {
    const modalID = document.getElementById('viewpay' + id);
    const modalBG = document.getElementById('backdrop'+ id);
    console.log(modalID);
    modalID.classList.remove("hidden");
    modalBG.classList.remove("hidden");
}

function closeModal(id) {
    const modalID = document.getElementById('viewpay' + id);
    const modalBG = document.getElementById('backdrop'+ id);
    console.log(modalID);
    modalID.classList.add("hidden");
    modalBG.classList.add("hidden");
}
function openImg(id){
    const modalID = document.getElementById('imgmodal' + id);
    const modalBG = document.getElementById('backdrop'+ id);
    console.log(modalID);
    modalID.classList.remove("hidden");
    modalBG.classList.remove("hidden");
}
</script>