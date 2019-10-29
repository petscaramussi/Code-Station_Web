<?php
$server = $_SERVER["REQUEST_URI"];
$extensao = substr($server,-4);
if($extensao == ".php"){
 $teste = substr( $server, 0, -4 );
 header("location:$teste");
}

?>