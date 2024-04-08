<?php
    $id = $_GET["id"];
    $del =
    "
    INSERT into guias_d_det (id_reg)
    values ($id)
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