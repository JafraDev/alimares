<?php
    $perfil = $_GET["perfil"];
    include_once "DbApi.php";
    $dataResult = new DbApi();
    $decode_data = $dataResult->getPerfilMenus($perfil);

    echo "<div class='col-md-12 tableFixHead'>";
    echo "<table class='table table-stripped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Acceso actual</th>";
    echo "<th>";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach($decode_data as $key=>$value){
        echo "<tr>";
        echo "<td>".$decode_data[$key]['menu']."</td>";
        echo "<td>";
        echo "<a onclick=\"delAccesosPerfil(".$decode_data[$key]['id_menu'].",'".$decode_data[$key]['perfil']."')\" class=\"icon-delete24x24\"></a>";
        echo "</td>";
        echo "</tr>";
    }      
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
?>