<?php include'./includes/components/header.php';?>
<?php include'./dashboard/includes/cn.php';?>
<?php 
function cotizor(){
    if (isset($_POST['cotizor'])) {
      
    }
}
?>
<style>
figure {
    overflow: hidden;
}

.galery img:hover {
    -webkit-transform: rotate(3deg) scale(1.2);
    transform: rotate(3deg) scale(1.2);
    -webkit-transition: 1s ease-in-out;
    transition: 1s ease-in-out;
}

.img-thumbnail {
    border: 0;
    margin: 10px;
    padding: 0;
}

.carousel-cell {
    width: 100%;
    counter-increment: carousel-cell;
    border-radius: 15px;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
}

/* cell number */
.carousel-cell:before {
    display: inline;
}

.carousel-nav .carousel-cell {
    height: 9rem;
    width: 100px;
    margin: 1rem;
    margin-bottom: 0.3rem;
    display: table;
    border-radius: 30px;

}

.carousel-nav .carousel-cell.is-nav-selected {
    opacity: .6;
    border-radius: 100px
}

.accordion-button:not(.collapsed) {
    color: white !important;
    background-color: var(--main) !important;
    fill: white !important;
}

.bg-carro {
    background-image: url('./image/expedition.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    filter: onblur('100%');
}

.bg-dark {
    background-color: #2c3b6d !important;
}
</style>
<br><br><br><br>
<style>
.carousel-cell {
    width: 100%;
}

.recuadro {
    border-radius: 50px;
}

.peugeot .logo-marca {
    width: 12rem;
    padding: 10px;
}

.fs-2 {
    color: var(--main) !important;

}

input,
select {
    padding: 6px !important;
    border: 0 !important;
    font-size: 15px !important;
    background-color: #EBEDEF !important;
}

.ch {
    background-color: var(--main) !important;
}

.text-dark {
    color: var(--main) !important;
}

.colores {
    margin: 0 auto;
    width: 50%;
}

.colores img {
    width: 50px;
    margin: 5px;
}

.colores li {
    list-style: none !important;
    display: inline-block !important;

}

.colores u {
    justify-content: center !important;
}

@media (max-width: 1200px) {

    .wall h2,
    h1 {
        font-size: 2rem !important;
    }
}

@media (max-width: 770px) {
    .top-50 {
        top: 10% !important;
    }
}
</style>
<br>

<section class="bg-gray pt-5 mt-5">
    <div class="container wl animate__animated animate__slideInDown animate__delay-1s animate__slow">
        <div class="position-relative">
            <div class="position-absolute top-50 end-0 p-4 text-white wall">
                <h2 class="p-0 m-0">FORD</h2>
                <h1 style="font-size:60px" class="pb-0 mb-0">RANGER XLT</h1>
                <h1 class="fs-1 fw-bold" style="font-size: 70px;">$195.990.000</h1>
                <a href="https://web.whatsapp.com/send?phone=573222863938" class="btn btn-success fs-3"><i
                        class="fab fa-whatsapp"></i> Contactar a un Asesor</a>
            </div>
            <img src="https://www.ford.com.co/content/ford/co/es_co/ranger-content/billboard-carousels/overview-header/jcr:content/par/billboard_1471196822/imageComponent/image.imgs.full.high.jpg"
                class="img-fluid shadow rounded rounded-4" alt=""
                style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.131) 19%, rgba(0, 0, 0, 0.2295) 34%, rgba(0, 0, 0, 0.309) 47%, rgba(0, 0, 0, 0.361) 56.5%, rgba(0, 0, 0, 0.403) 65%, rgba(0, 0, 0, 0.437) 73%, rgba(0, 0, 0, 0.4625) 80.2%, rgba(0, 0, 0, 0.479) 86.1%, rgba(0, 0, 0, 0.4895) 91%, rgba(0, 0, 0, 0.496) 95.2%, rgba(0, 0, 0, 0.499) 98.2%, rgba(0, 0, 0, 0.5) 100%);">
        </div>
    </div>
