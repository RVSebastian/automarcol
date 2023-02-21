<?php 
 $marcas = array(
    "ford", "bajaj", "foton", "fca", "peugeot"
);
for ($i = 0; $i <= 4; $i++) {
    $url = 'https://apiautomarcol.up.railway.app/api/fca/rep';
    $datos = file_get_contents($url);
    $buscador = json_decode($datos, true);
    if ($i != 0) {
        $almacenador=array_merge($almacenador,$buscador);
    }else{
        $almacenador=$buscador;
    }
};
$data =  $almacenador[0];
$_SESSION['data'] = $data;
include'./card.php';

?>