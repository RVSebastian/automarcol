<?php
include "../includes/cn.php";
include "../includes/alerts.php";
// subir pagos
     $url_insert = "../galery/Pagos";
     $usuario = $_POST['usuario'];
     $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
     $extension  = pathinfo( $_FILES["imagen1"]["name"], PATHINFO_EXTENSION ); // jpg
     $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
     $source       = $_FILES["imagen1"]["tmp_name"];
     $destination  = "../galery/pagos/{$basename}";
     move_uploaded_file( $source, $destination );
     $cuenta = $_POST['cuenta'];
     $valor = $_POST['valor'];
     $documentot = $_POST['documentot'];
     $nombret = $_POST['nombret'];
     $otro = $_POST['otro'];
     $query = "INSERT INTO pagos(cuenta, valor, nombret, documentot, otro, usuario, img, estado,fecha) 
     VALUES ('$cuenta', '$valor', '$nombret','$documentot', '$otro', '$usuario','$basename','Pendiente', NOW())";
     mysqli_query($conn, $query);
     unset($result_task);
     success($msg='Se ha creado el pago #'.$cuenta.' con exito');
     header("location: ../pagos");

?>