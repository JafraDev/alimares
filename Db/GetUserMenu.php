<?php
    session_start();
    header("Content-Type: text/html;charset=utf-8");
    include_once "./Db/DbApi.php";
    $sql = 
    "
    select
        m.nombre_menu,
        m.url,
        mp.padre
    from
        usuarios u
    inner join perfiles_usuarios pu on
        pu.usuario = u.usuario
    inner join perfiles_menus pm on pm.perfil = pu.perfil	
    inner join menu m on m.id_menu = pm.id_menu 
    inner join menu_parent mp on mp.id_padre = m.id_padre
    where
    u.usuario = '".$_SESSION["id"]."'
    order by mp.padre, m.nombre_menu asc
    "
    ;
    $dma  = new Db();
    $conn = $dma->setMyConnection();
    $data = $conn->query($sql);
    if ($data->num_rows > 0) {
        $p = "";
        $r = 0;
        while($decode_data = $data->fetch_assoc()){
            if($r == 0){
                echo "<ul><li><a href='Inicio.php'><span class='icon-home'>  Inicio</span></a></li></ul>";
                $p = $decode_data['padre'];                
                echo "<ul><span>".$p."</span>";
                echo "<li><a href = ".$decode_data['url']." > <span>".$decode_data['nombre_menu']."</span></a></li>";
            }else{
                if($p == $decode_data['padre']){
                    echo "<li><a href = ".$decode_data['url']." > <span>".$decode_data['nombre_menu']."</span></a></li>";
                }else{
                    echo "</ul>";
                    $p = $decode_data['padre'];                
                    echo "<ul><span>".$p."</span>";
                    echo "<li><a href = ".$decode_data['url']." > <span>".$decode_data['nombre_menu']."</span></a></li>";
                }
            }
            $r++;
        }
        echo "<footer style='width: 100%; margin: 0 auto; paddind:5px; font-size:10px; color:gray; text-align:center;'></footer>";   
    } else {
        echo "<div class='text-danger'>El perfil del usuario aún no está configurado.</div>";
    }
    $conn->close();
   
?>