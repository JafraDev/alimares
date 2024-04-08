<?php
    $decode_data = $dataResult->getProductos();
    echo "<select name=\"producto\" id=\"producto\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_producto']."\">".$decode_data[$key]['nombre']."</option>";
    }      
    echo"</select>";
?>