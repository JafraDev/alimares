<?php
    $decode_data = $dataResult->getOrigenes();
    echo "<select name=\"origen\" id=\"origen\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_origen']."\">".$decode_data[$key]['nombre']."</option>";
    }      
    echo"</select>";
?>