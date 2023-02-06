<?php

   // leemos los pagos
   $query = "SELECT * FROM pagos";
   $result_task = mysqli_query($conn, $query);

   // subir pagos
   $url_insert = "./galery/Pagos";
   if (isset($_POST['envio'])) {
    $id = $_POST['id'];
    $query = "UPDATE pagos SET estado=''";
    mysqli_query($conn, $query);
    unset($_POST['guardar']);
   }
?>
<div class="home-content">
    <div class="flex flex-wrap">
        <div class="basis-11/12 mt-0 p-2">
            <div class="basis-11/12">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                            <tr>
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
                            <div id="defaultModal<?php echo $row['id'] ?>" tabindex="110"
                                style='z-index: 200 !important' aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow">
                                        <img class='rounded mx-auto'
                                        src="./galery/pagos/<?php echo $row['img'] ?>"
                                            id="img1" style="height: 30rem; width: 100%">

                                        <div class="p-6 space-y-6 overflow-y-auto text-justify">
                                            <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                                                <?php echo $row['usuario'] ?> <span
                                                    class="text-right"><?php echo $row['fecha'] ?></span>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                                <?php echo $row['cuenta'] ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                                <?php echo $row['valor'] ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                                <?php echo $row['nombret'] ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                                <?php echo $row['documentot'] ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                                <?php echo $row['otro'] ?>
                                            </p>

                                        </div>
                                        <div class="flex items-center p-6 space-x-2 border-t  bg-gray-100 rounded-b">
                                            <form method='POST' name='envio'>
                                                <input type="hidden" name="id" value='<?php echo $row['id'] ?>'>
                                                <button data-modal-hide="defaultModal<?php echo $row['id'] ?>"
                                                    type="submit" name="rechazado"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Rechazado</button>
                                                <button data-modal-hide="defaultModal<?php echo $row['id'] ?>"
                                                    type="submit" name="Autorizado"
                                                    class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10">Atendido</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>

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