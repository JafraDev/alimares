<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimares</title>
    <!-- Scripts -->
    <!-- ------- -->
    <script src="./Scripts/jquery-3.6.0.js"></script>
    <script src="./Scripts/jquery-ui.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
    <!-- <script src="./Scripts/app.js"></script> -->
    <!-- <script src="./Scripts/FileSaver.js"></script>
    <script src="./Scripts/devTools.js"></script> -->
    
    <!-- Estilos -->
    <!-- ------- -->
    <!-- <link rel="stylesheet" href="http://10.7.120.220/Recursos/Css/iconos.css"/> -->
    <link href="./Css/bootstrap.min.css" rel="stylesheet">
    <link href="./Css/icomoon_I/style.css" rel="stylesheet">
    <link href="./Css/jquery-ui.css" rel="stylesheet">
    <link href="./Css/app.css" rel="stylesheet">
    <!-- ------- -->
    <!-- ------- -->
    <?php 
        date_default_timezone_set("America/Santiago");
        session_start();
        // if(time()-$_SESSION["time"] > 900){
        //     header("Location: ./Controllers/logoutcontroller.php");
        // }
        include_once "./Db/DbApi.php";
        $dataResult = new DbApi();
        if(empty($_SESSION["id"])){
            header("Location: CtrlIngreso.php");
        }
    ?>
</head>