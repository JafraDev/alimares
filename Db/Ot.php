
<?php
    // if(!empty($_POST["agregar"])){
        $f_data = file_get_contents("php://input"); 
        $data = json_decode($f_data);

        $id = $data->id;
        $guia  = $data->id_guia;
        $id_reg= $data->id_reg;
        $lote  = $data->lote;
        $restricciones_origen  = $data->restricciones_origen;
        $peso_f_v = $data->peso_f_v;
        $ins_st = 
        "
        INSERT into ot (id_ot, id_guia, id_reg, lote, restricciones_origen, peso_f_v)
        values ($id, $guia, $id_reg, '$lote', '$restricciones_origen', $peso_f_v)
            ON DUPLICATE KEY 
            UPDATE 
            id_guia = $guia,
            id_reg = $id_reg,
            lote = '$lote',
            restricciones_origen = '$restricciones_origen',
            peso_f_v = $peso_f_v
        ";

        include_once "DbApi.php";
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            $last_id = $conn->insert_id;
            echo '{"mensaje":"Registro guardado con éxito", "id":'.$last_id.'}';
        }else{
            echo '{"mensaje":"Se detectó un error al intentar agregar el registro", "id":0}';
        }
    // }
?>