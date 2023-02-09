<?php include'./includes/components/header.php';?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // inicimoas la session nuevamente
?>
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
    object-fit: contain;
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

.otro img {
    float: left !important;
    width: 50%;
    padding: 3px;
}

.ql-video {
    width: 100%;
    height: 50rem;
}

@media (max-width: 400px) {
    .modelo {
        font-size: 10px;
    }
}

@media (max-width: 800px) {
    .modelo {
        font-size: 20px;
    }
}

@media (max-width: 3000px) {
    .modelo {
        font-size: 60px;
    }
}
</style>
<br>

<?php foreach (array_slice($data, 0, 1) as $datos) { ?>
<section class="bg-gray pt-5 mt-5">
    <div class="container wl animate__animated animate__slideInDown animate__delay-1s animate__slow"
        style="padding-top: 5rem;">
        <div class="position-relative">
            <div class="position-absolute top-50 end-0 p-4 text-white wall">
                <h2 class="p-0 m-0"><?php echo $datos['Marca']?></h2>
                <h1 class="pb-0 mb-0 modelo"><?php echo $datos['Version_DescipcionModelo']?></h1>
                <h1 class="fs-1 fw-bold" style="font-size: 70px;"><?php echo $datos['CostoTotal']?></h1>
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
    <div class="container rounded-3 bg-white animate__animated animate__slideInUp animate__delay-1s animate__slow">
        <div class="p-5 bg-white">
            <div class="row text-md-center text-sm-start">
                <div class="col-md-3 col-sm-5 border-md-end border-sm-bottom border-2">
                    <h1>Kilometraje</h1>
                    <h2 class="text-dark m-0 fw-bold mb-4">0</h2>
                </div>
                <div class="col-md-3 col-sm-5  border-md-end border-sm-bottom border-2">
                    <h1>Estado</h1>
                    <h2 class="text-dark m-0 fw-bold mb-4">Nuevo</h2>
                </div>
                <div class="col-md-3 col-sm-6  border-md-end border-sm-bottom border-2">
                    <h1>Transmisión</h1>
                    <h2 class="text-dark m-0 fw-bold mb-4">Automático</h2>
                </div>
                <div class="col-md-3 col-sm-6 border-2">
                    <h1>Numero de Puertas</h1>
                    <h2 class="text-dark m-0 fw-bold mb-4"><?php echo $datos['Puertas']?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray pt-0 mt-0 animate__animated animate__slideInUp animate__delay-1s animate__slow">
    <div class="container-md md-p-4">
        <div class="row justify-content-center sm-p-2 pt-1 pb-0">
            <div class="col-md-9 md-p-5 pt-0">
                <div class="bg-white pt-4 p-5">
                    <div class="row ">
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
                    <input type="hidden" id="marca" value='<?php echo $datos['Marca']?>'>
                    <div class="pt-3 otro">
                        <?php echo $datos['Otro']?>
                    </div>

                </div>

                <div class="galery rounded pt-5">
                    <div class="row gy-3 ">
                        <?php 
                        $imagenes = json_decode($datos['CollageIMG'],true);
                        $indice = 0;
                        foreach ($imagenes as $key) {
                            $indice++;
                        ?>
                        <div class="col-md-3 col-6">
                            <figure class='rounded'>
                                <img src="./dashboard/galery/<?php echo $datos['Version_DescipcionModelo'].'/'.$imagenes['img'.$indice]?>"
                                    class='img-fluid mx-auto d-block rounded'>
                            </figure>
                        </div>
                        <?php    }?>

                    </div>

                </div>

            </div>
            <?php 
            if ($marca == 'FORD') {
                include'./includes/php/cotiza.php';
            }else{
                include'./includes/php/cotiza.php';
            }
            ?>
        </div>


</section>

<?php } ?>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
    integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>



<?php include'./includes/components/footer.php';?>