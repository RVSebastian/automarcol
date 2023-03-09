<?php include'./includes/components/header.php';?>

<style>
.carousel-cell {
    width: 100%;
    counter-increment: carousel-cell;
    border-radius: 15px;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
}

/* cell number */
.carousel-cell:before {
    display: inline;
}

.carousel-nav .carousel-cell {
    height: 9rem;
    width: 100px;
    margin: 1rem;
    margin-bottom: 0.3rem;
    display: table;
    border-radius: 30px;

}

.carousel-nav .carousel-cell.is-nav-selected {
    opacity: .6;
    border-radius: 100px
}

.accordion-button:not(.collapsed) {
    color: white !important;
    background-color: var(--main) !important;
    fill: white !important;
}

.bg-carro {
    background-image: url('./image/expedition.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    filter: onblur('100%');
}
</style>
<br><br><br><br>
<style>
.carousel-cell {
    width: 100%;
}

.otro p,
span {
    background-color: transparent !important;
}

.recuadro {
    border-radius: 50px;
}

.peugeot .logo-marca {
    width: 12rem;
    padding: 10px;
}

.bg-dark {
    background-color: #2c3b6d !important;
}

.otro img {
    float: left !important;
    padding: 3px;
}
</style>
<?php

$modelo = $_GET['parte'];
$marca = strtoupper($_GET['marca']);

switch ($marca) {
        case 'REPUESTOS FORD':
            $url = 'https://apiautomarcol.up.railway.app/api/ford/rep';
            break;
        case 'REPUESTOS BAJAJ':
            $url = 'https://apiautomarcol.up.railway.app/api/bajaj/rep';
            break;
        case 'REPUESTOS PEUGEOT':
            $url = 'https://apiautomarcol.up.railway.app/api/peugeot/rep';
            break;
        case 'REPUESTOS FOTON':
            $url = 'https://apiautomarcol.up.railway.app/api/foton/rep';
            break;
        case 'REPUESTOS MULTIMARCAS FCA':
            $url = 'https://apiautomarcol.up.railway.app/api/fca/rep';
            break;
        default:
            $url = 'https://apiautomarcol.up.railway.app/api/ford/rep';
            break;
    };
    
    $peticion = file_get_contents($url);
    $datos = json_decode($peticion, true);
    $data =  $datos[0];


$filtro = array_filter($data, function($array) use ($modelo){
    if (str_contains($array['Parte'], $modelo)) {
        return $array;
    }
    });
$data = $filtro;
?>

<?php foreach (array_slice($data, 0, 1) as $datos) { 
    $imagenes = json_decode($datos['collage_img'],true);
?>
<section class="bg-gray">
    <br><br><br>
    <div class="container-md bg-white rounded p-4">
        <div class="row p-4">
            <div class="col-md-6 p-4">
                <div class="carousel carousel-main"
                    data-flickity='{"contain": true, "prevNextButtons": true, "pageDots": false}'>
                    <?php 
                    if (!empty($imagenes['img1'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img1'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img2'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img2'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img3'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img3'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img4'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img4'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img5'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img5'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                </div>
                <div class="carousel carousel-nav"
                    data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": false }'>
                    <?php 
                    if (!empty($imagenes['img1'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img1'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img2'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img2'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img3'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img3'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img4'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img4'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                    <?php 
                    if (!empty($imagenes['img5'])) {
                    ?>
                    <div class="carousel-cell"> <img class="img-fluid" style="height: 100%; width: 100%"
                            src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $imagenes['img5'];?>"
                            alt=""></div>
                    <?php 
                    }
                    ?>
                </div>

            </div>

            <div class="col-md-6 p-4 pt-0 ml-4">
                <div class="bg-light rounded p-4 mb-4 mt-4">
                    <h1 class="fs-1"><?php echo $datos['Descripcion'];?></h2>
                        <p class="fs-4 pt-2 text-justify">
                            En stock <span class="fw-bold"
                                style="color: var(--main)"><?php echo $datos['existencia'];?></span>
                        </p>
                        <h1 class="fs-1 fw-bold" style="color: var(--main)"><?php echo $datos['Costo$'];?></h1>
                        <button class="btn btn-dark fs-2 p-2" id="añadirc"><i
                                class='bx bx-shopping-bag bx-tada mx-2'></i> Añadir al
                            carrito </button>
                </div>
                <div class="bg-light rounded p-4 mb-4 mt-4 otro">
                    <h1 class="fs-2 text-muted">Detalle del articulo</h1>
                    <p class="fs-4 pt-2">
                        Todos los repuestos por parte de AUTO MARCOL S.A.S tienen garantía si está es instalada por
                        medio de nuestros talleres autorizados en la ciudad de Cúcuta, Norte de Santander, contaran
                        con un año de garantía en sitio, si se instala por otro medio a este contara con 6 meses de
                        vigencia en su garantía sujeta a revisión.

                    </p>
                    <p class="fs-4">
                        Tenemos disponibilidad en taller con horarios de 8-12 am y 2-6 pm y puedes apartar tu cita
                        por medio de nuestro personal de atención al cliente <span
                            style="color: #2D5EC6;">3157006633</span> o <span style="color: #2D5EC6;">
                            contactcenter@automarcol.com</span>
                    </p>
                </div>
                <div class="bg-light rounded  p-4 mb-4 mt-4">
                    <h1 class="fs-2 text-muted">Información de la tienda</h2>

                        <h3 class="p-2"><i class='bx bx-time-five'></i> Horario de atención
                    </h1>
                    <p class="fs-4">Lunes a Domingo</p>
                    <h3 class="p-2"><i class='bx bxs-map'></i> Ubicación del articulo</h1>
                        <p class="fs-4 pl-4"> Zona Franca, Av. Libertadores #2-160, Cúcuta</p>

                </div>
                <h3 class="p-4 text-center text-muted"><i class="fas fa-shield-alt"></i>¿Necesitas ayuda? Llámanos al
                    +57 3222863938</h2>
            </div>

        </div>
        <input type="hidden" id="parte" value="<?php echo $datos['Parte'] ?>">
        <input type="hidden" id="existencia" value="<?php echo $datos['existencia'] ?>">
        <input type="hidden" id="costo" value="<?php echo $datos['Costo$'] ?>">
        <input type="hidden" id="desc" value="<?php echo $datos['Descripcion'] ?>">
        <input type="hidden" id="imagen" value='<?php echo json_encode($imagenes)?>'></input>
    </div>
</section>
<?php } ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $("#añadirc").click(function() {
        const parte = document.getElementById("parte").value;
        const stock = document.getElementById("existencia").value;
        const precio = document.getElementById("costo").value;
        const descripcion = document.getElementById("desc").value;
        const imagen = document.getElementById("imagen").value;
        swal({
            title: 'Confirmacion',
            text: 'Estas comprando ' + descripcion + ' con un costo de ' + precio +
                ' la unidad',
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                catch: {
                    id: "comprar",
                    text: "Comprar",
                    value: "true",
                },
            },

            content: {
                element: "input",
                attributes: {
                    id: "cantidad",
                    placeholder: "Escribe la cantidad a comprar",
                    type: "number",
                },
            },
        });
        $(".swal-button--catch").click(function() {
            var cantidad = document.getElementById("cantidad").value;
            if (cantidad > stock) {
                swal({
                    title: 'Advertencia',
                    text: 'Este Articulo tiene un stock de '+ stock + ' , por favor añade un valor dentro de dicha cantidad',
                    icon: "error",
                    buttons: {
                        cancel: "Cancelar",
                        catch: {
                            id: "comprar",
                            text: "Comprar",
                            value: "true",
                        },
                    },

                    content: {
                        element: "input",
                        attributes: {
                            id: "cantidad",
                            placeholder: "Escribe la cantidad a comprar",
                            type: "number",
                        },
                    },
                });
            } else {
                $.ajax({
                    type: "POST",
                    url: "./includes/php/carrito.php",
                    data: {
                        parte,
                        descripcion,
                        stock,
                        cantidad,
                        precio,
                        imagen,
                        guardar: 'true',
                    }
                }).done(function(res) {
              
                });
            }
        });
    });
});
</script>


<?php include'./includes/components/comentarios.php';?>
<?php include'./includes/components/footer.php';?>