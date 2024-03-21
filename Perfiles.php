<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post">
        <div class="card" style="width:50%; margin:0 auto">
            <div class="card-header">Perfiles</div>
            <div class="card-body">
                <div class="row">
                    <label for="perfil">Perfil</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 100px;"><label id="id_reg"></label></span>
                        <input type="text" id="perfil" name="perfil" class="form-control" required/>
                    </div>                              
                </div>
                <div class="row">
                    <label for="nombre_perfil">Nombre perfil</label>
                    <div class="input-group mb-3">
                        <input type="text" id="nombre_perfil" name="nombre_perfil" class="form-control" required/>
                    </div>                              
                </div>             
            </div>
            <div class="card-footer">    
                <div class="col-md-10">
                    <input type="submit" value="Agregar" name="agregar" id="agregar" class="btn btn-success">
                    <?php 
                    include_once "./Db/Perfiles.php"; 
                    ?>                    
                </div>
            </div>
            <br>
            <div class="card-body">
                <?php include_once "./Db/GetPerfilesTB.php"; ?>
            </div>
        </div>
        <input type="hidden" name="id" id="id" value="0">
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       