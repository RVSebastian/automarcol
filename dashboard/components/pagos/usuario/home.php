<?php
   require './includes/cn.php';
   require './includes/alerts.php';
   if (!isset($_SESSION)) {
    session_start();
    }
   $autorizados = "SELECT * FROM pagos where estado='Autorizado' order by fecha desc";
    $usuario = $_SESSION['key']['usuario'];
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="datatables/datatables.min.js"></script>
<script>
$(document).ready(function() {
    cargador();
});

function cargador() {
    $('#tablasuser').load("./components/pagos/usuario/table.php");
}
setInterval(cargador, 90000);
</script>

<div class="home-content" id="tablasuser"></div>

<div id="defaultModal" tabindex="-1" aria-hidden="true" style="z-index: 150 !important"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal">
    <form method="POST" enctype="multipart/form-data" name="post" action="./funciones/addpago.php">
        <div class="relative w-full h-full max-w-4xl md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex flex-row">
                    <div class="sm:basis-11/12 md:basis-2/4">
                        <input required type="file" id="imagen1" name="imagen1" accept="image/*"
                            onchange="loadFile(event,img='prev1')" style="display:none;" />
                        <label for="imagen1">
                            <img class='rounded mx-auto'
                                src="https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png" id="prev1"
                                style="height: 600px !important; margin: 0 auto;">
                        </label>
                    </div>
                    <div class="sm:basis-11/12 md:basis-2/4">
                        <div class="p-6">
                            <label for="cuenta" class="block text-sm font-medium text-gray-900 ">Cuenta</label>
                            <select required id="cuenta" name='cuenta'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option disabled selected>Selecciona la cuenta</option>
                                <option value="BANCOLOMBIA: 49784801986 CORRIENTE">BANCOLOMBIA: 49784801986 CORRIENTE
                                </option>
                                <option value="BANCOLOMBIA: 49796209967 AHORROS">BANCOLOMBIA: 49796209967 AHORROS
                                </option>
                                <option value="BANCOLOMBIA: 49796484542 AHORROS">BANCOLOMBIA: 49796484542 AHORROS
                                </option>
                                <option value="BANCO OCCIDENTE: 600882203 AHORROS">BANCO OCCIDENTE: 600882203 AHORROS
                                </option>
                                <option value="BANCO OCCIDENTE: 600100234 CORRIENTE">BANCO OCCIDENTE: 600100234
                                    CORRIENTE</option>
                                <option value="BBVA: 697910100007623 CORRIENTE">BBVA: 697910100007623 CORRIENTE</option>
                                <option value="BANCOLOMBIA: 49798522255 AHORROS">BANCOLOMBIA: 49798522255 AHORROS
                                </option>
                                <option value="DAVIVIENDA: 66800158801 AHORROS">DAVIVIENDA: 66800158801 AHORROS</option>
                                <option value="BANCO DE BOGOTA: 614247591 CORRIENTE">BANCO DE BOGOTA: 614247591
                                    CORRIENTE</option>
                            </select>
                            <div class="mb-2">
                                <label for="small-input"
                                    class="block mb-1 text-sm font-medium text-gray-900">Valor</label>
                                <input required type="text" id="small-input" name='valor'
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="mb-2">
                                <label for="small-input"
                                    class="block mb-1 text-sm font-medium text-gray-900">Nombre</label>
                                <input required type="text" id="small-input" name='nombret'
                                    class="block w-full  p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="mb-2">
                                <label for="small-input"
                                    class="block mb-1 text-sm font-medium text-gray-900">Documento</label>
                                <input required type="text" id="small-input" name='documentot'
                                    class="block w-full  p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="mb-2">
                                <label for="small-input"
                                    class="block mb-1 text-sm font-medium text-gray-900">Factura</label>
                                <input required type="text" id="small-input" name='factura'
                                    class="block w-full  p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="mb-2">
                                <label for="small-input"
                                    class="block mb-1 text-sm font-medium text-gray-900">Adicional</label>
                                <textarea required cols="30" rows="10" id="small-input" name='otro' id='otro'
                                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="usuario" value='<?php echo  $usuario ?>'>
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b bg-gray-100">
                    <button data-modal-hide="defaultModal" type="submit" name="guardar"
                        class="text-white p-2 bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4.5 text-center">Guardar</button>
                </div>
            </div>
        </div>
    </form>

</div>
<div data-dial-init class="fixed right-6 bottom-6 group">
    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false"
        class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

<script>
var loadFile = function(event, img) {
    var output = document.getElementById(img);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }

};
</script>

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