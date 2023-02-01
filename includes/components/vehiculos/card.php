<style>
.vehicle {
    margin: 10px;
    margin-bottom: 10px;
    height: 36rem;
    background-color: white;
    width: 30rem;
}

.vehicle img {
    width: 100% !important;
    height: 16rem !important;
    margin-bottom: 50px;
}

.vehicle:hover img {
    -webkit-transform: rotate(1deg) scale(1.4);
    transform: scale(1.1);
    -webkit-transition: .6s ease-in-out;
    transition: .6s ease-in-out;
}

figure {
    overflow: hidden;
    margin-top: 10px;
    padding-top: 10px;
}

.vehicle .bg-dark {}

.Ford .fondo-marca {
    background-color: var(--main) !important;
}

.Peugeot .fondo-marca {
    background-color: #5D6D7E !important;
}

.Bajaj .fondo-marca {
    background-color: var(--main) !important;
}

.Foton .fondo-marca {
    background-color: #CCD1D1 !important;
}

.Fca .fondo-marca {
    background-color: gray !important;
}

.vehiculosc .card {
    border-radius: 25px !important;
}
.fondo-marca , .text-muted{
    color: white !important;
}
</style>

<div class="container vehiculosc tagline animation_repuestos">
    <div class="row g-4">
        <?php
            foreach ($data as $datos){
            ?>
            <?php 
              if ($datos['PresentationIMG'] !='') {
            ?>
        <div class="col-sm-12 col-lg-3">
            <div class="card rounded vehicle carousel-cells shadow border-0 mx-auto animation_repuestos">
                <figure class="card-img-top"> 
                    <img src="./dashboard/galery/<?php echo $datos['Version_DescipcionModelo'];?>/<?php echo $datos['PresentationIMG'];?>" class="img-fluid">
                </figure>
                <div class="container p-2 pt-4 pb-0">
                    <div class="position-relative">
                        <div class="position-absolute bottom-0" style='width: 100%'>
                            <div class="card-body p-2 fondo-marca text-center" style="border-radius: 20px 20px 0px 0px">
                                <h2 class="card-title fs-4"><?php echo $datos['Version_DescipcionModelo'];?></h2>
                            </div>
                        </div>
                    </div>
                    <a href="./detalle?marca=<?php echo $datos['Marca'];?>&modelo=<?php echo $datos['Version_DescipcionModelo'];?>" class="stretched-link"></a>
                </div>

                <div class="p-4 pt-4 fondo-marca">
                    <div class="row  align-items-center">
                        <div class="col-6">
                            <p class="fs-5 m-0 mb-4 text-bold text-muted"><i class="fas fa-gas-pump m-2"></i><?php echo $datos['Combustible'];?></p>
                            <p class="fs-5 m-0 mb-4 text-bold text-muted"><i class="fas fa-cogs m-2"></i>Traccion: <?php echo $datos['Traccion'];?></p>
                        </div>
                        <div class="col-6">
                            <p class="fs-5 m-0 mb-4 text-bold text-muted"><i class="fas fa-tachometer-alt m-2"></i>Cilindraje: <?php echo $datos['Cilindraje'];?></p>
                            <p class="fs-5 m-0 mb-4 text-bold text-muted"><i class="fas fa-car m-2"></i>Cojineria: <?php echo $datos['Cojineria'];?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
            }
            ?>
        <?php
            }
            ?>
    </div>

</div>

<script>
var elem = document.querySelector('.card-carrousel');
</script>