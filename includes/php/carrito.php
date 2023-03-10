<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_POST['eliminar'])) {
  $producto = $_POST['eliminar'];
  unset($_SESSION['carrito'][$producto]);
}
if (isset($_POST['editar'])) {
  $producto = $_POST['editar'];
  $cantidad = $_POST['cantidad'];
  $_SESSION['carrito'][$producto]['cantidad'] = $cantidad;
}
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
  if($cantidad > $stock){
    $_SESSION['carrito'][$parte]['cantidad'] = $stock;
  }else{
    $_SESSION['carrito'][$parte]['cantidad'] += $cantidad;
  }
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
function total_antes(){
  $total = 0;
  foreach ($_SESSION['carrito'] as $item) {
    $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
  }
  return number_format($total, 0, '.', '.');
};

function domicilio(){
  $cucuta = 10000;
  $nacional = 10000;
  if (isset($ref)) {
   return $cucuta + $nacional;
  }else{
    return $cucuta;
  }
}

// se añaden descuentos - inpuestos etc

function get_total(){
    $domicilio = domicilio();
    $total = total_antes();
    return $total;
};
function get_total_iva(){
    $domicilio = domicilio();
    $total = 0;
    foreach ($_SESSION['carrito'] as $item) {
      $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
    }
    $iva = $total*0.19;
    $pagar = $total+$domicilio + $iva;
    return number_format($pagar, 0, '.', '.');
};
function valor_pagar(){
    $total = 0;
    $domicilio = domicilio();
    foreach ($_SESSION['carrito'] as $item) {
      $total +=  floatval(preg_replace("/[^0-9]/", "", $item['precio'])) * $item['cantidad'];
    }
    $iva = $total*0.19;
    $base = $total+$domicilio;
    $pagar = $base + $iva;
    $valores = array(
        'total' => $pagar,
        'iva' => $iva,
        'base' => $base,
        'descuento' => 0
    );
    return $valores;
};

?>