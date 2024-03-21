<?php
    session_start();
    if(!empty($_POST["btnAcceder"])){
        if(!empty($_POST["usuario"]) && !empty($_POST["contraseña"])){
            $username = $_POST["usuario"];
            $userpassword = md5($_POST["contraseña"]);
            
            $query = "
            select
                u.usuario,
                pu.perfil
            from
                usuarios u
                left join perfiles_usuarios pu on pu.usuario = u.usuario
            where
            u.usuario = '$username'
            and u.contraseña = '$userpassword'
            and u.activo = 1                
            ";
            
            $host = 'localhost';
            $db = 'Emat';
            $user = 'alimares';
            $password = 'alim@2024';
            $conn = new mysqli($host, $user, $password, $db);
            $conn->set_charset("utf8");
            if ($conn->connect_error) {
                die("Falló la conexión: " . $conn->connect_error);
            }

            $qry_result =  $conn->query($query);
            $data = $qry_result->fetch_object();
            if($qry_result){
                if($qry_result->num_rows > 0){            
                    $_SESSION["id"] = $data->usuario;
                    $_SESSION["perfil_usuario"] = $data->perfil;
                    $_SESSION["datos_usuario"] = '';//array($data->jefatura, $data->id_jefatura);
                    $_SESSION["time"] = time();
                    header('location: ./Inicio.php');                    
                }else{
                    echo "</br><div class='alert alert-danger'><strong>Acceso Denegado. El usuario no existe y/o las credenciales son erróneas.</strong></div>";
                }
            }else{
                $_SESSION["acceso"] = "Se detectó un error en la verificación del usuario.";
                echo "</br><div class='alert alert-danger'><strong>".$_SESSION["acceso"]."</strong></div>";
            }
            
            mysqli_free_result($data);
            mysqli_close($conn);        
        }else{
            echo "</br><div class='alert alert-warning'><strong>Debe indicar usuario y/o contraseña</strong></div>";
        }
    }else{
    }
?>


