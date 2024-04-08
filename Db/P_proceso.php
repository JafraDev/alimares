<?php
    if(!empty($_POST["agregar"])){
        $nombre = strtoupper(trim($_POST["p_proceso"]));
        $id_sernapesca = strtoupper(trim($_POST["id_sernapesca"]));
        $id = $_POST["id"];
        $ins_st = 
        "
        INSERT into plantas_proceso (id_planta, nombre, id_sernapesca)
        values ($id, '$nombre', $id_sernapesca)
            ON DUPLICATE KEY 
            UPDATE 
            nombre = '$nombre',
            id_sernapesca = $id_sernapesca
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