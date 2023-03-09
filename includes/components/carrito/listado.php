<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
$contador = count($_SESSION['carrito']);
if ($contador == 0) {
                    echo '
                    <div style="margin: 0 auto"> 
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_m3mzsgwp.json"  background="transparent"  speed="1"  style="width: 50rem; height: 50rem;"  loop  autoplay></lottie-player>
                    <p class="p-2 text-center fs-4 fw-semibold">Aun no tienes nada en tu carrito</p>
                    </div>
                    ';
}
foreach ($_SESSION['carrito'] as $parte => $row):   
$objet = json_decode($_SESSION['carrito'][$parte]['imagen']);
?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<div class="card border-0 mb-3 animate__animated animate__bounce">
    <div class="row g-0">
        <div class="col-md-4">
            <div class="carousel carousel-main"
                data-flickity='{"contain": true, "prevNextButtons": false, "pageDots": false}'>
                <?php 
                    if (!empty($objet->img1 . PHP_EOL )) {
                    ?>
                <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                        onerror="this.style.display='none'"
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
                        onerror="this.style.display='none'"
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
                        onerror="this.style.display='none'"
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
                        onerror="this.style.display='none'"
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
                        onerror="this.style.display='none'"
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
                <h2 class="card-title fs-3">Codigo: <?php echo $parte = $_SESSION['carrito'][$parte]['parte'];?>
                    </h5>
                    <h2 class="card-title fs-3">
                        Descripcion: <?php echo $_SESSION['carrito'][$parte]['descripcion']; ?></h5>
                        <p class="card-title fs-3">Precio:
                            <?php echo $_SESSION['carrito'][$parte]['precio']; ?> </p>
                        <p class="card-title fs-3">
                            Cantidad:
                            <select class="form-select fs-3" style="width: 15%" id="selected"
                                onchange="test(parte='<?php echo $parte?>',value=this.options[this.selectedIndex].value);">
                                <option selected hidden value="0">
                                    <?php echo $_SESSION['carrito'][$parte]['cantidad'];?></option>
                                <option class="bg-danger text-white" onclick="test();">0 -
                                    Eliminar</option>
                                <?php $cantidad = $_SESSION['carrito'][$parte]['stock']; 
                                                for ($i=1; $i <= $cantidad; $i++) { 
                                                    echo '<option value="'.$i.'" id="change" value="'.$i.'">'.$i.'</option>';
                                                };
                                                ?>
                            </select>
                        </p>
                        <p class="fw-bold fs-3 text-gray-100" style="color: var(--main)"><i
                                class='bx bx-map'></i>Entrega a domicilio</p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>