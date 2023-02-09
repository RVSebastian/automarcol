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
</style>
<br><br><br><br>
<style>
.carousel-cell {
    width: 100%;
}
.otro p, span {
    background-color: transparent !important;
}
.recuadro {
    border-radius: 50px;
}

.peugeot .logo-marca {
    width: 12rem;
    padding: 10px;
}

.bg-dark {
    background-color: #2c3b6d !important;
}

.otro img {
    float: left !important;
    padding: 3px;
}
</style>
<?php
$data = $_SESSION['data'];
$modelo = $_GET['parte'];
$filtro = array_filter($data, function($array) use ($modelo){
    if (str_contains($array['Parte'], $modelo)) {
        return $array;
    }
    });
$data = $filtro;
?>

<?php foreach (array_slice($data, 0, 1) as $datos) { 
    $imagenes = json_decode($datos['collage_img'],true);
?>
<section class="bg-gray">
    <br><br><br>
    <div class="container-md bg-white rounded p-4">
        <div class="row p-4">
            <div class="col-md-6 p-4">
                <div class="carousel carousel-main"
                    data-flickity='{"contain": true, "prevNextButtons": true, "pageDots": false}'>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img1'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img2'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img3'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img4'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img5'];?>"
                            alt=""></div>
                </div>
                <div class="carousel carousel-nav"
                    data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": false }'>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img1'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img2'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img3'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img4'];?>"
                            alt=""></div>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img5'];?>"
                            alt=""></div>
                </div>

            </div>

            <div class="col-md-6 p-4 pt-0 ml-4">
                <div class="bg-light rounded p-4 mb-4 mt-4">
                    <h1 class="fs-1"><?php echo $datos['Descripcion'];?></h2>
                        <p class="fs-4 pt-2 text-justify">
                            En stock <span class="fw-bold"
                                style="color: var(--main)"><?php echo $datos['existencia'];?></span>
                        </p>
                        <h1 class="fs-1 fw-bold" style="color: var(--main)"><?php echo $datos['Costo$'];?></h1>
                        <!--<a href="" class="btn btn-dark fs-2 p-2"><i class='bx bx-store-alt bx-tada'></i> Añadir al
                            carrito</a> -->
                </div>
                <div class="bg-light rounded p-4 mb-4 mt-4 otro">
                    <h1 class="fs-2 text-muted">Detalle del articulo</h2>
                        <p class="p-2 otro"><?php echo $datos['otro'];?>
                        </p>
                    </h1>

                </div>
                <div class="bg-light rounded  p-4 mb-4 mt-4">
                    <h1 class="fs-2 text-muted">Información de la tienda</h2>

                        <h3 class="p-2"><i class='bx bx-time-five'></i> Horario de atención
                    </h1>
                    <p class="fs-4">Lunes a Domingo</p>
                    <h3 class="p-2"><i class='bx bxs-map'></i> Ubicación del articulo</h1>
                        <p class="fs-4 pl-4"> Zona Franca, Av. Libertadores #2-160, Cúcuta</p>

                </div>
                <h3 class="p-4 text-center text-muted"><i class="fas fa-shield-alt"></i>¿Necesitas ayuda? Llámanos al
                    12345 1246 12514</h2>
            </div>

        </div>

    </div>

</section>
<?php } ?>

<?php include'./includes/components/comentarios.php';?>
<?php include'./includes/components/footer.php';?>