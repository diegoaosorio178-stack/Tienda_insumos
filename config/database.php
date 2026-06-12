<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$bd = "pruebabd";
$port = 3306;

$conn = new mysqli($host, $user, $password, $bd, $port);

if($conn->connect_error){
    die("Error de Conexion: " . $conn->connect_error);
}
?>