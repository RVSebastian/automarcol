<?php 

$url = 'https://apiautomarcol.up.railway.app/api/ford/rep';
$peticion = file_get_contents($url);
$datos = json_decode($peticion, true);
$data =  $datos[0];

if ($peticion === false) {
    echo '<div id="error" style="display: none">
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
   </script>
   <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_suhe7qtm.json"
       background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto" loop
       autoplay></lottie-player>
</div>';
} else {
    require'./card.php';
}
?>