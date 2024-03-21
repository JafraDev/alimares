<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de acceso</title>
    <link href="./Css/icomoon/style.css" rel="stylesheet">
    <link href="./Css/bootstrap.min.css" rel="stylesheet">
    <link href="./Css/CtrlIngreso.css" rel="stylesheet">
    <script src="./Scripts/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top:10%;z-index:index 0;">
      <div class="col-lg-6 mb-5 mb-lg-0 my-auto" style="margin:0 auto;">
        <div class="card" style="box-shadow: 0px 0px 10px gray; border-radius: 5px;">
          <div class="card-body py-5 px-md-5" style="border-radius: 5px;">
            <form method="POST" >
              <div class="logoContainer"><img class="imgLogoRedondo" alt=""/></div>
              <div class="input-group mb-3">
                <span class="input-group-text"><span class="icon-user"></span></span>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Indique usuario"/>
              </div>              
              <div class="input-group mb-3">
                <span class="input-group-text"><span class="icon-lock"></span></span>
                <input type="password" id="contraseña"  name="contraseña" class="form-control" placeholder="Ingrese contraseña" />
              </div>                 
              <input type="submit" class="btn btn-info btn-block mb-5" name="btnAcceder" value="Aceptar">
              <?php
                include "./Controllers/logincontroller.php";
              ?>
              <br>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
<footer style="width: 50%; margin: 0 auto; padding:5px; font-size:11px; color:gray; text-align:center;"><b>&#169;</b>Alimares</footer>
</html>