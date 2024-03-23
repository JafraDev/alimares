<?php
    $id_menu = $_GET["id_menu"];
    $perfil = $_GET["perfil"];
    $del =
    "
    INSERT into perfiles_menus (perfil, id_menu)
    values ('$perfil', $id_menu)
        ON DUPLICATE KEY 
        UPDATE 
        nulo = 1
    ";

    include_once "DbApi.php";
    $dma = new DbApi();
    $conn = $dma->setMyConnection();
    $result_del = $conn->query($del);
    if($result_del){
        echo "Registro actualizado con éxito.";
    }else{
        echo "Se detectó un error al intentar actualizar el registro.";
    }
?>