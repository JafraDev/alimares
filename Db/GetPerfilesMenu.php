<?php
    $perfil = $_POST["perfil"];
    $qry = 
    "
    select
	pm.*,
	m.nombre_menu menu
    from
        perfiles_menus pm
        join menu m on m.id_menu = pm.id_menu 
        where pm.perfil ='$perfil'
    ";
    echo $qry;
?>