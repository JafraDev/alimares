<?
    $host = 'localhost';
    $db = 'Emat';
    $user = 'alimares';
    $password = 'alim@2024';
    $conn = new mysqli($host, $user, $password, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Falló la conexión: " . $conn->connect_error);
    }
?>