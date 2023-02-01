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

.repuestos:hover img {
    -webkit-transform: rotate(1deg) scale(1.4);
    transform: rotate(1deg) scale(1.1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}

figure {
    overflow: hidden;
    background-color: transparent;
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

            <div class="col-sm-12 col-md-9 r">
                <div class="row g-sm-4 gy-4 g-md-1">
                    <?php
            for ($i = 1; $i <= 25; $i++) {
            ?>
                    <div class="col-md-3 col-sm-6 col-6 animation_repuestos">
                        <div class="card rounded shadow rounded-3 repuestos border-0 m-sm-4 m-md-4">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body bg-light">
                                <p class="trepuestos t-d p-2 pb-0 pt-0">Modulo Abs Original Ford Fusion</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$963.708</h1>
                                    <p class="p-2 pt-0 pb-0 d"> <i class='bx bx-package'></i> 3 Disponibles</p>
                                    <a href="./repuestos" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>
                </div>
            </div>
        </div>
    </div>
</section>