<?php
    if(!empty($_POST["agregar"])){
        $rut = strtoupper(trim($_POST["rut"]));
        $razon_social = strtoupper(trim($_POST["razon_social"]));
        $nombre_fantasia = strtoupper(trim($_POST["nombre_fantasia"]));
        $domicilio_comercial = strtoupper(trim($_POST["domicilio_comercial"]));
        $id = $_POST["id"];
        $ins_st = 
        "
        INSERT into proveedores (id_proveedor, rut, razon_social, nombre_fantasia, domicilio_comercial)
        values ($id, '$rut', '$razon_social', '$nombre_fantasia', '$domicilio_comercial')
            ON DUPLICATE KEY 
            UPDATE 
            rut                 = '$rut', 
            razon_social        = '$razon_social', 
            nombre_fantasia     = '$nombre_fantasia', 
            domicilio_comercial = '$domicilio_comercial'
        ";
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            echo "<label class='text-info'>Registro guardado con éxito</label>";
        }else{
            echo "<label class='text-danger'><b>Se detectó un error al intentar agregar el registro</b></label>";
            echo "</br>";
        echo $ins_st;
        }
    }
?>