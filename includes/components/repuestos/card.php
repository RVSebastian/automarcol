<div class="row justify-content-center">
<?php
foreach ($data as $datos){
?>
<div class="col-md-3 col-sm-6 animation_repuestos">
    <div class="card rounded shadow rounded-3 repuestos border-0 m-sm-4 m-md-4">
        <figure class="rounded rounded-3"> <img
                src="./dashboard/galery/<?php echo $datos['Parte'];?>/<?php echo $datos['presentation_img'];?>"
                class='img-fluid mx-auto d-block rounded rounded-3' onerror="this.onerror=null;this.src='https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-collection-1_large.png?format=jpg&quality=90&v=1530129113';"></figure>
        <div class="card-body bg-light">
            <p class="trepuestos t-d p-2 pb-0 pt-0"><?php echo $datos['Descripcion'];?></p>
            <h3 class="fs-2 fw-bold p-2 pt-0 pb-0" style="color: var(--main)">
                <?php echo $datos['Costo$'];?></h1>
                <p class="text-muted p-2 pt-0 pb-0">Precio estimado</p>
                <p class="p-2 pt-0 pb-0 d"> <i class='bx bx-package'></i><?php echo $datos['existencia'];?>
                    Disponibles
                </p>
                <p class="text-muted p-2 pb-0 pt-0"><i class='bx bx-purchase-tag'></i><?php echo $datos['Marca'];?>
                </p>
                <a href="./repuestos?parte=<?php echo $datos['Parte'];?>&marca=<?php echo $datos['Marca'];?>"
                    class="stretched-link"></a>
        </div>
    </div>
</div>
<input type="hidden" id='prueba' value='<?php echo floatval(preg_replace("/[^0-9]/", "", $datos['Costo$'])); ?>'>
<?php
}
?>
</div>