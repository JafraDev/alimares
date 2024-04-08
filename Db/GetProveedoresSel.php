<?php
    $decode_data = $dataResult->getProveedores();
    echo "<select name=\"proveedor\" id=\"proveedor\" class=\"select form-control\" required>";
    echo "<option value=\"0\">Seleccione opción</option>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_proveedor']."\">".$decode_data[$key]['nombre_fantasia']."</option>";
    }      
    echo"</select>";
?>