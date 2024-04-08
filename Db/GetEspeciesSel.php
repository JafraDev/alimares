<?php
    $decode_data = $dataResult->getEspecies();
    echo "<select name=\"especie\" id=\"especie\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_especie']."\">".$decode_data[$key]['nombre']."</option>";
    }      
    echo"</select>";
?>