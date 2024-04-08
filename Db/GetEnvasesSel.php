<?php
    $decode_data = $dataResult->getEnvases();
    echo "<select name=\"envase\" id=\"envase\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_envase']."\">".$decode_data[$key]['nombre']."</option>";
    }      
    echo"</select>";
?>