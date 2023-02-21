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
    bottom: 170;
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


<!--
<div class="carousel-cell">
    <img src="./image/fb.png" class="img-thumbnail" alt="">
</div>
<div class="carousel-cell">
    <img src="./image/peugeotl.png" class="img-thumbnail h-75 mx-auto my-auto" alt="">
</div>
<div class="carousel-cell">
    <img src="./image/lg2.png" class="img-thumbnail mx-auto" alt="">
</div>
<div class="carousel-cell">
    <img src="./image/lg3.png" class="img-thumbnail mx-auto" alt="">
</div>
<div class="carousel-cell">
    <img src="./image/lg4.png" class="img-thumbnail mx-auto" alt="">
</div>

-->
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<section class="bg-gray" id="vehiculos">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <div class="container">
        <div class="mx-md-5">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://autoextragti.com/wp-content/uploads/2022/03/bxobvm2023-ford-everest-sport-1400x788.jpeg');"
                            id="carta">
                            <div style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">

                                <h1 class="fw-semibold titulo-marca texto">Vehiculos Ford</h1>
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

                                <h1 class="fw-semibold titulo-marca texto">Vehiculos Peugeot</h1>
                                <div class="oculto texto">
                                    <h3>Ya llegó a Colombia la nueva Ford Bronco, una camioneta lista para la
                                        aventura.</h3>
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

                                <h1 class="fw-semibold titulo-marca texto">Vehiculos Foton</h1>
                                <div class="oculto texto">
                                    <h3>Ya llegó a Colombia la nueva Ford Bronco, una camioneta lista para la
                                        aventura.</h3>
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

                                <h1 class="fw-semibold titulo-marca texto">Vehiculos Bajaj</h1>
                                <div class="oculto texto">
                                    <h3>Ya llegó a Colombia la nueva Ford Bronco, una camioneta lista para la
                                        aventura.</h3>
                                    <p>Ver Catalogo</p>
                                </div>
                                <div class="sombral"> <a href="./listado?marca=Bajaj" class="stretched-link texto"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow card text-white card-marcas border-0 rounded rounded-4"
                            style="background-image: url('https://electrek.co/wp-content/uploads/sites/3/2019/12/jeep-phev-1-.jpg?quality=82&strip=all');"
                            id="carta">
                            <div class="" style="background: linear-gradient(180deg,black,rgba(0,57,81,0));">
                                <h1 class="fw-semibold titulo-marca texto">Vehiculos FCA</h1>
                                <div class="oculto texto">
                                    <h3>Ya llegó a Colombia la nueva Ford Bronco, una camioneta lista para la
                                        aventura.</h3>
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

<script>
$(document).ready(function() {
    $.ajax({
            url: "./includes/components/repuestos/loader.php",
            beforeSend: function() {
                $("#cargando").show();
            },
        })
        .done(function(res) {
            $("#res").html(res), $("#error").hide(), $("#cargando").hide();
        })
        .fail(function() {
            $("#error").show(), $('$cargando').hide();
        });
})
</script>

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
    font-size: 18px;
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
</style>
<section class="vehicles bg-gray" id="repuestos">
    <div class="text-justify container">
        <div class="row gy-4">
            <div class="col-sm-12 col-md-3">
                <div class="menure">
                    <div class="card-body p-4 m-2 sticky rounded  shadow rounded-3 p-2 bg-white "
                        style="top:150px !important;">
                        <h4>
                            <form>
                                <h2 class="p-2">Categorias</h2>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="">Baterias</a></li>
                                    <li class="list-group-item border-0"><a href="">Ruedas</a></li>
                                    <li class="list-group-item border-0"><a href="">Vacio</a></li>
                                    <li class="list-group-item border-0"><a href="">Vacio</a></li>
                                </ul>
                                <h2 class="p-2">Marcas</h2>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="">Ford</a></li>
                                    <li class="list-group-item border-0"><a href="">Jeep</a></li>
                                    <li class="list-group-item border-0"><a href="">Bajaj</a></li>
                                    <li class="list-group-item border-0"><a href="">Peugeot</a></li>
                                    <li class="list-group-item border-0"><a href="">Levol</a></li>
                                </ul>
                                <h2 class="p-2">Repuestos</h2>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="">Camioneta</a></li>
                                    <li class="list-group-item border-0"><a href="">Camion</a></li>
                                    <li class="list-group-item border-0"><a href="">Motocicleta</a></li>
                                    <li class="list-group-item border-0"><a href="">Scooter</a></li>
                                </ul>
                                <h2 class="p-2">Descuentos</h2>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="">$400.000</a></li>
                                    <li class="list-group-item border-0"><a href="">$400.000</a></li>
                                    <li class="list-group-item border-0"><a href="">$400.000</a></li>
                                    <li class="list-group-item border-0"><a href="">$400.000</a></li>
                                </ul>
                            </form>
                            </h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="row g-sm-0 g-4">
                    <div id="res">
                    </div>
                    <div id="cargando" style="display: none;">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                        </script>
                        <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_o6x7owmk.json"
                            background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto" loop
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
        </div>
</section>

<?php include'./includes/components/anuncios/reviews.php';?>
<br>
<br>
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