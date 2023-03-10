<style>
.carousel-cell {
    width: 100%;
}
.recuadro {
    border-radius: 50%;
}

.logo-marca {
    width: 20rem;
    padding: 0px 10px;
}
.main-carousel{
    max-height: 80% !important;
}

:root {
    --animate-delay: 1s;
}
</style>
<section class="bg-gray">
    <div class="container-md animate__animated animate__backInDown animate__slow" style="padding-top: 12rem">
        <div class="main-carousel bg-gray"
            data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": 8000, "friction": 0.5, "selectedAttraction": 0.15, "asNavFor": ".carousel-main"}'>
            <div class="carousel-cell"> <img class="img-fluid"
                    src="image/fordcarrousel2.jpg" alt=""></div>
            <div class="carousel-cell"> <img class="img-fluid"
                    src="image/fordcarrousel2.jpg" alt=""></div>
            <div class="carousel-cell"> <img class="img-fluid"
                    src="image/fordcarrousel2.jpg" alt=""></div>
        </div>
        <div class="position-relative ">
            <div class="position-absolute top-0 start-50 translate-middle">
                <div class="bg-gray recuadro">
                    <img src="./image/fordlogo.png" class="logo-marca" alt="">
                </div>
            </div>
        </div>
    </div>
    <br>
</section>