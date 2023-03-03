<?php 

$marca = $_POST['marca'];

if (isset($data)) {
    unset($data);
}

switch ($marca) {
    case 'FORD':
        $url = 'https://apiautomarcol.up.railway.app/api/ford/rep';
        break;
    case 'BAJAJ':
        $url = 'https://apiautomarcol.up.railway.app/api/bajaj/rep';
        break;
    case 'PEUGEOT':
        $url = 'https://apiautomarcol.up.railway.app/api/peugeot/rep';
        break;
    case 'FOTON':
        $url = 'https://apiautomarcol.up.railway.app/api/foton/rep';
        break;
    case 'FJDR':
        $url = 'https://apiautomarcol.up.railway.app/api/fca/rep';
        break;
    default:
        $url = 'https://apiautomarcol.up.railway.app/api/ford/rep';
        break;
};

$peticion = file_get_contents($url);
$datos = json_decode($peticion, true);
$data =  $datos[0];

if (empty($data)) {
    echo '<div id="errori" class="animate__animated animate__fadeIn animate__slow">
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
   </script>
   <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_suhe7qtm.json"
       background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto" loop
       autoplay></lottie-player>
       <p class="text-center">No se encontro ningun repuesto</p>
       </div> 
';
} else {
    require'./card.php';
}
?>