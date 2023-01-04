<style>
p {
    font-size: 13px !important;
    text-align: justify !important;
}


.card-title fs-2 {
    text-align: justify !important;
}

.repuestos {
    background-color: #eeeee;
    border-radius: 0 !important;
    margin: 5px;
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
    border-radius: 20px !important;
}

.bg-dark {
    background-color: #2c3b6d !important;
    color: white;
}

.menure {
    height: 100%;
    width: 100%;
    margin-buttom: 10px;
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
    height: 60px;
    overflow: hidden;
}

.sticky {
    position: sticky;
    top: 0px;
}
</style>

<section class="vehicles bg-gray" id="repuestos">
    <div class="text-justify container">
        <div class="row gy-4">
            <div class="col-sm-12 col-md-3">
                <div class="menure">
                    <div class="card-body p-4 m-2 sticky  p-2 bg-white" style="top:150px !important">
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

            <div class="col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep1.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Modulo Abs Original Ford Fusion</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$963.708</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep2.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Empaque De Cámara Original Ford Mustang, F-150, Explorer</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep4.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Palanca De Cambios Original Ford Fiesta-ecosport</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep5.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Bobina Original Ford Fiesta</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep6.png" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Bombillo Ford Fiesta</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/re1.webp" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">PI¥ON DE ARBOL - FIESTA CCH 2011-2013-FIESTA CCT 2014-2019-FOCUS
                                    CB4 2008-2011-FOCUS/C-MAX CAP 2006-NOVO ECOSPORT BRASIL EB 2012-2015
                                </p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep7.png" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Refuerzo Manija Exterior De Puerta Izquierda</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$73.216</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card repuestos border-0">
                            <figure> <img src="./image/rep3.jpg" class="card-img-top"></figure>
                            <div class="card-body">
                                <p class="trepuestos">Manguera De Aire Acondicionado Ford Ecosport, Escape</p>
                                <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">$725.301</h1>
                                    <p class="fw-bold p-2 pt-0 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                                    <div class="position-absolute top-0 end-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-dark me-md-2 rounded fs-4" type="button" id="btn-lock"><a
                                                    href="./repuestos"><i
                                                        class="fas fa-eye text-white"></i></a></button>
                                            <button class="btn btn-dark me-md-2 rounded fs-4" onclick="alertrep()"
                                                type="button"><i class="fas fa-cart-plus m-2"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>