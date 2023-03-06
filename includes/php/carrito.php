<?php

session_start();

if (isset($_POST['guardar'])) {
$parte = $_POST['parte'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];

if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = array();
}

if (array_key_exists($parte, $_SESSION['carrito'])){
    $_SESSION['carrito'][$parte]['cantidad'] += $cantidad;
}else{
    $_SESSION['carrito'][$parte] = array(
    'parte'=>$parte,'descripcion'=>$descripcion, 'stock'=>$stock, 'precio'=>$precio, 'cantidad'=>$cantidad , 'imagen'=>$imagen
    );
}
};

function total_cantidad(){
    $contador = count($_SESSION['carrito']);
    return $contador;
};
function get_total(){
    $total = 0;
    foreach ($_SESSION['carrito'] as $item) {
      $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
    }
    return number_format($total, 0, '.', '.');
};
function get_total_iva(){
    $total = 0;
    foreach ($_SESSION['carrito'] as $item) {
      $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
    }
    $iva = $total*0.19;
    $total = $total + $iva;
    return number_format($total, 0, '.', '.');
};

function valor_pagar(){
    $total = 0;
    foreach ($_SESSION['carrito'] as $item) {
      $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
    }
    $iva = $total*0.19;
    $base = $total;
    $total = $total + $iva;
    $valores = array(
        'total' => $total,
        'iva' => $iva,
        'base' => $base,
        'descuento' => 0
    );
    return $valores;
};
?>