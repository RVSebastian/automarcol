<?php include'./components/header.php';?>
<div class="home-content">
    <div class="basis-11/12 md:basis-1/1 m-6  bg-white">
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-900focus:ring-4 focus:ring-gray-200 focus:ring-gray-800 border-gray-700 text-gray-400 hover:bg-gray-100 hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>Inventario de Repuestos</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 font-light">
                    <div class="flex items-center justify-between pb-4">
                        <div>
                            <select id="marca2" name="marca2"
                                class="inline-flex items-center  border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
                                <option disabled selected>Buscar por Marca</option>
                                <option value="RFORD">Repuestos Ford</option>
                                <option value="RFOTON">Repuestos Foton</option>
                                <option value="RFCA">Repuestos Fca</option>
                                <option value="RPEUGEOT">Repuestos Peugeot</option>
                                <option value="RBAJAJ">Repuestos Bajaj</option>
                            </select>
                        </div>
                        <div id='buscarmd2' style='display: none;'>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="buscar" name='buscar'
                                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Buscar por Modelo">
                            </div>
                        </div>
                    </div>
                    <div id='before2' style='display: none'>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                        </script>
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_IzcvKn7uHa.json"
                            background="transparent" speed="1" class='mb-5' style="width: 500px; height: 500px; margin:0 auto;" loop
                            autoplay>
                        </lottie-player>
                    </div>
                    <div id='resp2'></div>
                </div>
            </div>

            <hr>

            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-900  focus:ring-4 focus:ring-gray-200 focus:ring-gray-800 border-gray-700 text-gray-400 hover:bg-gray-100 hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>Inventario de Vehiculos</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 font-light">
                    <div class="flex items-center justify-between pb-4">
                        <div>
                            <select id="marca" name="marca"
                            class="inline-flex items-center  border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700">
                                <option disabled selected>Buscar por Marca</option>
                                <option value="FORD">FORD</option>
                                <option value="FOTON">FOTON</option>
                                <option value="FCA">FCA</option>
                                <option value="PEUGEOT">PEUGEOT</option>
                                <option value="BAJAJ">BAJAJ</option>

                            </select>
                        </div>
                        <div id='buscarmd' style='display: none;'>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="buscar" name='buscar'
                                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Buscar por Modelo">
                            </div>
                        </div>
                    </div>
                    <div id='before' style='display: none' class=''>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                        </script>
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_IzcvKn7uHa.json"
                            background="transparent" speed="1"  class='mb-5' style="width: 500px; height: 500px; margin:0 auto;" loop
                            autoplay>
                        </lottie-player>
                    </div>
                    <div id='resp' >
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="./includes/js/jquery.js"></script>
<?php include'./components/footer.php';?>