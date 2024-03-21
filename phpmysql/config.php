<?php
$kasutaja = "leena";
$dbserver = "localhost";
$andmebaas = "muusikapood";
$pw = "Password";

$yhendus = mysql_connect($dbserver, $kasutaja, $pw, $andmebaas);
if(!$yhendus){
    die("Sa jälle ebaõnnestusid!");
} 



?>