<?php
    $decode_data = $dataResult->getCalidades();
    echo "<div class='row'>";
    echo "<div class='col-md-12 tableFixHead'>";
    echo "<table class='table table-stripped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Calidad</th>";
    echo "<th>";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach($decode_data as $key=>$value){
        echo "<tr>";
        echo "<td><a href='#' 
        onclick='
        document.getElementById(\"id\").value = (this.parentElement.innerText); 
        document.getElementById(\"id_reg\").innerText = (this.parentElement.innerText); 
        document.getElementById(\"calidad\").value = (this.parentElement.nextSibling.innerText)'>".$decode_data[$key]['id_calidad']."</a></td>";
        echo "<td>".$decode_data[$key]['nombre']."</td>";
        echo "<td>";
        echo "<img style=\"display:none;\" id=\"setDocsIcon\" onClick=\"openFormSetDocs('".$decode_data[$key]['nombre']."'," .$decode_data[$key]['id_calidad'].")\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABdklEQVR4nNXUQUsVURwF8J+L9yL9Bi3SRZqkiyDBhWtplys3QrRKENICbVFtNNqUFbpw8fwa6kvhVVsrg4goctO3cC1/+D8YpxkfLj1w4c69d84czjl3uMwYxwa+4Qjf8QXvMHIRoia2cIBpNAp7Mb+Hj1jP5wHcPo8siBZ6fLQPy2hjEq26g1s1ZLO4X7G+gs91hOOprosreInr+Is/GMJa7r3GNk7qCDfSsy7ixR38xBPMYxd7eI5R3MkxWEX4tRTASCbcn+SruJpqQ3VPHBXm4ddvPMCLTPRNKnuIHyVPp6oIJ0ohBOFipvk2R8wf41+eqRJTi5tZ5rDhUY6o1S/cKJxrpl3/YbBg8mj61i4oXUr/9lNtF3fxvoqwlRXYzkqEsme4lp4dZ1CvMqguOrhVRxglfVqxF37NVawvYrPOs1Zeo3aSxvU6D0H2oVS1MxjLnjWyJp8wU3qhmZ51Ulmjx0fPYDjNP8y0oxqRZvy+Kj27HDgFTslLH7r3Gb0AAAAASUVORK5CYII=\">";
        echo "</td>";
        echo "</tr>";
    }      
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
?>