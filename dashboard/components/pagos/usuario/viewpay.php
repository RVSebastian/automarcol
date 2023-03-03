<style>
figure {
    overflow: hidden;
}
</style>

<div id="viewpay<?php echo $row['id'] ?>" tabindex="-1" style='z-index: 20000 !important;' aria-hidden="true"
    class="hidden w-full p-4 overflow-x-hidden overflow-y-auto absolute inset-0">
    <div class="relative w-full h-full max-w-4xl md:h-auto  rounded rounded-3" style="margin: 20px auto !important;">
        <div class="bg-white rounded-lg shadow rounded rounded-3" style="height: 50rem !important;">
            <div class="grid sm:grid-cols-1 md:grid-cols-2" style="border: 0 !important;">
                <div class="basis-11/12 md:basis-2/4 mx-4" id='d<?php echo $row['id'] ?>' class="sideimg"
                    style="border: 0 !important;">
                    <a href="./galery/pagos/<?php echo $row['img'] ?>" style="border: 0 !important;" class="p-2"
                        target="_blank">
                        <img style="margin: auto auto;border: 0 !important; max-height: 45rem !important;"
                            class="h-fill w-fill" src="./galery/pagos/<?php echo $row['img'] ?>"
                            id="imgv<?php echo $row['id'] ?>">
                    </a>
                </div>
                <div class="basis-11/12 md:basis-2/4">
                    <div class="flex items-start justify-between p-4 pb-0 rounded-t ">
                        <button type="button" onclick="closeModal(<?php echo $row['id'] ?>);"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-6 pt-0 space-y-6 overflow-y-auto text-justify">
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
                            <span class="text-gray-900 text-semibold">Nota</span>
                        </p>
                        <?php echo $row['otro'] ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-gray-900" id="backdrop<?php echo $row['id'] ?>"
    onclick="closeModal(<?php echo $row['id'] ?>);"></div>

<script>
function imprimir(nombre) {
    var ficha = document.getElementById('d' + nombre);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}
</script>