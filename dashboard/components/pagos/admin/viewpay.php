<div id="defaultModal<?php echo $row['id'] ?>" tabindex="110" style='z-index: 20000 !important' aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-0 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal">
    <div class="relative w-full h-full max-w-4xl md:h-auto">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex flex-row">
                <div class="basis-11/12 md:basis-2/4 border">
                    <label for="img1" data-modal-target="imgmodal<?php echo $row['id'] ?>"
                        data-modal-toggle="imgmodal<?php echo $row['id'] ?>">
                        <img style="height: 600px !important; margin: 0 auto;"
                            src="./galery/pagos/<?php echo $row['img'] ?>" id="img1">
                    </label>
                </div>
                <div class="basis-11/12 md:basis-2/4">
                    <div class="p-6 space-y-6 overflow-y-auto text-justify">
                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                           Del usuario: <?php echo $row['usuario'] ?>
                        </p>
                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                            Subido el: <?php echo $row['fecha'] ?>
                        </p>

                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                            <span class="text-gray-900 text-semibold">Banco de receptor</span>
                        </p>
                        <?php echo $row['cuenta'] ?>
                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                            <span class="text-gray-900 text-semibold">Valor</span>
                        </p>
                        $<?php echo $row['valor'] ?>
                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                            <span class="text-gray-900 text-semibold">Tercero</span>
                        </p>
                        <?php echo $row['nombret'] ?>
                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                            <span class="text-gray-900 text-semibold">Documento</span>
                        </p>
                        <?php echo $row['documentot'] ?>
                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                            Nota
                        </p>
                        <?php echo $row['otro'] ?>

                    </div>
                </div>
            </div>

            <div class="flex items-center p-6 space-x-2 border-t  bg-gray-100 rounded-b">
                <form action="" method='POST' name='envio'>
                    <input type="hidden" name="id" value='<?php echo $row['id'] ?>'>
                    <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit" name="rechazado"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Rechazado</button>
                    <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit" name="autorizado"
                        class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10">Autorizado</button>
                </form>
            </div>
        </div>
    </div>
</div>