<?php include'./includes/components/header.php';?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // inicimoas la session nuevamente
?>
<?php
$marca = $_GET['marca'];

switch ($marca) {
        case 'Ford':
            $url = 'https://apiautomarcol.up.railway.app/api/ford/inv';
            break;
        case 'Bajaj':
            $url = 'https://apiautomarcol.up.railway.app/api/bajaj/inv';
            break;
        case 'Peugeot':
            $url = 'https://apiautomarcol.up.railway.app/api/peugeot/inv';
            break;
        case 'Foton':
            $url = 'https://apiautomarcol.up.railway.app/api/foton/inv';
            break;
        case 'Fca':
            $url = 'https://apiautomarcol.up.railway.app/api/fca/inv';
            break;
        default:
            $url = 'none';
            break;
    };
    
        if (($inspect = file_get_contents($url)) == false) {
            $error = error_get_last();
            echo $error;
            $oculto = 'block';
        } else {
            $oculto = 'hidden';
            $inspect = array_values(json_decode($inspect, true));
            $vacio = 'VACIO';
            $data = $inspect;
            $_SESSION['data'] = $data;
        }

?>


<section class="bg-gray pt-0 mt-0 <?php echo $marca ?>" id="vehiculos">
    <br><br><br><br><br><br><br><br>
    <?php 
    if (empty($data)) {
        echo '<div id="errori" class="animate__animated animate__fadeIn animate__slow">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
        </script>
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_suhe7qtm.json"
            background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto" loop
            autoplay></lottie-player>
            <p class="text-center">No se encontro ningun Vehiculo</p>
            </div> ';
    }else{
        include'./includes/components/vehiculos/card.php';
    }
    ?>
</section>


<?php include'./includes/components/contact.php';?>




<?php include'./includes/components/footer.php';?>