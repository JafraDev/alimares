<?php
    if(!empty($_POST["agregar"])){
        $nombre = trim($_POST["nombre_perfil"]);
        $id = $_POST["perfil"];
        $ins_st = 
        "
        INSERT into perfiles (perfil, nombre_perfil)
        values ('$id', '$nombre')
            ON DUPLICATE KEY 
            UPDATE 
            nombre_perfil = '$nombre'
        ";
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            // echo "<script>document.getElementById(\"configurar\").removeAttribute(\"disabled\");</script>";
            echo "<label class='text-info'>Registro guardado con éxito</label>";
        }else{
            echo "<label class='text-danger'><b>Se detectó un error al intentar agregar el registro</b></label>";
            echo "</br>";
        echo $ins_st;
        }
    }
?>