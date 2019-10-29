<?php
if(!$_SESSION['logado']){
    header('Location:entrar.php');
    exit();
}