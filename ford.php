<?php include'./includes/components/header.php';?>

<p id="home"></p>
<?php include'./includes/components/carrousel/encabezado.php';?>
<section class="bg-gray pt-0 mt-0" id="vehiculos">
    <?php include'./includes/components/vehiculos/card.php';?>
</section>
<?php include'./includes/components/carrousel/encabezado2.php';?>
<section class="bg-gray pt-0 mt-0" id="vehicles">
    <?php include'./includes/components/vehiculos/peugeot.php';?>
</section>

<?php include'./includes/components/repuestos/card.php';?>

<?php include'./includes/components/anuncios/reviews.php';?>
<?php include'./includes/components/contact.php';?>
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
<section class="">
    <div class="container">
        <h2 class="fs-1 fw-bold text-uppercase p-4 pl-0">Seleciona tu marca de preferencia</h2>
        <div class="row gy-4">
            <div class="col-md-4">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l2.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
        </div>
        <h2 class="fs-1 fw-bold text-uppercase p-4 pl-0">Nuestras Sedes</h2>
        <div class="row gy-4">
            <div class="col-md-4">
                <img src="./image/l1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l2.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 ">
                <img src="./image/l2.webp" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bg-gray" id="pqr">
    <div class="row">
        <div class="text-center p-4">
            <h2 class="fs-1 fw-bold"><i class='bx bx-check-shield'></i></h2>
            <h2>Formulario de Peticiones, Quejas y Reclamos (PQR)</h2>
            <h2 class="fs-3 text-muted">Para nosotros es muy importante conocer tu opinión, completa los siguientes
                campos y pronto nos
                pondremos en
                contacto contigo.</h2>
        </div>
        <div class="col-sm-12 col-md-6 bg-white p-4 fs-3 shadow rounded mx-auto formulario">
            <form class="p-2 m-2">
                <div class=" rounded p-4 mb-2">
                    <h2 class="text-center text-muted">Informacion del cliente</h2>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputtext1" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Numero de documento</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Numero de contacto</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                </div>
                <div class=" rounded p-4 pt-2">
                    <h2 class="text-center text-muted">Informacion del caso</h2>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputtext1" class="form-label">Tipo de solicitud</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">¿Donde se presento el evento?</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Fecha del evento</label>
                        <input type="text" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-check form-switch m-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Autorizo el tratamiento de mis datos
                        personales
                    </label>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-dark fs-2" type="button">Generar PQR</button>
                </div>
            </form>
        </div>
    </div>
</section>



<?php include'./includes/components/footer.php';?>