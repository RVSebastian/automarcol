<div id="viewpay<?php echo $row['id'] ?>" tabindex="-1" style='z-index: 20000 !important;' aria-hidden="true" 
    class=" top-50 left-50 right-50 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto absolute inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-4xl md:h-auto  rounded rounded-3" style="left: 40vh;
    top: 50px;">
        <div class="bg-white rounded-lg shadow rounded rounded-3">
            <div class="flex flex-row">
                <div class="basis-11/12 md:basis-2/4 border">
                    <label for="img" onclick="openImg(id='<?php echo $row['id'];?>')">
                        <img style="height: 600px !important; margin: 0 auto;"
                            src="./galery/pagos/<?php echo $row['img'] ?>" id="img">
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

                        <div class="mb-2">
                            <p class="text-base leading-relaxed text-gray-800 mt-0">
                                Nota
                            </p>
                            <textarea required cols="30" rows="10" disabled
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500"><?php echo $row['otro'] ?>
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-gray-900" id="backdrop<?php echo $row['id'] ?>" onclick="console.log('hola')"></div>