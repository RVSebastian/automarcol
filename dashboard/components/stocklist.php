<?php
$marca = $_POST['marca'];
session_start();
if (isset($_POST['buscador'])){
    $buscador = strtoupper($_POST['buscador']);
}
if (isset($_POST['repuesto'])) {
   $repuesto = $_POST['repuesto'];
}
if (isset($inspect)) {
    unset($inspect);
}
switch ($marca) {
    // URL DE VEHICULOS
    case 'FORD':
        $url = 'https://apiautomarcol.up.railway.app/api/ford/inv';
        break;
    case 'BAJAJ':
        $url = 'https://apiautomarcol.up.railway.app/api/bajaj/inv';
        break;
    case 'PEUGEOT':
        $url = 'https://apiautomarcol.up.railway.app/api/peugeot/inv';
        break;
    case 'FOTON':
        $url = 'https://apiautomarcol.up.railway.app/api/foton/inv';
        break;
    case 'FCA':
        $url = 'https://apiautomarcol.up.railway.app/api/fca/inv';
        break;
    // URL DE REPUESTOS
    case 'RFORD':
            $url = 'https://apiautomarcol.up.railway.app/api/ford/rep/all';
            break;
    case 'RBAJAJ':
            $url = 'https://apiautomarcol.up.railway.app/api/bajaj/rep/all';
            break;
    case 'RPEUGEOT':
            $url = 'https://apiautomarcol.up.railway.app/api/peugeot/rep/all';
            break;
    case 'RFOTON':
            $url = 'https://apiautomarcol.up.railway.app/api/foton/rep/all';
            break;
    case 'RFCA':
            $url = 'https://apiautomarcol.up.railway.app/api/fca/rep/all';
            break;
    default:
        $url = 'none';
        break;
};
    if (($inspect = file_get_contents($url)) == false) {
        $error = error_get_last();
        $oculto = 'block';
    } else {
        $oculto = 'hidden';
        $inspect = array_values(json_decode($inspect, true));
        $vacio = 'VACIO';

        if (isset($buscador)) {
            $filtro = array_filter($inspect, function($array) use ($buscador){
                if (str_contains($array['Version_DescipcionModelo'], $buscador)) {
                    return $array;
                }
            });
            if (count($filtro)>0) {
                $data = $filtro;
                $_SESSION['modelo']=$data;
            }else{
                $data = $inspect;
                $_SESSION['modelo']=$data;
            }
            
        }
        else{

            if(isset($repuesto)){
                $data = $inspect;
            }else{
                $data = $inspect;
            }
        
            $_SESSION['modelo']=$data;
        }
    };
?>
<div class="<?php echo $oculto?>">
    <div class="bg-red-600 text-white p-5">
        <h1 class='font-semibold'>??ERROR!</h1>
        <p>Algo salio mal, por favor vuelve a buscar otra marca o contactese con su departamento de sistemas</p>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_tmsiddoc.json" background="transparent" speed="1"
        style="width: 400px; height: 400px; margin:0 auto;" loop autoplay></lottie-player>
</div>
<?php
if (isset($repuesto)) {
?>
<div class="relative overflow-x-auto" id='respuesta'>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs  uppercase bg-gray-100 text-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Marca
                </th>
                <th scope="col" class="px-6 py-3">
                    Parte
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Existencia
                </th>
                <th scope="col" class="px-6 py-3">
                    Costo
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>
            </tr>
        </thead>
        <tbody class="h-9 overflow-y-scroll">
            <?php 
                               foreach ($data[0] as $datos) { 
                                ?>
            <tr class="border-b text-slate-900">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?php
                                        if ($datos['Marca'] == null) {
                                            echo $vacio; 
                                        }
                                        else {
                                            print_r($datos['Marca']);
                                        }
                                        ?>
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?php
                                        if ($datos['Parte'] == null) {
                                            echo $vacio;
                                        }
                                        else {
                                            print_r($datos['Parte']);
                                        }
                                        ?>
                </th>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Descripcion'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Descripcion']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['existencia'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['existencia']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Costo$'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Costo$']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <a href='./addrepuesto?parte=<?php  print_r($datos['Parte'])?>'
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>

            <?php
                                }
                                ?>

        </tbody>

    </table>


</div>
<?php
}
else{
?>
<div class="relative overflow-x-auto" id='respuesta'>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs  uppercase bg-gray-100 text-gray-900">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Marca
                </th>
                <th scope="col" class="px-6 py-3">
                    Modelo
                </th>
                <th scope="col" class="px-6 py-3">
                    A??o Modelo
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    Clase
                </th>
                <th scope="col" class="px-6 py-3">
                    Traccion
                </th>
                <th scope="col" class="px-6 py-3">
                    Cilindraje
                </th>
                <th scope="col" class="px-6 py-3">
                    Combustible
                </th>
                <th scope="col" class="px-6 py-3">
                    Puertas
                </th>
                <th scope="col" class="px-6 py-3">
                    Cojineria
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                               foreach ($data as $datos) { 
                                ?>
            <tr class="border-b text-slate-900">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?php
                                        if ($datos['Marca'] == null) {
                                            echo $vacio; 
                                        }
                                        else {
                                            print_r($datos['Marca']);
                                        }
                                        ?>
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?php
                                        if ($datos['Version_DescipcionModelo'] == null) {
                                            echo $vacio;
                                        }
                                        elseif (isset($datos['Descripcion'])) {
                                            print_r($datos['Descripcion']);
                                        }
                                        else {
                                            print_r($datos['Version_DescipcionModelo']);
                                        }
                                        ?>
                </th>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Ano_Modelo'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Ano_Modelo']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['CostoTotal'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['CostoTotal']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Clase'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Clase']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Traccion'] == null) {
                                           echo $vacio;
                                        }else {
                                            print_r($datos['Traccion']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Cilindraje'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Cilindraje']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Combustible'] == null) {
                                           echo $vacio;
                                        }else {
                                            print_r($datos['Combustible']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Puertas'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Puertas']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <?php
                                        if ($datos['Cojineria'] == null) {
                                            echo $vacio;
                                        }else {
                                            print_r($datos['Cojineria']);
                                        }
                                        ?>
                </td>
                <td class="px-6 py-4">
                    <a href='./agregarproducto?modelo=<?php  print_r($datos['Version_DescipcionModelo']) ?>'
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>

            <?php
                                }
                                ?>

        </tbody>

    </table>
</div>
<?php } ?>