<?php
    $url_insert = "../../galery";
    $url_insert = $url_insert.'/'.$_POST['modelo'];
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };

    $collage_img = array(
        'img1' => $_FILES['p1']['name'],
        'img2' => $_FILES['p2']['name'],
        'img3' => $_FILES['p3']['name'],
        'img4' => $_FILES['p4']['name'],
        'img5' => $_FILES['p5']['name'],
        'img6' => $_FILES['p6']['name'],
        'img7' => $_FILES['p7']['name'],
        'img8' => $_FILES['p8']['name'],
    );

    
    for ($i=1; $i <8 ; $i++) { 
        $file = $_FILES["p$i"]["name"]; 
        $url_temp = $_FILES["p$i"]["tmp_name"]; 
        $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "El archivo " . htmlspecialchars(basename($file)) . " no se ha podido cargar.";
        }
    };
    for ($i=1; $i <2 ; $i++) { 
        $file = $_FILES["c1"]["name"]; 
        $url_temp = $_FILES["c1"]["tmp_name"]; 
        $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "El archivo " . htmlspecialchars(basename($file)) . " no se ha podido cargar.";
        }
    };
    for ($i=1; $i <2 ; $i++) { 
        $file = $_FILES["presentacion"]["name"]; 
        $url_temp = $_FILES["presentacion"]["tmp_name"]; 
        $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "El archivo " . htmlspecialchars(basename($file)) . " no se ha podido cargar.";
        }
    };



    $data = array(
        'modelo' =>  $_POST['modelo'],
        'presentation_img' =>$_FILES['presentacion']['name'],
        'carrousel_img' => $_FILES['c1']['name'],
        'collage_img' => json_encode($collage_img),
        'usuario' =>  $_POST['usuario'],
        'cilindraje' => $_POST['cilindraje'],
        'traccion' => $_POST['traccion'],
        'cojineria' =>  $_POST['cojineria'],
        'puertas' =>  $_POST['puertas'],
        'combustible' =>  $_POST['gasolina'],
        'otro' =>  $_POST['otro'],
    );
    
    $data_string = json_encode($data);
    $ch = curl_init('https://apiautomarcol.up.railway.app/api/image/vehicles/model');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);
    
   header("location: ../../stock")
?>