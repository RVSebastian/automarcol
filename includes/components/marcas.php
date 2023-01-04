<style>
.marcas-carrousel .carousel-cell {
    width: 20vh;
    margin: 10vh;
    opacity: .2;
}
.carousel-cell.is-selected {
    opacity: 1;
}

</style>
<div class="container w-100">
    <div class="marcas-carrousel" id="main" style="padding-top: 2rem; margin-bottom: 5rem"
        data-flickity='{ "cellAlign": "center", "contain": false, "prevNextButtons": false, "pageDots": false, "autoPlay": 2000, "wrapAround": true, "freeScroll": true}'>
        <div class="carousel-cell"> <img class="img-fluid" src="image/fordl.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/fiatl.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/jeepl.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/raml.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid h-50" src="image/dodge.jpg" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/peugeot.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/foton.png" alt="">
        </div>
        <div class="carousel-cell"> <img class="img-fluid" src="image/bajaj.png" alt="">
        </div>
    </div>
</div>


<script>
var elem = document.querySelector('.marcas-carrousel');
</script>