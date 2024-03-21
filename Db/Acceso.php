<?php
    if(!empty($_POST["guardar"])){
        $perfil = $_POST["perfil"];
        $options = $_POST["menus"];
        
        $ins_st = 
        "
        INSERT into perfiles_menus (perfil, id_menu)
        VALUES ";
        foreach ($options as $id_menu){
            $ins_st .=           
            "
            ('$perfil', $id_menu),";            
        }
        $ins_st = substr($ins_st, 0, -1).";";
        // echo $ins_st;
        // return;
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