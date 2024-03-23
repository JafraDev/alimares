<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post">
        <div class="card" style="width:50%; margin:0 auto">
            <div class="card-header">Clientes</div>
            <div class="card-body">
                <div class="row">
                    <label for="rut">Rut</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span>
                        <input type="text" id="rut" name="rut" class="form-control" required/>
                    </div>                              
                </div>
                <div class="row">
                    <label for="razon_social">Razón social</label>
                    <div class="input-group mb-3">
                        <input type="text" id="razon_social" name="razon_social" class="form-control" required/>
                    </div>                              
                </div>
                <div class="row">
                    <label for="nombre_fantasia">Nombre de fantasía</label>
                    <div class="input-group mb-3">
                        <input type="text" id="nombre_fantasia" name="nombre_fantasia" class="form-control"/>
                    </div>                              
                </div>
                <div class="row">
                    <label for="domicilio_comercial">Domicilio comercial</label>
                    <div class="input-group mb-3">
                        <input type="text" id="domicilio_comercial" name="domicilio_comercial" class="form-control" required/>
                    </div>                              
                </div>
            </div>
            <div class="card-footer">    
                <div class="col-md-4">
                    <input type="submit" value="Agregar" name="agregar" id="agregar" class="btn btn-success">
                    <?php 
                        include_once "./Db/Clientes.php"; 
                    ?>                    
                </div>
            </div>
            <br>
            <div class="card-body">
                <?php include_once "./Db/GetClientesTB.php"; ?>
            </div>
        </div>
        <input type="hidden" name="id" id="id" value="0">
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       