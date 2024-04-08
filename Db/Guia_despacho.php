<?php
    $f_data = file_get_contents("php://input"); 
    $data = json_decode($f_data);
    $ins_st = 
    "
    INSERT into guias_d_cab (
        id_guia ,
        num_guia,
        id_proveedor,
        fecha_recepcion,
        decla_jurada,
        decla_garantia,
        id_origen,
        origen  
    )
    values (
        {$data->id},
        {$data->guia},
        {$data->proveedor},
        '{$data->fecha_recepcion}',
        '{$data->declaracion_jurada}',
        '{$data->declaracion_garantia}',
        {$data->origen},
        '{$data->nombre_origen}'
    )
        ON DUPLICATE KEY 
        UPDATE 
        num_guia            = {$data->guia},
        id_proveedor        = {$data->proveedor},
        fecha_recepcion     = '{$data->fecha_recepcion}',
        decla_jurada        = '{$data->declaracion_jurada}',
        decla_garantia      = '{$data->declaracion_garantia}',
        id_origen           = {$data->origen},
        origen              = '{$data->nombre_origen}'
    ";

    try{     
        include_once "DbApi.php";       
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            $last_id = $conn->insert_id;
            echo "{\"mensaje\":\"Registro guardado con éxito\", \"id\":$last_id}";            
        }else{
            echo "{\"mensaje\":\"Se detectó un error al intentar agregar el registro.\", \"id\":-1}"; 
            echo $ins_st;
        }
    }catch (Exception $e) {
        echo $e->getMessage();
    }
?>