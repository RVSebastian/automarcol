<?php include'./includes/components/header.php';?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // inicimoas la session nuevamente
?>
<p id="home"></p>
<style>
:root {
    --swiper-navigation-colo: gray;
}

.marcas-carousel {
    transition: opacity 0.3s ease-in-out;
}

.carousel-cell {
    width: 2%;
    counter-increment: carousel-cell;
    border-radius: 15px;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
}

.carousel-cell:before {
    display: inline;
}

.bg-dark {
    background-color: #2c3b6d !important;
    color: white;
}

.carousel-nav .carousel-cell {
    height: 10rem;
    width: 10rem;
    padding-top: 10px;
    margin: 1rem;
    margin-bottom: 0;
    display: inline;
    border-radius: 30px;

}

.swiper-slide {
    align-items: center;
    justify-content: center;
}

.carousel-nav .carousel-cell.is-nav-selected {
    opacity: .4;
}

.marcas-carousel {
    height: 100rem;
}

.img-thumbnail {
    1594 background-color: transparent !important;
    border: none !important;
}

.sombral {
    content: '';
    background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.131) 19%, rgba(0, 0, 0, 0.2295) 34%, rgba(0, 0, 0, 0.309) 47%, rgba(0, 0, 0, 0.361) 56.5%, rgba(0, 0, 0, 0.403) 65%, rgba(0, 0, 0, 0.437) 73%, rgba(0, 0, 0, 0.4625) 80.2%, rgba(0, 0, 0, 0.479) 86.1%, rgba(0, 0, 0, 0.4895) 91%, rgba(0, 0, 0, 0.496) 95.2%, rgba(0, 0, 0, 0.499) 98.2%, rgba(0, 0, 0, 0.5) 100%);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 10;
    width: 100%;
    border-radius: 20px;
}


.swiper {
    width: 100%;
    height: 45rem !important;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.swiper {
    margin-left: auto;
    margin-right: auto;
}

.card-marcas {
    width: 35rem !important;
    height: 38rem !important;
    background-size: cover;
    background-position: center;

}

.oculto {
    display: none;
    opacity: 0;
    position: absolute;
    transition-opacity: 5s;
    transition-delay: 5s;
    bottom: 0;
    left: 0;
    padding-right: 20px;
}

.card-marcas:hover .oculto {
    display: block !important;
    opacity: 1;
    transition-delay: 5s;
    bottom: 75;
    left: 20;
}

.titulo-marca {
    position: absolute;
    bottom: 50;
    left: 20;
    font-size: 5rem;
    text-shadow: 5px 5px var(--main);
    text-size-adjust: 80%;
}

.card-marcas:hover .titulo-marca {
    bottom: 180;
    left: 20;
}

.texto {
    z-index: 100;
}

.swiper-pagination-bullet {
    border-radius: 0 !important;
    width: 20px !important;
    height: 10px !important;
    color: var(--main) !important;
}

.swiper-pagination-bullet-active {
    background-color: var(--main) !important;
}

</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
anime({
    targets: '.test',
    translateX: 250
});
</script>
<section class="bg-gray" id="vehiculos">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <div class="container">
        <div class="mx-5">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://autoextragti.com/wp-content/uploads/2022/03/bxobvm2023-ford-everest-sport-1400x788.jpeg');"
                            id="carta">
                            <div style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">
                                <h1 class="fw-semibold titulo-marca texto">Vehículos Ford</h1>
                                <div class="oculto texto text-justify">
                                    <h3>Ya llegó a Colombia la nueva Ford Bronco, una camioneta lista para la
                                        aventura.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"></div>
                            </div>
                            <a href="./listado?marca=Ford" class="stretched-link texto"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://img.remediosdigitales.com/c81cec/peugeot-2008-2022-precio-mexico_/1366_2000.jpeg');"
                            id="carta">
                            <div style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">

                                <h1 class="fw-semibold titulo-marca texto">Vehículos Peugeot</h1>
                                <div class="oculto texto">
                                    <h3>Con nosotros podrás simular tu financiación o reservar tu próximo Peugeot de
                                        manera online.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"></div>
                            </div>
                            <a href="./listado?marca=Peugeot" class="stretched-link texto"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://http2.mlstatic.com/D_NQ_NP_822254-MCO51808098399_102022-W.jpg');"
                            id="carta">
                            <div style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">

                                <h1 class="fw-semibold titulo-marca texto">Vehículos Foton</h1>
                                <div class="oculto texto">
                                    <h3>El quinto mayor fabricante de automóviles de China, con ventas anuales sobre el
                                        millón de unidades.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"></div>
                            </div>
                            <a href="./listado?marca=Foton" class="stretched-link texto"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://puromotor.com/wp-content/uploads/2018/03/ECH_3535.jpg');"
                            id="carta">
                            <div style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">

                                <h1 class="fw-semibold titulo-marca texto">Vehículos Bajaj</h1>
                                <div class="oculto texto">
                                    <h3>Bajaj ha diseñado de manera inteligente la Cámara de Expansión de Torque ó
                                        ExhausTEC.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"></div>
                            </div>
                            <a href="./listado?marca=Bajaj" class="stretched-link texto"></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://electrek.co/wp-content/uploads/sites/3/2019/12/jeep-phev-1-.jpg?quality=82&strip=all');"
                            id="carta">
                            <div class="" style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">
                                <h1 class="fw-semibold titulo-marca texto">Vehículos FJDR</h1>a
                                <div class="oculto texto">
                                    <h3>Desde los trabajos más exigentes hasta los viajes más largos, la RAM 700 SLT te
                                        llevará a donde necesites llegar.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"></div>
                            </div>
                            <a href="./listado?marca=Fca" class="stretched-link texto"></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
            <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                slidesPerView: 1,
                spaceBetween: 20,
                freeMode: true,
                loop: true,
                centeredSlides: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1204: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true,
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },

            });
            </script>

        </div>
