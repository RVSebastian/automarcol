<?php include'./includes/components/header.php';?>

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
        }

?>


<section class="bg-gray pt-0 mt-0 <?php echo $marca ?>" id="vehiculos">
    <?php include'./includes/components/carrousel/encabezado.php';?>
    <?php include'./includes/components/vehiculos/card.php';?>

</section>


<?php include'./includes/components/contact.php';?>




<?php include'./includes/components/footer.php';?>