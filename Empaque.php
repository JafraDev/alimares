<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post" id="Empaque">
        <div class="card" style="width:100%; margin:0 auto">
            <div class="card-header">Empaque</div>
            <div class="card-body">
                <!-- Proveedor -->
                <div class="row">
                    <label for="proveedor">Proveedor</label>
                    <div class="input-group mb-3">
                        <?php
                            include_once "./Db/GetProveedoresSel.php";
                        ?>
                    </div>                                
                </div>  
                <!-- Id ot -->
                <div class="row">
                    <label for="guia">Ot</label>
                    <div class="input-group mb-3">
                        <input type="text" id="ot" name="ot" class="form-control" required onkeypress="return soloNumeros(event)"/>
                        <button class="btn btn-outline-secondary btn-primary" type="button" id="btnBuscar" onclick="getDetalleOt(proveedor.value, ot.value)">Buscar</button>
                    </div>                     
                </div>   
                <div id="detalleOt"></div>
                <!-- Caja -->
                <div class="row">
                    <label for="guia">Caja</label>
                    <div class="input-group mb-3">
                        <input type="text" id="caja" name="caja" class="form-control" required/>
                        <button class="btn btn-outline-secondary btn-primary" type="button" id="btnAgregar">Aceptar</button>
                    </div>                     
                </div>            

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-3">
                        <input type="button" id="agregar" name="agregar" class="btn btn-success" value="Agregar" onClick="FormToJson('Empaque', event, Empaque_Save)"/>
                    </div>
                </div>
            </div>
        </div>     
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       