</section>

<style>
#w {
    opacity: .7;
    cursor: pointer;
    filter: grayscale(1);
}

.r .card {
    transition: .15s all ease;
}

.r .card:hover {
    opacity: 1;
    filter: grayscale(0);
    transition: .35s all ease;
}

.trepuestos p {
    font-size: 15px !important;
    text-align: justify !important;
}

p .d {
    font-size: 12px !important;
}

.card-title fs-2 {
    text-align: justify !important;
}

.repuestos {
    background-color: #eeeee;
}

figure {
    overflow: hidden;
}

.repuestos:hover img {
    -webkit-transform: rotate(3deg) scale(1.2);
    transform: rotate(3deg) scale(1.2);
    -webkit-transition: 1s ease-in-out;
    transition: 1s ease-in-out;
    object-fit: contain;
}



.bg-dark {
    background-color: #2c3b6d !important;
    color: white;
}

.menure {
    height: 100%;
    width: 100%;
    margin-buttom: 6px;
}

.card-title fs-2 {
    text-align: center;
}

option {
    font-size: 10px;
}

.menure a {
    color: gray;
    text-decoration: none;
}

.menure a:hover {
    color: var(--main);
}

.trepuestos {
    height: 45px;
    overflow: hidden;
}

.sticky {
    position: sticky;
    top: 0px;
}

.t-d {
    line-height: 25px;
    font-weight: 500;
    color: #2C2A29 !important;
}

