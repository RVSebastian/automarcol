<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require'../../../includes/php/carrito.php';
?>
<div class="row p-4 bg-white shadow sticky-top">
    <div class="col">
        <div class="p-2">
            <table class="table text-stard fs-4 p-4 table-striped overflow-x-scroll">
                <thead>
                    <tr class="">
                        <th scope="col">parte</th>
                        <th scope="col" class="text-center">cantidad</th>
                        <th scope="col">valor unidad</th>
                        <th scope="col">valor total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['carrito'] as $parte => $row):   ?>
                    <tr class="p-2 m-2 text-justify">
                        <td><?php echo $_SESSION['carrito'][$parte]['descripcion']; ?></td>
                        <td class="text-center">
                            <?php echo $_SESSION['carrito'][$parte]['cantidad']; ?></td>
                        <td><?php echo $_SESSION['carrito'][$parte]['precio']; ?></td>
                        <td>
                            <?php 
                                                $detector = preg_replace('/[^0-9]/', '', $_SESSION['carrito'][$parte]['precio']);  
                                                $totallinea = $detector*$_SESSION['carrito'][$parte]['cantidad'];
                                                echo '$ '.number_format($totallinea, 2, '.', '.');
                                                ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php
                                             $valores = valor_pagar();
                                            ?>
                    <tr class="">
                        <td>Total Repuestos</td>
                        <td></td>
                        <td></td>
                        <td>$ <?php echo number_format($valores['base']-10000, 2, ',', '.'); ?>
                        </td>
                    </tr>
                    <tr class="">
                        <td>Descuentos</td>
                        <td></td>
                        <td></td>
                        <td>$ <?php echo number_format($valores['descuento'], 2, ',', '.'); ?>
                        </td>

                    </tr>
                    <tr class="">
                        <td>Impuestos</td>
                        <td></td>
                        <td></td>
                        <td>$ <?php echo number_format($valores['iva'], 2, ',', '.'); ?></td>

                    </tr>
                    <tr class="">
                        <td>Flete</td>
                        <td></td>
                        <td></td>
                        <td>$ 10.000,00</td>

                    </tr>
                    <tr class="fw-semibold">
                        <td>Total a Pagar</td>
                        <td></td>
                        <td></td>
                        <td>$ <?php echo get_total_iva(); ?></td>
                    </tr>
                </tbody>

            </table>
            <div class="pt-2 fs-3">
                <p>Ademas puedes contactar a nuestros especialistas de repuestos para
                    cotizaciones y ventas al siguiente numero +57 311 8300239</p>
                <label class="form-check-label fw-semibold" for="flexCheckDefault">
                    Información para el domicilio
                </label>
                <p>El domicilio es totalmente gratis, los envios a nivel nacional se realizan
                    con SERVIENTREGA y tiene un exedente en el costo dependiendo el peso de la
                    mercancia, aplica TYC</p>
            </div>
            <input type="text" class="fs-4 pt-2" style="width: 100%" placeholder='direccion:'>
            <hr>
            <input type="text" class="fs-4 pt-2" placeholder='Telefono:'>
            <hr>
        </div>
    </div>
</div>

<div class="p-4">
    <p class="text-center">La pasarela de pagos se añadira proximamente</p>

</div>