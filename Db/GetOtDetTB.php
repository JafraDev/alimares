<?php
    $idOt = $_GET["idOt"];
    $idProveedor = $_GET["idProveedor"];
    include_once "DbApi.php";  
    $dataResult = new DbApi();
    $decode_data = $dataResult->getOtDet($idOt, $idProveedor);
    if($decode_data){
        echo "<div class='row'>";
        echo "<div class='col-md-12 tableFixHead'>";
        echo "<table class='table table-stripped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Especie</th>";
        echo "<th>Producto</th>";
        echo "<th>Conservación</th>";
        echo "<th>Envase</th>";
        echo "<th>Unidades</th>";
        echo "<th>Peso</th>";
        echo "<th>";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach($decode_data as $key=>$value){
            echo "<tr>";
            echo "<td>".$decode_data[$key]['Especie']."</td>";
            echo "<td>".$decode_data[$key]['Producto']."</td>";
            echo "<td>".$decode_data[$key]['Conservacion']."</td>";
            echo "<td>".$decode_data[$key]['Envase']."</td>";
            echo "<td>".$decode_data[$key]['Unidades']."</td>";
            echo "<td>".$decode_data[$key]['Peso']."</td>";
            echo "</tr>";
        }      
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
    }else{
        echo "No hubo resultados";
    }
?>