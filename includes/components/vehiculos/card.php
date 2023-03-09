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
    background-color: #162133 !important;
}

.Bajaj .fondo-marca {
    background-color: var(--main) !important;
}

.Foton .fondo-marca {
    background-color: #162133 !important;
}

.Fca .fondo-marca {
    background-color: #162133 !important;
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
        <div class="col-sm-6 col-md-4 col-lg-4 mb-2">
            <div class="card rounded vehicle carousel-cells m-4 shadow border-0 mx-auto animation_repuestos"
                style="width: 31rem;">
                <figure class="rounded-top" style="height: 25rem; width: 100%; background-color: transparent;">
                    <img src="./dashboard/galery/<?php echo $datos['Version_DescipcionModelo'];?>/<?php echo $datos['PresentationIMG'];?>"
                        class="img-fluid" style="display: block; margin: auto; height: 100%; width: 100%;"
                        onerror="this.onerror=null;this.src='https://autonal.com/wp-content/uploads/2021/07/placeholder-image-300x300.jpg';">
                    <a href="./detalle?marca=<?php echo $datos['Marca'];?>&modelo=<?php echo $datos['Version_DescipcionModelo'];?>"
                        class="stretched-link"></a>
                </figure>

                <div class="mt-0 pt-0">
                    <div class="p-4 pt-0 fondo-marca">
                        <div class="row align-items-stard" style="text-transform: uppercase;">
                            <h1 class="fs-4 px-4 pt-4 text-bold text-center">
                                <?php echo $datos['Version_DescipcionModelo'];?></h1>
                            <div class="col-7">
                                <div class="mb-4">
                                    <p class="fs-5 m-0 mb-0 text-muted"><i
                                            class="fas fa-gas-pump m-2"></i><?php echo $datos['Combustible'];?></p>
                                    <p class="text-muted">Combustible</p>
                                </div>
                                <div class="mb-4">
                                    <p class="fs-5 m-0 mb-0 text-muted"><i class="fas fa-tachometer-alt m-2"></i>
                                        <?php echo $datos['Cilindraje'];?></p>
                                    <p class="text-muted">Cilindraje</p>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-4">
                                    <p class="fs-5 m-0 mb-0 text-muted"><i class="fas fa-cogs m-2"></i>
                                        <?php echo $datos['Traccion'];?></p>
                                    <p class="text-muted">Traccion</p>
                                </div>
                                <div class="mb-4">
                                    <p class="fs-5 m-0 mb-0 text-muted"><i class="fas fa-car m-2"></i>
                                        <?php echo $datos['Ano_Modelo'];?></p>
                                    <p class="text-muted">Año Modelo</p>
                                </div>


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