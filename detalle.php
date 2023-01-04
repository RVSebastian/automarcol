<?php include'./includes/components/header.php';?>

<style>
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
    font-size: 35px;
    font-weight: 600;

}
</style>
<section class="bg-gray">
    <br>
    <div class="container-md  rounded  md-p-4">
        <div class="row sm-p-2 md-p-4 pt-5">
            <div class="col-md-8 md-p-5">
                <div class="carousel carousel-main h-80"
                    data-flickity='{"contain": true, "prevNextButtons": true, "pageDots": false}'>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail1.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail2.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail3.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail4.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail5.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail6.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail7.webp" alt=""></div>
                </div>
                <div class="carousel carousel-nav"
                    data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": false }'>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail1.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail2.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail3.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail4.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail5.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail6.webp" alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="image/detail7.webp" alt=""></div>
                </div>
                <div class="bg-white rounded p-4 mb-4 mt-4">
                    <p class="fs-4 text-muted">2022 | 0 km · Publicado hace 51 días</p>
                    <h1 class="fs-1">Ford Bronco Wildtrak 2.0 2022 </h2>
                        <p class="fs-4 pt-2 text-justify">
                            Publicado por <span class="fw-bold" style="color: var(--main)">Sebastian Vargaz</span>
                        </p>
                        <h1 class="fs-1 fw-bold" style="color: var(--main)">$195.990.000</h1>
                        <a href="" class="btn btn-success fs-3"><i class="fab fa-whatsapp"></i> Contactar a un
                            Asesor</a>
                </div>
                <div class="bg-white rounded  p-4 mt-4">
                    <h1 class="fs-3 text-muted p-2">Caracteristicas</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="./image/svg1.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4 ml-0">
                                        <img src="./image/svg2.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4 ml-0">
                                        <img src="./image/svg3.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4 ml-0">
                                        <img src="./image/sv4.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4 ml-0">
                                        <img src="./image/svg5.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-4 ml-0">
                                        <img src="./image/svg6.svg" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="fs-3">Titulo</h2>
                                        <p class="fs-4">Descripcion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="bg-white rounded  p-4 mb-4 mt-4">
                    <h1 class="fs-2 text-muted">Información de la tienda</h2>

                        <h3 class="p-2"><i class='bx bx-time-five'></i> Horario de atención
                    </h1>
                    <p class="fs-4">Lunes a Domingo</p>
                    <h3 class="p-2"><i class='bx bxs-map'></i> Ubicación del vehículo</h1>
                        <p class="fs-4 pl-4"> Zona Franca, Av. Libertadores #2-160, Cúcuta</p>

                </div>
                <h3 class="p-4 text-center text-muted"><i class="fas fa-shield-alt"></i>¿Necesitas ayuda? Llámanos al
                    12345 1246 12514</h2>
            </div>

            <div class="col-md-4 p-4 pt-0 ml-4">
                <div class="sticky-top" style="top:11rem">
                    <div class="bg-white rounded p-4 mb-4 mt-4">
                        <h1 class="fw-bold text-center fs-2">Cotizador Online</h2>
                            <form class="fs-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Correo Electronico</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Telefono Movil</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
                                                conformidad con lo
                                                dispuesto en la ley
                                                1581 de 2012 y el
                                                decreto 1377 de 2013, declaro
                                                que entrego de forma libre y voluntaria mis datos personales, para su
                                                respectivo
                                                tratamiento
                                                por parte de CENTRAL MOTOR AMERICA SAS o sus empresas aliadas (Descritas
                                                en la
                                                política de
                                                tratamiento de datos personales). La autorización expresa se
                                                circunscribe a las
                                                siguientes
                                                ﬁnalidades: Medir niveles de satisfacción, informar sobre campañas de
                                                servicio,
                                                comunicar
                                                campañas promocionales, realizar encuestas, realizar recordatorio para
                                                mantenimientos,
                                                ejecutar campañas de fidelización de clientes, enviar invitaciones a
                                                eventos, rifas,
                                                realizar actualización de datos, invitar a pruebas de vehículos,
                                                ofrecimiento de
                                                productos y
                                                servicios, comunicar noticias de sus marcas y de la red de ventas y
                                                servicios,
                                                comunicar
                                                información relacionada con productos para la ﬁnanciación en la
                                                adquisición de
                                                nuestros
                                                bienes y servicios.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark fs-3" type="button">Solicitar Cotización</button>
                                </div>
                            </form>
                    </div>
                    <div class="bg-white">

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
<script>
function calcular() {
    $.ajax({
                url: "./includes/pros/cotizador.php",
                success: function(result) {
                    $("div").text(result);
                }
            }
</script>
<?php
$text = $_POST['text'];
$output = wordwrap($text, 60, "<br>");
echo $output;
?>

<?php include'./includes/components/footer.php';?>