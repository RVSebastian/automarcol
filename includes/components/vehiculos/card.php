<style>
.vehicle:hover img {
    -webkit-transform: rotate(1deg) scale(1.4);
    transform: scale(1.1);
    -webkit-transition: .6s ease-in-out;
    transition: .6s ease-in-out;
}

figure {
    overflow: hidden;
    margin: 0;
}

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
    background-color: #616161 !important;
}

.vehiculosc .card {
    border-radius: 25px !important;
}

.fondo-marca,
.text-muted {
    color: white !important;
    letter-spacing: 1px;
}
</style>

<div class="container vehiculosc tagline animation_repuestos">
    <div class="row gx-4 gy-5">
        <?php
            foreach ($data as $datos){
            ?>
        <?php 
              if ($datos['PresentationIMG'] !='') {
            ?>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card rounded vehicle carousel-cells m-4 shadow border-0 mx-auto animation_repuestos"
                style="width: 30rem;">
                <figure class="" style="height: 22rem; width: 100%">
                    <img src="./dashboard/galery/<?php echo $datos['Version_DescipcionModelo'];?>/<?php echo $datos['PresentationIMG'];?>"
                        class="img-fluid" style="display: block; margin: auto;">
                    <a href="./detalle?marca=<?php echo $datos['Marca'];?>&modelo=<?php echo $datos['Version_DescipcionModelo'];?>"
                        class="stretched-link"></a>
                </figure>
                <div class="mt-0 pt-0">
                    <div class="p-4 pt-0 fondo-marca">
                        <div class="row  align-items-center" style="text-transform: uppercase;">
                            <h1 class="fs-4 px-4 pt-4 text-bold text-center"><?php echo $datos['Version_DescipcionModelo'];?></h1>
                            <div class="col-6">
                                <p class="fs-5 m-0 mb-4 text-muted"><i
                                        class="fas fa-gas-pump m-2"></i><?php echo $datos['Combustible'];?></p>
                                <p class="fs-5 m-0 mb-4 text-muted"><i
                                        class="fas fa-tachometer-alt m-2"></i>Cilindraje
                                    <?php echo $datos['Cilindraje'];?></p>
                            </div>
                            <div class="col-6">
                                <p class="fs-5 m-0 mb-4 text-muted"><i class="fas fa-cogs m-2"></i>Traccion
                                    <?php echo $datos['Traccion'];?></p>
                                <p class="fs-5 m-0 mb-4 text-muted"><i class="fas fa-car m-2"></i>Modelo
                                    <?php echo $datos['Ano_Modelo'];?></p>
                            </div>
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