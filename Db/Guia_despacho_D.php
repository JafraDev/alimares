<?php
    $f_data = file_get_contents("php://input"); 
    $data = json_decode($f_data);

    $ins_st = 
    "
    INSERT into guias_d_det (
        id_guia, id_especie, id_producto, id_conservacion, id_envase, unidades, peso, id_reg
    )
    values (        
        {$data->_id},
        {$data->especie},
        {$data->producto},
        {$data->conservacion},
        {$data->envase},
        {$data->unidades},
        {$data->peso_neto},
        0
    )
        ON DUPLICATE KEY 
        UPDATE 
        id_especie  = {$data->especie},
        id_producto = {$data->producto},
        id_conservacion = {$data->conservacion},
        id_envase   = {$data->envase},
        unidades    = {$data->unidades},
        peso        = {$data->peso_neto}
    ";
    // echo $ins_st;
    // return;
    try{     
        include_once "DbApi.php";       
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            $last_id = $conn->insert_id;
            echo '{"mensaje":"Registro guardado con éxito", "id":'.$last_id.'}';
        }else{
            echo "Se detectó un error al intentar agregar el registro.";
            echo "Error en la sentencia: \n".$ins_st;
        }
    }catch (Exception $e) {
        echo $e->getMessage();
        }
        
?>