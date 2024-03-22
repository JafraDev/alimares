<?php
    $id_menu = $_GET["id_menu"];
    $perfil = $_GET["perfil"];
    $del=
    "
    delete from perfiles_menus where perfil = '$perfil' and id_menu = $id_menu
    ";
    echo $del;
    // $dataResult = new DbApi();
    // $dma  = new Db();
    // $conn = $dma->setMyConnection();
    // $result_del = $conn->query($del);
    // if($result_del){
    //     echo "<script>alert('Registro actualizado con éxito')</script>";
    // }else{
    //     echo "<label class='text-danger'><b>Se detectó un error al intentar actualizar el registro</b></label>";
    //     echo "</br>";
    // echo $ins_st;
    // }
?>