<?php
    $decode_data = $dataResult->getMenu();
    echo "<select name=\"menus[]\" id=\"menus\" class=\"select form-control\" multiple style=\"height:500px;\" required>";
    foreach($decode_data as $key=>$value){
        echo "<option value=\"".$decode_data[$key]['id_menu']."\">".$decode_data[$key]['nombre_menu']."</option>";
    }      
    echo"</select>";
?>