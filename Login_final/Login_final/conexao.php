<?php
$usuario  ="root";
$senha    ="usbw";
$database ="login3";
$host     ="localhost:3312";

$mysqli             = new mysqli($host, $usuario,$senha, $database);

if($mysqli->error){
    die("Falha ao conectar o banco de dados".$mysqli->error);
}
?>