.animate__animated.animate__pulse {
    --animate-duration: 5s;
}
</style>
<script>
$(document).ready(function() {
    $("#FORD").click(function() {
        cargar(marca = 'FORD');
    });
    $("#FJDR").click(function() {
        cargar(marca = 'FJDR');
    });
    $("#BAJAJ").click(function() {
        cargar(marca = 'BAJAJ');
    });
    $("#PEUGEOT").click(function() {
        cargar(marca = 'PEUGEOT');
    });
    $("#FOTON").click(function() {
        cargar(marca = 'FOTON');
    });

    function cargar(marca) {
        $.ajax({
                type: "POST",
                data: {
                    marca
                },
                url: "./includes/components/repuestos/loader.php",
                beforeSend: function() {
                    $("#cargando").show(), $("#res").hide();
                },
                error: function(request, error) {
                    $("#error").show(), $('$cargando').hide();
                },
            })
            .done(function(res) {
                $("#res").html(res), $("#res").show(), $("#error").hide(), $("#cargando").hide();
            })
            .fail(function() {
                $("#error").show(), $('$cargando').hide();
            });
    };
    $(document).ready(cargar);
});
</script>
<section class="vehicles bg-gray" id="repuestos">
    <div class="text-justify container">
        <div class="row gy-4">
            <div class="col-sm-12 col-md-3">
                <div class="menure">
                    <div class="card-body p-4 m-2 sticky rounded  shadow rounded-3 p-2 bg-white "
                        style="top:150px !important;">
                        <h2 class="p-2">Buscar por Marca</h2>

                        <ul class="list-group list-group-flush fs-3">
                            <li class="list-group-item border-0"><a href="#" id='FORD'>Ford</a></li>
                            <li class="list-group-item border-0"><a href="#" id='FJDR'>FJDR</a></li>
                            <li class="list-group-item border-0"><a href="#" id='BAJAJ'>Bajaj</a></li>
                            <li class="list-group-item border-0"><a href="#" id='PEUGEOT'>Peugeot</a></li>
                            <li class="list-group-item border-0"><a href="#" id='FOTON'>Foton</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="row">
                    <div id="res">
                    </div>
                </div>
                <div id="cargando" style="display: none;">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://lottie.host/ffaf19c2-00c2-4428-a40f-6c7af3493b23/3bKkp03jsa.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px; margin: 0 auto;" loop
                        autoplay></lottie-player>
                    <p class="text-center">Cargando Repuestos</p>
                </div>
                <div id="error" style="display: none">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                    </script>
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_suhe7qtm.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto" loop
                        autoplay></lottie-player>
                </div>

            </div>
        </div>
