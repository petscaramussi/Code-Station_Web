<?php

if ($_SESSION['logado'] == true){
        $counter = time();

        if (!isset($_SESSION['count'])){
          $_SESSION['count']= $counter;
        }

        if ($counter - $_SESSION['count'] >= 3600 ){

header('Location: https://codestation.cf/sair.php');

       }
        $_SESSION['count']= $counter;
    } 
?>