<?php 
include'./components/header.php';

if($_SESSION['key']['permisos']>=8){
    include'./components/pagos/admin/home.php';
}
else{
    include'./components/pagos/usuario/home.php';
}
include'./components/footer.php';
?>