</section>
<section style="
  background: linear-gradient(#F4F5F7, #eeeeee) !important;
">
    <div class="container-xxl py-5" id="test">
        <div class="container">
            <div class="row g-5 mb-5 ">
                <div class="col-lg-6" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: test;">
                    <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 550px">
                        <img class="position-absolute w-100 h-100 animate__animated animate__slow animate__pulse animate__infinite"
                            src="./image/t1.jpg" alt="" style="object-fit: cover">
                        <div class="position-absolute top-0 start-0 bg-gray rounded pe-3 pb-3"
                            style="width: 200px; height: 200px">
                            <div
                                class="d-flex flex-column justify-content-center text-center bg-dark rounded h-100 p-3">
                                <h1 class="text-white mb-0">Horarios</h1>
                                <h2 class="text-white">De Atención</h2>
                                <h2 class="text-white">Taller</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;">
                    <div class="h-100 pt-2 wow fadeInUp">
                        <h2 class="my-5 text-justify p-2" style="font-size: 3rem; color: var(--main)">
                            TALLER AUTORIZADO MULTIMARCAS
                        </h2>
                        <p class="mb-4 fs-4">
                            ¡Bienvenidos a nuestro taller multimarcas en Cúcuta! Somos un equipo de expertos en
                            reparación y
                            mantenimiento de vehículos de todas las marcas y modelos. Nos especializamos en brindar un
                            servicio de alta calidad, con rapidez y eficiencia.
                        </p>
                        <p class="mb-4 fs-4">
                            En nuestro taller encontrarás tecnología de última generación y herramientas especializadas
                            para
                            garantizar que tu vehículo reciba el mejor tratamiento posible. Además, nuestro personal
                            está
                            altamente capacitado y cuenta con años de experiencia en el campo de la mecánica automotriz.
                        </p>
                        <p class="mb-4 fs-4">
                            Nos aseguramos de que nuestros clientes se sientan cómodos y confiados en nuestra atención
                            personalizada. Queremos que tu experiencia sea excepcional, desde el momento en que ingresas
                            a
                            nuestro taller hasta el momento en que recibes tu vehículo totalmente reparado.
                        </p>
                        <p class="mb-4 fs-4">
                            Te invitamos a visitarnos y dejarnos demostrarte por qué somos la mejor opción para el
                            cuidado
                            de tu vehículo en Cúcuta. ¡Te esperamos!
                        </p>
                        <p class="mb-4 fs-4">
                            Lunes a Viernes de 8:00 a.m hasta las 12:00 p.m, se reanuda de 2:00 p.m a 6:00 p.m
                        </p>
                        <p class="mb-4 fs-4">
                            Sábados de 8:00 a.m a 2:00 p.m, horario continuo
                        </p>
                        <hr>
                        <div class=" mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">Numero de Atención: +57 315 7006633</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row g-5 mt-5">
                <div class="col-lg-6" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="h-100 pt-2">
                        <h2 class="my-5 text-justify p-2" style="font-size: 3rem; color: var(--main)">
                            VENTAS DE VEHÍCULOS NUEVOS
                        </h2>
                        <p class="mb-4 fs-4">
                            ¡Gracias por tu interés en nuestros vehículos! Nuestro horario de atención para ventas es de
                            lunes a viernes, de 8:00 a.m. a 12:00 p.m, se reanuda de 2:00 pm hasta las 6:pm , Estamos
                            abiertos los domingos y festivos.
                        </p>
                        <p class="mb-4 fs-4">
                            Durante nuestro horario de atención, nuestro equipo de ventas estará disponible para
                            brindarte
                            una atención personalizada y responder a todas tus preguntas sobre nuestros vehículos en
                            venta.
                            Te invitamos a visitarnos en nuestra sala de ventas y explorar nuestra amplia selección de
                            vehículos de todas las marcas y modelos.
                        </p>
                        <p class="mb-4 fs-4">
                            Si no puedes visitarnos durante nuestro horario de atención, no te preocupes, puedes
                            comunicarte
                            con nosotros en nuestro sitio web o en nuestras redes sociales. Uno de nuestros
                            representantes
                            de ventas estará encantado de ayudarte y programar una cita para que puedas ver los
                            vehículos
                            que te interesan.
                        </p>
                        <p class="mb-4 fs-4">
                            Estamos comprometidos a brindarte el mejor servicio posible y a ayudarte a encontrar el
                            vehículo
                            que mejor se adapte a tus necesidades y presupuesto. ¡Esperamos verte pronto!
                        </p>
                        <hr>
                        <div class=" mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0">Numero gerencial +57 315 4240028</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 550px">
                        <img class="position-absolute w-100 h-100 animate__animated animate__slow animate__pulse animate__infinite"
                            src="./image/t2.jpg" alt="" style="object-fit: cover">
                        <div class="position-absolute top-0 start-0 bg-gray rounded pe-3 pb-3"
                            style="width: 200px; height: 200px">
                            <div
                                class="d-flex flex-column justify-content-center text-center bg-dark rounded h-100 p-3">
                                <h1 class="text-white mb-0">Horarios</h1>
                                <h2 class="text-white">De Atención</h2>
                                <h2 class="text-white">Ventas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include'./includes/components/anuncios/reviews.php';?>
<?php include'./includes/components/anuncios/taller.php';?>
<style>
.form-control {
    background-color: #F8F9F9;
    padding: 4px;
    border-radius: 5px;
    font-size: 15px;
}

.formulario {
    max-width: 60rem;
}

#pop-up-message-circle {
    background-color: var(--main) !important;
}
</style>
<p id="contact"></p>
<?php include'./includes/components/contact.php';?>
<?php include'./includes/components/footer.php';?>