<?php
    session_start();
    header("Content-Type: text/html;charset=utf-8");
    include_once "./Db/DbApi.php";
    
    $host = 'localhost';
    $db = 'Emat';
    $user = 'alimares';
    $password = 'alim@2024';

    $conn = new mysqli($host, $user, $password, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
    }
    $sql = 
    "
    select
        m.nombre_menu,
        m.url
    from
        usuarios u
    inner join perfiles_usuarios pu on
        pu.usuario = u.usuario
    inner join perfiles_menus pm on pm.perfil = pu.perfil	
    inner join menu m on m.id_menu = pm.id_menu 
    where
    u.usuario = '".$_SESSION["id"]."'
    order by m.nombre_menu";
    $data = $conn->query($sql);
    if ($data->num_rows > 0) {
        echo "<a href='Inicio.php'><span class='icon-home'>  Inicio</span></a>";
        echo "<br>";
        echo "<label><span class='icon-list2'>  Módulos</span></label>";
        $menu_op = "<ul>"; 
        $menu_op .= "<li>";
        while($decode_data = $data->fetch_assoc()) {
            $menu_op .= "<li><a href = ".$decode_data['url']." > <span>".$decode_data['nombre_menu']."</span></a></li>";
        }
        $menu_op .= "</ul>";
        echo $menu_op;
        echo "<footer style='width: 100%; margin: 0 auto; padding:5px; font-size:10px; color:gray; text-align:center;'></footer>";
    } else {
        echo "<div class='text-danger'>El perfil del usuario aún no está configurado.</div>";
    }
    $conn->close();
?>