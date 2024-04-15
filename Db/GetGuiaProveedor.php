<?php
    $idProveedor    = $_GET["idProveedor"];
    $n_guia         = $_GET["n_guia"];
    include_once "DbApi.php";       
    $dataResult = new DbApi();
    $decode_data = $dataResult->getGuiaProveedorNumero($idProveedor, $n_guia);
    if($decode_data){
        $activo = "";
        $html =
        "
        <input type=\"hidden\" name=\"id_guia\" id=\"id_guia\" value=\"".$decode_data[0]["id_guia"]."\">
        <table id=\"tbDetalleGuia\" class=\"table\">
            <thead>
                <tr>
                    <th>
                        <label for=\"especie\">Especie</label>
                    </th>
                    <th>
                        <label for=\"producto\">Producto</label>
                    </th>
                    <th>
                        <label for=\"conservacion\">Conservación</label>
                    </th>
                    <th>
                        <label for=\"envase\">Envase</label>
                    </th>
                    <th>
                        <label for=\"unidades\">Unidades</label>
                    </th>
                    <th>
                        <label for=\"peso_neto\">Peso neto</label>
                    </th>
                </tr>
            </thead>
            <tbody>";
            foreach ($decode_data as $key => $value)
            {
                if($value["ot_guia_d"] == 0){
                    $activo = "style=\"display:;\"";
                }
                else{
                    $activo = "style=\"display:none;\"";
                }
                $html .=
                "<tr id=\"tr_".$value["id_reg"]."\">
                <td>".$value["especie"]."</td>
                <td>".$value["producto"]."</td>
                <td>".$value["conservacion"]."</td>
                <td>".$value["envase"]."</td>
                <td>".$value["unidades"]."</td>
                <td>".$value["peso"]."</td>
                <td><input type=\"radio\" name=\"id_reg\" id=\"id_reg_".$value["id_reg"]."\" value=\"".$value["id_reg"]."\" ".$activo."></td>
                </tr>";
            }
            "</tbody>
        </table>                
        ";
        echo $html;
    }else{
        echo 0;
    }
    
?>