<?php
    $host = 'localhost';
    $db = 'reemplazos';
    $user = 'staffreem';
    $password = 'str@2023';

    $conn = new mysqli($host, $user, $password, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Falló la conexión: " . $conn->connect_error);
    }
?>