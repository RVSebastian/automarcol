<?php include'./includes/components/header.php';?>

<p id="home"></p>
<style>
.marcas-carousel {
    transition: opacity 0.3s ease-in-out;
}

.carousel-cell {
    width: 1%;
    counter-increment: carousel-cell;
    border-radius: 15px;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
}

.carousel-cell:before {
    display: inline;
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

.carousel-nav .carousel-cell.is-nav-selected {
    opacity: .4;
}

.marcas-carousel {
    height: 100rem;
}

.img-thumbnail {
    background-color: transparent !important;
    border: none !important;
}
</style>
<br>
<section class=" bg-gray sticky-top">
    <div class="carousel container  carousel-nav p-4 mb-4 rounded animate__animated animate__backInRight animate__delay-1s animate__slow"
        style="overflow: hidden; top:50;"
        data-flickity='{ "asNavFor": ".marcas-carousel", "cellAlign": "right", "pageDots": true, "draggable": false, "prevNextButtons": false, "wrapAround": true }'>
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
    </div>
</section>

<section class="bg-gray" id="vehiculos">
    <div class="carousel marcas-carousel"
        data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots": false, "draggable": false, "wrapAround": true}'>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado.php';?>
            <?php include'./includes/components/vehiculos/card.php';?>
        </div>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado2.php';?>
            <?php include'./includes/components/vehiculos/peugeot.php';?>
        </div>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado.php';?>
            <?php include'./includes/components/vehiculos/card.php';?>
        </div>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado2.php';?>
            <?php include'./includes/components/vehiculos/peugeot.php';?>
        </div>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado.php';?>
            <?php include'./includes/components/vehiculos/card.php';?>
        </div>
        <div class="carousel-cell">
            <?php include'./includes/components/carrousel/encabezado2.php';?>
            <?php include'./includes/components/vehiculos/peugeot.php';?>
        </div>
    </div>


</section>

<?php include'./includes/components/repuestos/card.php';?>
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