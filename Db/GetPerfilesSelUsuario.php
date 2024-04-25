<?php
    $decode_data = $dataResult->getPerfiles();
    echo "<select name=\"perfil\" id=\"perfil\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione perfil</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['perfil']."\">".$decode_data[$key]['nombre_perfil']."</option>";
    }      
    echo"</select>";
?>