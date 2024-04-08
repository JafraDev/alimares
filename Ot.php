<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post">
        <div class="card" style="width:100%; margin:0 auto">
            <div class="card-header">Órden de trabajo</div>
            <div class="card-body">
            <input type="hidden" name="id" id="id" value="0">
            <input type="hidden" name="_id" id="_id" value="0">
                <!-- Proveedor -->
                <div class="row">
                    <label for="proveedor">Proveedor</label>
                    <div class="input-group mb-3">
                        <?php
                            include_once "./Db/GetProveedoresSel.php";
                        ?>
                    </div>                                
                </div>     
                <!-- Guía -->
                <div class="row">
                    <label for="guia">Número guía</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span>
                        <input type="text" id="guia" name="guia" class="form-control" required onkeypress="return soloNumeros(event)"/>
                        <button class="btn btn-outline-secondary btn-primary" type="button" id="btnBuscar" onclick="getDetalleGuia(proveedor.value, guia.value)">Buscar</button>
                    </div> 
                    <label for="restricciones_origen">Restricciones de origen</label>
                    <div class="input-group mb-3">
                        <input type="text" id="restricciones_origen" name="restricciones_origen" class="form-control" required/>
                    </div> 
                </div>
                <div class="row">
                    <table id="tbDetalleGuia" class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label for="especie">Especie</label>
                                </th>
                                <th>
                                    <label for="producto">Producto</label>
                                </th>
                                <th>
                                    <label for="conservacion">Conservación</label>
                                </th>
                                <th>
                                    <label for="envase">Envase</label>
                                </th>
                                <th>
                                    <label for="unidades">Unidades</label>
                                </th>
                                <th>
                                    <label for="peso_neto">Peso neto</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>     
        <!-- <div class="card" style="width:100%; margin:0 auto">
            <div class="card-header">Centros de cultivo</div>
            <div class="card-body">
                <div class="row">
                    <label for="producto">Centro de cultivo</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span>
                        <input type="text" id="c_cultivo" name="c_cultivo" class="form-control" required/>
                    </div>                              
                </div>
            </div>
            <div class="card-footer">    
                <div class="col-md-4">
                    <input type="submit" value="Agregar" name="agregar" id="agregar" class="btn btn-success">
                </div>
            </div>
            <br>
            <div class="card-body">
            </div>
        </div> -->
        <input type="hidden" name="id" id="id" value="0">
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       