<?php
    $decode_data = $dataResult->getUsuarios();
    echo "<div class='row'>";
    echo "<div class='col-md-12 tableFixHead'>";
    echo "<table class='table table-stripped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Usuario</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach($decode_data as $key=>$value){
        echo "<tr>";
        echo "<td><a href='#' 
        onclick=
        'document.getElementById(\"rut\").value = (\"".$decode_data[$key]['rut']."\"); 
        document.getElementById(\"id\").value = (this.parentElement.innerText); 
        document.getElementById(\"id_reg\").innerText = (this.parentElement.innerText);
        document.getElementById(\"nombre\").value = (this.parentElement.nextSibling.innerText);
        document.getElementById(\"usuario\").value =(this.parentElement.nextSibling.nextSibling.innerText);
        '>".$decode_data[$key]['id_usuario']."</a></td>";
        echo "<td>".$decode_data[$key]['nombre']."</td>";
        echo "<td>";
        echo $decode_data[$key]['usuario'];
        echo "</td>";
        echo "</tr>";
    }      
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
?>