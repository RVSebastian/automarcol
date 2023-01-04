<?php include'./components/header.php';?>
<style>
.home-content .sales-boxes .pedidos {
    width: 90%;
    background: #fff;
    padding: 30px 30px;
    margin: 20px 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
</style>
<div class="home-content">
    <div class="sales-boxes">
        <div class="pedidos box">
            <div class="title">Pedidos</div>
            <div class="sales-details">
                <ul class="details">
                    <li class="topic">Fecha</li>
                    <li><a href="#">13 de Diciembre 2022</a></li>
                    <li><a href="#">13 de Diciembre 2022</a></li>

                </ul>
                <ul class="details">
                    <li class="topic">Nombre</li>
                    <li>
                        <button class="font-normal" type="button" data-modal-toggle="defaultModal">
                            Juan Sebastian Rodriguez Vargaz
                        </button>
                    </li>
                    <li>
                        <button class="font-normal" type="button" data-modal-toggle="defaultModal">
                        Juan Sebastian Rodriguez Vargaz
                        </button>
                    </li>
                </ul>
                <ul class="details">
                    <li class="topic">Proceso</li>
                    <li><a href="#">Domicilio</a></li>
                    <li><a href="#">En sucursal</a></li>

                </ul>
                <ul class="details">
                    <li class="topic">Total</li>
                    <li><a href="#">$204.98</a></li>
                    <li><a href="#">$24.55</a></li>

                </ul>
                <ul class="details">
                    <li class="topic">Estado</li>
                    <li><a href="#">Bodega</a></li>
                    <li><a href="#">Entregado</a></li>


                </ul>
            </div>

        </div>

    </div>

    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-20 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
                        Informacion del tercero
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <span class="text-gray-800">Nombre: </span>Juan Sebatian
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <span class="text-gray-800">Apellido: </span>Rodriguez Vargaz
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <span class="text-gray-800">Telefono: </span>+57 214214214 214
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <span class="text-gray-800">Correo: </span>correo@automarcol.com
                    </p>
                </div>

            </div>
        </div>
    </div>


    <div class="sales-boxes">
        <div class="pedidos box">
            <div class="title">Mis Articulos</div>
            <div class="sales-details">
                <ul class="details">
                    <li class="topic">Fecha</li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Nombre</li>
                    <li><a href="#">Alex Doe</a></li>
                    <li><a href="#">David Mart</a></li>
                    <li><a href="#">Roe Parter</a></li>
                    <li><a href="#">Diana Penty</a></li>
                    <li><a href="#">Martin Paw</a></li>
                    <li><a href="#">Doe Alex</a></li>
                    <li><a href="#">Aiana Lexa</a></li>
                    <li><a href="#">Rexel Mags</a></li>
                    <li><a href="#">Tiana Loths</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Forma de entrega</li>
                    <li><a href="#">Domicilio</a></li>
                    <li><a href="#">Pendiente</a></li>
                    <li><a href="#">Devolucion</a></li>
                    <li><a href="#">Domicilio</a></li>
                    <li><a href="#">Pendiente</a></li>
                    <li><a href="#">Devolucion</a></li>
                    <li><a href="#">Domicilio</a></li>
                    <li><a href="#">Pendiente</a></li>
                    <li><a href="#">Domicilio</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Total</li>
                    <li><a href="#">$204.98</a></li>
                    <li><a href="#">$24.55</a></li>
                    <li><a href="#">$25.88</a></li>
                    <li><a href="#">$170.66</a></li>
                    <li><a href="#">$56.56</a></li>
                    <li><a href="#">$44.95</a></li>
                    <li><a href="#">$67.33</a></li>
                    <li><a href="#">$23.53</a></li>
                    <li><a href="#">$46.52</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>

<?php include'./components/footer.php';?>