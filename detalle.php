<?php include'./includes/components/header.php';?>
<?php include'./dashboard/includes/cn.php';?>
<?php 
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$data = $_SESSION['data'];
$filtro = array_filter($data, function($array) use ($modelo){
    if (str_contains($array['Version_DescipcionModelo'], $modelo)) {
        return $array;
    }
    });
$data = $filtro;

?>

<style>
figure {
    overflow: hidden;
}

.galery img:hover {
    -webkit-transform: rotate(3deg) scale(1.2);
    transform: rotate(3deg) scale(1.2);
    -webkit-transition: 1s ease-in-out;
    transition: 1s ease-in-out;
}

.img-thumbnail {
    border: 0;
    margin: 10px;
    padding: 0;
}

.bg-dark {
    background-color: #2c3b6d !important;
}

.fs-2 {
    color: var(--main) !important;

}

input,
select {
    padding: 6px !important;
    border: 0 !important;
    font-size: 15px !important;
    background-color: #EBEDEF !important;
}

.ch {
    background-color: var(--main) !important;
}

.text-dark {
    color: var(--main) !important;
}
</style>
<br>

<?php foreach (array_slice($data, 0, 1) as $datos) { ?>
<section class="bg-gray pt-5 mt-5">
    <div class="container wl animate__animated animate__slideInDown animate__delay-1s animate__slow">
        <div class="position-relative">
            <div class="position-absolute top-50 end-0 p-4 text-white wall">
                <h2 class="p-0 m-0"><?php echo $datos['Marca']?></h2>
                <h1 style="font-size:60px" class="pb-0 mb-0"><?php echo $datos['Version_DescipcionModelo']?></h1>
                <h1 class="fs-1 fw-bold" style="font-size: 70px;">$<?php echo $datos['CostoTotal']?></h1>
                <a href="https://web.whatsapp.com/send?phone=573222863938" class="btn btn-success fs-3"><i
                        class="fab fa-whatsapp"></i> Contactar a un Asesor</a>
            </div>
            <img src="./dashboard/galery/<?php echo $datos['Version_DescipcionModelo'].'/'.$datos['CarrouselIMG']?>"
                class="img-fluid shadow rounded rounded-4" alt=""
                style="background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.131) 19%, rgba(0, 0, 0, 0.2295) 34%, rgba(0, 0, 0, 0.309) 47%, rgba(0, 0, 0, 0.361) 56.5%, rgba(0, 0, 0, 0.403) 65%, rgba(0, 0, 0, 0.437) 73%, rgba(0, 0, 0, 0.4625) 80.2%, rgba(0, 0, 0, 0.479) 86.1%, rgba(0, 0, 0, 0.4895) 91%, rgba(0, 0, 0, 0.496) 95.2%, rgba(0, 0, 0, 0.499) 98.2%, rgba(0, 0, 0, 0.5) 100%);">
        </div>
    </div>
</section>
<section class="bg-gray">
    <div class="container rounded-3 bg-white animate__animated animate__slideInUp animate__delay-1s animate__slow"
        style="background-color: #f7f7f7">
        <div class="p-5">
            <div class="row text-center">
                <div class="col-md-3 col-sm-5 border-md-end border-sm-bottom border-2">
                    <h1>Kilometraje</h1>
                    <h1 class="text-dark">0</h1>
                </div>
                <div class="col-md-3 col-sm-5  border-md-end border-sm-bottom border-2">
                    <h1>Estado</h1>
                    <h1 class="text-dark">Nuevo</h1>
                </div>
                <div class="col-md-3 col-sm-6  border-md-end border-sm-bottom border-2">
                    <h1>Transmisión</h1>
                    <h1 class="text-dark">Automático</h1>
                </div>
                <div class="col-md-3 col-sm-6 border-2">
                    <h1>Numero de Puertas</h1>
                    <h1 class="text-dark"><?php echo $datos['Puertas']?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray pt-0 mt-0 animate__animated animate__slideInUp animate__delay-2s animate__slow">
    <div class="container-md md-p-4">
        <div class="row sm-p-2 pt-5">
            <div class="col-md-8 md-p-5 pt-0">
                <div class="bg-white pt-4 p-4">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Marca</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Marca']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Modelo</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Ano_Modelo']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Línea</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Version_DescipcionModelo']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Clase</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Clase']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Combustible</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Combustible']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Cilindraje (motor)</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Cilindraje']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Tracción</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Traccion']?></h2>
                        </div>
                        <div class="col-md-3">
                            <p class="fs-2 m-0">Cojinería</p>
                            <h2 class="m-0 fw-bold mb-4"><?php echo $datos['Cojineria']?></h2>
                        </div>
                    </div>
                </div>


                <div class="galery rounded pt-2">
                    <div class="row gx-0 gy-0">
                        <?php 
                        $imagenes = $datos['CollageIMG'];
                        var_dump($imagenes['1']);
                        ?>
                        <div class="col-auto">
                            <figure>
                               
                            </figure>
                        </div>
                        <?php  ?>

                    </div>

                </div>
                <div class="bg-white p-5">
                    <?php echo $datos['Otro']?>
                </div>

            </div>


            <div class="col-md-4 p-4 pt-0 ml-4">
                <div class="sticky-top" style="top:11rem">
                    <div class="bg-white rounded-3 p-4 mb-4 mt-4">
                        <h1 class="fw-bold text-center fs-2">Cotiza tu <?php echo $datos['Version_DescipcionModelo']?>
                            </h2>
                            <form class="fs-4" method='POST' id='cotizador'>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombre" name='nombre'
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="correo" name='correo' required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Telefono Movil</label>
                                    <input type="number" class="form-control" id="telefono" name='telefono' required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input ch" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Acepto el tratamiento de mis
                                        datos personales</label>
                                </div>
                                <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed fs-3 bg-light text-black"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                Leer Terminos y condiciones
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body fs-4 text-muted text-justify bg-light"> De
                                                De Conformidad Con Lo Dispuesto En La Ley 1581 De 2012 Y El Decreto 1377
                                                De 2013, Declaro Que Entrego De Forma Libre Y Voluntaria Mis Datos
                                                Personales, Para Su Respectivo Tratamiento Por Parte De AUTOMARCOL SAS O
                                                Sus Empresas Aliadas (Descritas En La Política De Tratamiento De Datos
                                                Personales). La Autorización Expresa Se Circunscribe A Las Siguientes
                                                ﬁnalidades: Medir Niveles De Satisfacción, Informar Sobre Campañas De
                                                Servicio, Comunicar Campañas Promocionales, Realizar Encuestas, Realizar
                                                Recordatorio Para Mantenimientos, Ejecutar Campañas De Fidelización De
                                                Clientes, Enviar Invitaciones A Eventos, Rifas, Realizar Actualización
                                                De Datos, Invitar A Pruebas De Vehículos, Ofrecimiento De Productos Y
                                                Servicios, Comunicar Noticias De Sus Marcas Y De La Red De Ventas Y
                                                Servicios, Comunicar Información Relacionada Con Productos Para La
                                                ﬁnanciación En La Adquisición De Nuestros Bienes Y Servicios.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-dark fs-3" name='cotizor' type="submit">Solicitar
                                        Cotización</button>
                                </div>

                            </form>
                    </div>
                </div>

            </div>
        </div>


</section>

<?php } ?>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
    integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>



<?php include'./includes/components/footer.php';?>