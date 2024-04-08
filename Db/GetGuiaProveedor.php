<?php
    $idProveedor    = $_GET["idProveedor"];
    $n_guia         = $_GET["n_guia"];
    include_once "DbApi.php";       
    $dataResult = new DbApi();
    $decode_data = $dataResult->getGuiaProveedorNumero($idProveedor, $n_guia);
    if($decode_data){
        echo json_encode($decode_data);
    }else{
        echo 0;
    }
    
?>