<?php
    if(!empty($_POST["agregar"])){
        $rut = strtoupper(trim($_POST["rut"]));
        $nombre     = strtoupper(trim($_POST["nombre"]));
        $usuario    = $_POST["usuario"];
        $contraseña = md5($_POST["contraseña"]);
        $activo     = ($_POST["activo"] == "on") ? 1 : 0;
        $perfil     = $_POST["perfil"];
        $id = $_POST["id"];

        $ins_st = 
        "
        INSERT into usuarios (id_usuario, rut, nombre, usuario, contraseña)
        values ($id, '$rut', '$nombre', '$usuario', '$contraseña')
            ON DUPLICATE KEY 
            UPDATE 
            rut     = '$rut',
            nombre  = '$nombre',
            contraseña  = '$contraseña'
        ";
        $dataResult = new DbApi();
        $dma  = new Db();
        $conn = $dma->setMyConnection();
        $result_insert = $conn->query($ins_st);
        if($result_insert){
            $ins_st_1 = 
            "
            INSERT into perfiles_usuarios (usuario, perfil)
            values ('$usuario', '$perfil')
            ON DUPLICATE KEY 
            UPDATE 
            usuario     = '$usuario',
            perfil      = '$perfil'
            ";
            $dataResult->insertReg($ins_st_1);
            echo "<label class='text-info'>Registro guardado con éxito.</label>";
        }else{
            echo "<label class='text-danger'><b>Se detectó un error al intentar agregar el registro</b></label>";
            echo "</br>";
        echo $ins_st;
        }
    }
?>