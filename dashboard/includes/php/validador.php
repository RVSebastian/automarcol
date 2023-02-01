<?php 
   
$js_code = '<script>console.log(' . json_encode($_SESSION, JSON_HEX_TAG) . ');</script>'; 

/*
if ($_SERVER['REMOTE_ADDR'] != $_SESSION['ipaddress'])
{
session_unset();
session_destroy();
}
if ($_SERVER['HTTP_USER_AGENT'] != $_SESSION['useragent'])
{
  session_unset();
  session_destroy();
}
*/
if (isset($_GET['l'])) { // detectamos un cerrar cession, destruimos la seccion y lo enviamos al login
    session_destroy(); 
}
   /*$usi = $_SESSION["key"]["id"];
        $query = "SELECT * FROM usuarios WHERE id = '$usi'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) { 
        $_SESSION['key'] = $row;
        }
        */
echo $js_code;

?>