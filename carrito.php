<?php include'./includes/components/header.php';?>

<style>
.bg-dark {
    background-color: #2c3b6d !important;
}
</style>

<br><br><br><br>
<section class="bg-gray">
<br><br><br><br><br>
    <div class="container carrito">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./image/base.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mx-auto p-4">
                                <h2 class="card-title fs-3">Nombre del Articulo</h5>
                                    <p class="card-title fs-3">Precio: $Valor </p>
                                    <p class="card-title fs-3">Cantidad: 3 </p>
                                    <p class="fw-bold fs-3 text-gray-100" style="color: var(--main)"><i
                                            class='bx bx-map'></i>Entrega en sucursal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./image/base.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mx-auto p-4">
                                <h2 class="card-title fs-3">Nombre del Articulo</h5>
                                    <p class="card-title fs-3">Precio: $Valor </p>
                                    <p class="card-title fs-3">Cantidad: 3 </p>
                                    <p class="fw-bold fs-3 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./image/base.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mx-auto p-4">
                                <h2 class="card-title fs-3">Nombre del Articulo</h5>
                                    <p class="card-title fs-3">Precio: $Valor </p>
                                    <p class="card-title fs-3">Cantidad: 3 </p>
                                    <p class="fw-bold fs-3 text-success" style="color: var(--main)"><i
                                            class='bx bx-package'></i>Envio gratis</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-4" style="max-width: 600px;">
                    <h2 class="card-title fs-1 text-center">Costo total $VALOR</h5>
                        <p class="card-title fs-3 text-center">Cantidad de items: 3 </p>
                </div>

            </div>
            <div class="col-md-6 sticky">
                <div class="container">
                    <form action="">
                        <div class="row p-4">

                            <div class="col">

                                <h3 class="title">billing address</h3>

                                <div class="inputBox">
                                    <span>full name :</span>
                                    <input type="text" placeholder="john deo">
                                </div>
                                <div class="inputBox">
                                    <span>email :</span>
                                    <input type="email" placeholder="example@example.com">
                                </div>
                                <div class="inputBox">
                                    <span>address :</span>
                                    <input type="text" placeholder="room - street - locality">
                                </div>
                                <div class="inputBox">
                                    <span>city :</span>
                                    <input type="text" placeholder="mumbai">
                                </div>

                                <div class="flex">
                                    <div class="inputBox">
                                        <span>state :</span>
                                        <input type="text" placeholder="india">
                                    </div>
                                    <div class="inputBox">
                                        <span>zip code :</span>
                                        <input type="text" placeholder="123 456">
                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <h3 class="title">payment</h3>

                                <div class="inputBox">
                                    <span>cards accepted :</span>
                                    <img src="./image/card_img.png" alt="">
                                </div>
                                <div class="inputBox">
                                    <span>name on card :</span>
                                    <input type="text" placeholder="mr. john deo">
                                </div>
                                <div class="inputBox">
                                    <span>credit card number :</span>
                                    <input type="number" placeholder="1111-2222-3333-4444">
                                </div>
                                <div class="inputBox">
                                    <span>exp month :</span>
                                    <input type="text" placeholder="january">
                                </div>

                                <div class="flex">
                                    <div class="inputBox">
                                        <span>exp year :</span>
                                        <input type="number" placeholder="2022">
                                    </div>
                                    <div class="inputBox">
                                        <span>CVV :</span>
                                        <input type="text" placeholder="1234">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <input type="submit" value="Realizar pago" class="submit-btn">

                    </form>

                </div>
            



            </div>
        </div>
        
        <br><br>
        <br><br><br>
    </div>
</section>
<style>
.container form , .carrito .card {
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

<?php include'./includes/components/footer.php';?>