</section>
<section class="bg-gray">
    <div class="container rounded-3 bg-white animate__animated animate__slideInUp animate__delay-1s animate__slow"
        style="background-color: #f7f7f7">
        <div class="p-5">
            <div class="row text-center">
                <div class="col-md-3 col-sm-5 border-md-end border-sm-bottom border-2">
                    <h1>Kilometraje</h1>
                    <h1 class="text-dark">0</h1>
                </div>
                <div class="col-md-3 col-sm-5  border-md-end border-sm-bottom border-2">
                    <h1>Estado</h1>
                    <h1 class="text-dark">Nuevo</h1>
                </div>
                <div class="col-md-3 col-sm-6  border-md-end border-sm-bottom border-2">
                    <h1>Transmisión</h1>
                    <h1 class="text-dark">Automático</h1>
                </div>
                <div class="col-md-3 col-sm-6 border-2">
                    <h1>Numero de Asientos</h1>
                    <h1 class="text-dark">4</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray pt-0 mt-0 animate__animated animate__slideInUp animate__delay-2s animate__slow">
    <div class="container-md md-p-4">
        <div class="row sm-p-2 pt-5">
            <div class="col-md-8 md-p-5 pt-0">
                <!--
                <div class="bg-white p-4 mt-2 rounded">
                    <img src="https://www.ford.com.co/content/dam/Ford/website-assets/latam/co/nameplate/raptor/2021/colores/colorizer/negro-agata/fco-f150-raptor-colorizer-negro-agata.jpg.dam.full.high.jpg/1636765571485.jpg"
                        alt="" class="img-fluid">

                    <ul class="colores">
                        <li> <img src="./image/color-gris.webp" alt=""></li>
                        <li> <img src="./image/color-azul.webp" alt=""></li>
                        <li> <img src="./image/color-rojo.webp" alt=""></li>
                        <li> <img src="./image/color-blanco.webp" alt=""></li>
                        <li> <img src="./image/color-naranja.webp" alt=""></li>
                        <li> <img src="./image/color-negro.webp" alt=""></li>
                    </ul>
                </div>
                -->
                <div class="bg-white pt-4 p-4">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Marca</p>
                            <h2 class="m-0 fw-bold mb-4">Renault</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Modelo</p>
                            <h2 class="m-0 fw-bold mb-4">2022</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Línea</p>
                            <h2 class="m-0 fw-bold mb-4">Alaskan</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Versión</p>
                            <h2 class="m-0 fw-bold mb-4">INTENS AT 4x4</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Combustible</p>
                            <h2 class="m-0 fw-bold mb-4">Diesel</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Cilindraje (motor)</p>
                            <h2 class="m-0 fw-bold mb-4">2500 cc (2.5 L)</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Tracción</p>
                            <h2 class="m-0 fw-bold mb-4">4x4</h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Cojinería</p>
                            <h2 class="m-0 fw-bold mb-4">Cuero</h2>
                        </div>
                    </div>
                </div>


                <div class="galery rounded pt-2">
                    <div class="row gx-0 gy-0">
                        <div class="col-3">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image1/image.imgs.full.high.jpg/1635456003638.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image3/image.imgs.full.high.jpg/1635456907110.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image4/image.imgs.full.high.jpg/1635456906428.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-4">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image5/image.imgs.full.high.jpg/1635456905820.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-4">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image6/image.imgs.full.high.jpg/1635456902271.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>
                        <div class="col-4">
                            <figure>
                                <img src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image7/image.imgs.full.high.jpg/1635457399335.jpg"
                                    class="img-thumbnail">
                            </figure>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 p-4 pt-0 ml-4">
                <div class="sticky-top" style="top:11rem">
                    <div class="bg-white rounded-3 p-4 mb-4 mt-4">
                        <h1 class="fw-bold text-center fs-2">Cotiza tu RANGER XLT</h2>
                            <form class="fs-4" method='POST' id='cotizador'>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombre" name='nombre'
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="correo" name='correo' required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Telefono Movil</label>
                                    <input type="number" class="form-control" id="telefono" name='telefono' required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input ch" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Acepto el tratamiento de mis
                                        datos personales</label>
                                </div>
                                <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed fs-3 bg-light text-black"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                Leer Terminos y condiciones
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body fs-4 text-muted text-justify bg-light"> De
                                                De Conformidad Con Lo Dispuesto En La Ley 1581 De 2012 Y El Decreto 1377
                                                De 2013, Declaro Que Entrego De Forma Libre Y Voluntaria Mis Datos
                                                Personales, Para Su Respectivo Tratamiento Por Parte De AUTOMARCOL SAS O
                                                Sus Empresas Aliadas (Descritas En La Política De Tratamiento De Datos
                                                Personales). La Autorización Expresa Se Circunscribe A Las Siguientes
                                                ﬁnalidades: Medir Niveles De Satisfacción, Informar Sobre Campañas De
                                                Servicio, Comunicar Campañas Promocionales, Realizar Encuestas, Realizar
                                                Recordatorio Para Mantenimientos, Ejecutar Campañas De Fidelización De
                                                Clientes, Enviar Invitaciones A Eventos, Rifas, Realizar Actualización
                                                De Datos, Invitar A Pruebas De Vehículos, Ofrecimiento De Productos Y
                                                Servicios, Comunicar Noticias De Sus Marcas Y De La Red De Ventas Y
                                                Servicios, Comunicar Información Relacionada Con Productos Para La
                                                ﬁnanciación En La Adquisición De Nuestros Bienes Y Servicios.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark fs-3" name='cotizor' type="submit">Solicitar
                                        Cotización</button>
                                </div>
                                <script>
                                document.getElementById("cotizador").addEventListener("submit", cotizor);

                                function cotizor() {
                                    alert('<?php echo cotizor(); ?>');
                                    document.write('<?php echo cotizor(); ?>');
                                }
                                </script>
                            </form>
                    </div>




                    <div class="bg-white rounded-3">

                        <?php
                          $vh=18990000; //valor del vehiculo
                        function cal(){
                            $ci;
                            $vc=$vh-$ci;
                        }
                           

                        ?>
                        <form action=""></form>
                        <h1 class="fs-2 p-4 pb-0 fw-bold text-center">Simula tu Crédito</h2>
                            <p class="fs-3 p-4 pt-0 pb-0">Valor del Vehiculo: $<span id="valor"><?php echo $vh?></span>
                            </p>
                            <p class="fs-3 p-4 pt-0 pb-0">Valor del Crédito: $<span id="credito"><?php echo $vh?></span>
                            </p>
                            <p class="fs-3 p-4 pt-0 pb-0">Tasa de interes: <span>2%</span></p>
                            <p class="fs-5 p-4 pt-0 text-muted pb-0">Puede variar dependiendo de las condiciones del
                                banco.
                            </p>
                            <div class="p-4 pt-0 pb-0">
                                <label for="exampleInputPassword1" class="form-label fs-3">Cuota inicial</label>
                                <input type="text" class="form-control fs-4" id="inicial" onchange="calcular()">
                            </div>
                            <div class="p-4 pt-0 pb-0">
                                <label for="exampleInputPassword1" class="form-label fs-3">Elige el plazo(meses)</label>
                                <select class="form-select fs-4" onchange="calcular()"
                                    aria-label="Default select example" id="meses">
                                    <option value="12">12 meses</option>
                                    <option value="24">24 meses</option>
                                    <option value="36">36 meses</option>
                                    <option value="48">48 meses</option>
                                    <option value="60">60 meses</option>
                                    <option value="72">72 meses</option>
                                    <option value="84">84 meses</option>
                                </select>
                            </div>
                            <p class="fs-3 p-4 pb-0">El valor de la cuota mensual es:</p>
                            <h1 class="fs-2 fs-bold p-4 pt-0">$9.856.503</p>

                    </div>
                </div>


            </div>

        </div>

    </div>


</section>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
    integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>



<?php include'./includes/components/footer.php';?>