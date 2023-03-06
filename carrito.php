<?php include'./includes/components/header.php';?>
<?php require'./includes/php/carrito.php';?>
<style>
.bg-dark {
    background-color: #2c3b6d !important;
}

.flickity-prev-next-button {
    top: 80%;
}
</style>
<br><br><br>
<section class="bg-gray">
    <br><br><br><br>
    <div class="container carrito">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($_SESSION['carrito'] as $parte => $row):   
                $objet = json_decode($_SESSION['carrito'][$parte]['imagen']);
                ?>
                <div class="card border-0 mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="carousel carousel-main"
                                data-flickity='{"contain": true, "prevNextButtons": false, "pageDots": false}'>
                                <?php 
                    if (!empty($objet->img1 . PHP_EOL )) {
                    ?>
                                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                                        onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"
                                        src="./dashboard/galery/<?php echo $_SESSION['carrito'][$parte]['parte']?>/<?php echo $objet->img1 . PHP_EOL;  ?>"
                                        alt="">
                                </div>
                                <?php 
                    }
                    ?>
                                <?php 
                    if (!empty($objet->img2 . PHP_EOL )) {
                    ?>
                                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                                        onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"
                                        src="./dashboard/galery/<?php echo $_SESSION['carrito'][$parte]['parte']?>/<?php echo $objet->img2 . PHP_EOL;  ?>"
                                        alt="">
                                </div>
                                <?php 
                    }
                    ?>
                                <?php 
                    if (!empty($objet->img3 . PHP_EOL )) {
                    ?>
                                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                                        onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"
                                        src="./dashboard/galery/<?php echo $_SESSION['carrito'][$parte]['parte']?>/<?php echo $objet->img3 . PHP_EOL;  ?>"
                                        alt="">
                                </div>
                                <?php 
                    }
                    ?>
                                <?php 
                    if (!empty($objet->img4 . PHP_EOL )) {
                    ?>
                                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                                        onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"
                                        src="./dashboard/galery/<?php echo $_SESSION['carrito'][$parte]['parte']?>/<?php echo $objet->img4 . PHP_EOL;  ?>"
                                        alt="">
                                </div>
                                <?php 
                    }
                    ?>
                                <?php 
                    if (!empty($objet->img5 . PHP_EOL )) {
                    ?>
                                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                                        onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"
                                        src="./dashboard/galery/<?php echo $_SESSION['carrito'][$parte]['parte']?>/<?php echo $objet->img5 . PHP_EOL;  ?>"
                                        alt="">
                                </div>
                                <?php 
                    }
                    ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mx-auto p-4 my-4">
                                <h2 class="card-title fs-3">Codigo: <?php echo $_SESSION['carrito'][$parte]['parte']; ?>
                                    </h5>
                                    <h2 class="card-title fs-3">
                                        Descripcion: <?php echo $_SESSION['carrito'][$parte]['descripcion']; ?></h5>
                                        <p class="card-title fs-3">Precio:
                                            <?php echo $_SESSION['carrito'][$parte]['precio']; ?> </p>
                                        <p class="card-title fs-3">Cantidad:
                                            <?php echo $_SESSION['carrito'][$parte]['cantidad']; ?> </p>
                                        <p class="fw-bold fs-3 text-gray-100" style="color: var(--main)"><i
                                                class='bx bx-map'></i>Entrega en sucursal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6 sticky sticky-top" style="top:150px !important;">
                <div class="container">
                    <form action="">
                        <div class="row p-4">
                            <div class="col">
                                <div class="p-2">
                                    <table class="table text-stard fs-3 p-4 table-striped">
                                        <thead>
                                            <tr class="">
                                                <th scope="col">parte</th>
                                                <th scope="col">cantidad</th>
                                                <th scope="col">descuento</th>
                                                <th scope="col">iva</th>
                                                <th scope="col">valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($_SESSION['carrito'] as $parte => $row):   ?>
                                            <tr class="p-2 m-2">
                                                <td><?php echo $_SESSION['carrito'][$parte]['descripcion']; ?></td>
                                                <td><?php echo $_SESSION['carrito'][$parte]['cantidad']; ?></td>
                                                <td>0%</td>
                                                <td>19%</td>
                                                <td><?php echo $_SESSION['carrito'][$parte]['precio']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php
                                             $valores = valor_pagar();
                                            ?>

                                            <tr class="">
                                                <td>Total</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>$ <?php echo get_total();?></td>
                                            </tr>
                                            <tr class="">
                                                <td>Total + descuentos</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>$ <?php echo get_total(); ?></td>

                                            </tr>
                                            <tr class="fw-semibold">
                                                <td>Total + inpuestos</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>$ <?php echo get_total_iva(); ?></td>

                                            </tr>
                                        </tbody>

                                    </table>
                                    <div class="pt-2 fs-3">
                                        <label class="form-check-label fw-semibold" for="flexCheckDefault">
                                            Información para el domicilio
                                        </label>
                                        <p>El domicilio es totalmente gratis, los envios a nivel nacional se realizan
                                            con SERVIENTREGA y tiene un exedente en el costo dependiendo el peso de la
                                            mercancia, aplica TYC</p>
                                    </div>
                                    <input type="text" class="fs-4 pt-2" style="width: 100%" placeholder='direccion:'>
                                    <hr>
                                    <input type="text" class="fs-4 pt-2" placeholder='Telefono:'>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="p-4">
                            <p class="text-center">La pasarela de pagos se añadira proximamente</p>

                        </div>
                    </form>
                </div>




            </div>
        </div>

        <br><br>
        <br><br><br>
    </div>
</section>
<style>
.container form,
.carrito .card {
    width: 100%;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col {
    flex: 1 1 250px;
}

.container form .row .col .title {
    font-size: 20px;
    color: #333;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.container form .row .col .inputBox {
    margin: 15px 0;
}

.container form .row .col .inputBox span {
    margin-bottom: 10px;
    display: block;
}

.container form .row .col .inputBox input {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;
}

.container form .row .col .inputBox input:focus {
    border: 1px solid #000;
}

.container form .row .col .flex {
    display: flex;
    gap: 15px;
}

.container form .row .col .flex .inputBox {
    margin-top: 5px;
}

.container form .row .col .inputBox img {
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: var(--main);
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
}

.container form .submit-btn:hover {
    background: #2ecc71;
}
</style>
<br><br><br><br><br><br><br>
<?php include'./includes/components/footer.php';?>