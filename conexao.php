<?php
    ini_set('default_charset', 'UTTF-8');

   $con = mysqli_connect("localhost","root","","projetocsi");

    $con->query("
    SET NAMES utf8
    ");
?>
