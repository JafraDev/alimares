<?php
    $decode_data = $dataResult->getConservaciones();
    echo "<select name=\"conservacion\" id=\"conservacion\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_conservacion']."\">".$decode_data[$key]['nombre']."</option>";
    }      
    echo"</select>";
?>