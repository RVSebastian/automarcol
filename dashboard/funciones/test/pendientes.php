<?php
    require '../includes/cn.php';
    if (!isset($_SESSION)) {
        session_start();
        }
    $usuario = $_SESSION['key']['usuario'];
    $data_array = array();
    // SQL para obtener los datos
    $sql = "SELECT * FROM pagos where estado='Pendiente' order by fecha desc";
    // Ejeuctar el SQL
    $query = $conn->query($sql);
    
    while($data = $query->fetch_object()){
        // Poner los datos en un array en el orden de los campos de la tabla
        $data_array[] = array($data->id, $data->cuenta,$data->valor,$data->nombret,$data->fecha,$data->estado);
    }
    // crear un array con el array de los datos, importante que esten dentro de : data
    $new_array  = array("data"=>$data_array);
    // crear el JSON apartir de los arrays
    echo json_encode($new_array);
?>
