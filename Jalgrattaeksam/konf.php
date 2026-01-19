<?php
//kasutame kohalik arvuti
$servernimi='localhost';
$kasutajanimi='Mariia';
$parool='qwerty';
$andmebaasinimi='mariia';
$connect=new mysqli($servernimi, $kasutajanimi, $parool, $andmebaasinimi);
$connect->set_charset("utf8");
//zone.ee
/*$servernimi='d141137.mysql.zonevs.eu';
$kasutajanimi='d141137_mariia';
$parool='';
$andmebaasinimi='d141137_baasphp';
$connect=new mysqli($servernimi, $kasutajanimi, $parool, $andmebaasinimi);
$connect->set_charset("utf8");*/
?>
