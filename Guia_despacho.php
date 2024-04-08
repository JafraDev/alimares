<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <div class="card" style="width:100%; margin:0 auto">
        <div class="card-header">Ingreso guía despacho</div>
        <div class="card-body">
            <form action="" method="post" id="guia_cab">
                <input type="hidden" name="id" id="id" value="0">
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
                        <button class="btn btn-outline-secondary btn-primary" type="button" id="btnBuscar" onclick="getGuiaProveedor(proveedor.value, guia.value)">Buscar</button>
                    </div> 
                </div>
                <!-- Fecha recepción, declaración jurada, declaración de granatía -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="fecha_recepcion">Fecha recepción</label>
                        <div class="input-group mb-3">
                            <input type="date" id="fecha_recepcion" name="fecha_recepcion" class="form-control" required/>
                        </div>                
                    </div> 
                    <div class="col-md-3">
                        <label for="declaracion_jurada">Declaración jurada</label>
                        <div class="input-group mb-3">
                            <input type="text" id="declaracion_jurada" name="declaracion_jurada" class="form-control"/>
                        </div>                
                    </div>                                    
                    <div class="col-md-3">
                        <label for="declaracion_garantia">Declaración de garantía</label>
                        <div class="input-group mb-3">
                            <input type="text" id="declaracion_garantia" name="declaracion_garantia" class="form-control"/>
                        </div>                
                    </div>                                    
                </div>   
                <!-- Origen materia prima -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="origen">Tipo origen</label>
                        <?php
                            include_once "./Db/GetOrigenesSel.php";
                        ?>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre_origen">Origen</label>
                        <!-- <select name="nombre_origen" id="nombre_origen" class="select form-control" required></select> -->
                        <input type="text" class="form-control" name="nombre_origen" id="nombre_origen"></input:Text>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="button" value="Guardar" name="guardar" id="guardar" class="btn btn-success" onClick="FormToJson('guia_cab', event, Guia_D_C_Save)">
                    </div>                    
                </div>                                           
            </form>       
        </div>
        <div class="card-footer">
            <label for="">Detalle</label>
        </div>
        <div class="card-body">
            <form action="" method="post" id="guia_det">
                <input type="hidden" name="_id" id="_id" value="0">
                <div class="row">
                    <table id="tbDetalleGuia" class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label for="especie">Especie</label>
                                    <?php
                                        include_once "./Db/GetEspeciesSel.php";
                                    ?>
                                </th>
                                <th>
                                    <label for="producto">Producto</label>
                                    <?php
                                        include_once "./Db/GetProductosSel.php";
                                    ?>                    
                                </th>
                                <th>
                                    <label for="conservacion">Conservación</label>
                                    <?php
                                        include_once "./Db/GetConservacionesSel.php";
                                    ?>        
                                </th>
                                <th>
                                    <label for="envase">Envase</label>
                                    <?php
                                        include_once "./Db/GetEnvasesSel.php";
                                    ?>      
                                </th>
                                <th>
                                    <label for="unidades">Unidades</label>
                                    <input type="text" id="unidades" name="unidades" class="form-control"/>
                                </th>
                                <th>
                                    <label for="peso_neto">Peso neto</label>
                                    <input type="text" id="peso_neto" name="peso_neto" class="form-control"/>
                                </th>
                                <th>
                                    <label for="agregar"></label>
                                    <br>
                                    <input type="button" id="agregar" name="agregar" value= "Agregar" class="btn btn-info" onClick="FormToJson('guia_det', event, Guia_D_D_Save)"/>
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </form>
        </div>    
    </div>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       