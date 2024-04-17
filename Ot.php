<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post" id="Ot">
        <div class="card" style="width:100%; margin:0 auto">
            <div class="card-header">Órden de trabajo</div>
            <div class="card-body">

                <!-- Id ot -->
                <div class="row">            
                    <input type="hidden" name="id" id="id" value="0">
                    <!-- <input type="hidden" name="id_guia" id="id_guia" value="0"> -->
                    <label for="id_ot">Id ot</label>
                    <div class="input-group mb-3">
                    <input type="text" id="id_ot" name="id_ot" class="form-control" readonly/>
                </div>                                
                </div>                 
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
                        <!-- <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span> -->
                        <input type="text" id="guia" name="guia" class="form-control" required onkeypress="return soloNumeros(event)"/>
                        <button class="btn btn-outline-secondary btn-primary" type="button" id="btnBuscar" onclick="getDetalleGuia(proveedor.value, guia.value)">Buscar</button>
                    </div>                     
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="lote">Lote</label>
                        <input type="text" id="lote" name="lote" class="form-control" required/>
                    </div>
                    <div class="col-md-3">
                        <label for="restricciones_origen">Restricciones de origen</label>
                        <input type="text" id="restricciones_origen" name="restricciones_origen" class="form-control" required/>
                    </div>         
                    <div class="col-md-3">
                        <label for="">Configuración de peso</label>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="peso_f_V_0">Peso fijo</label>
                                <input type="radio" id="peso_f_v_0" name="peso_f_v" class="form-check-input" checked value="0"/>
                                <label for="peso_f_V_1">Peso variable</label>
                                <input type="radio" id="peso_f_v_1" name="peso_f_v" class="form-check-input" value="1"/>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="row" id="detalleGuia"></div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-3">
                        <input type="button" id="agregar" name="agregar" class="btn btn-success" value="Agregar" onClick="FormToJson('Ot', event, Ot_Save)"/>
                    </div>
                </div>
            </div>
        </div>     
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       