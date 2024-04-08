<?php
    if(!empty($_POST["agregar"])){
        $nombre = strtoupper(trim($_POST["origen"]));
        $id = $_POST["id"];
        $ins_st = 
        "
        INSERT into origenes (id_origen, nombre)
        values ($id, '$nombre')
            ON DUPLICATE KEY 
            UPDATE 
            nombre = '$nombre'
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