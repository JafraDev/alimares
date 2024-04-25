<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post">
        <div class="card" style="width:50%; margin:0 auto">
            <div class="card-header">Usuarios</div>
            <div class="card-body">
                <div class="row">
                    <label for="rut">Rut</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span>
                        <input type="text" id="rut" name="rut" class="form-control" required/>
                    </div>                              
                </div>                
                <div class="row">
                    <label for="nombre">Nombre</label>
                    <div class="input-group mb-3">
                        <input type="text" id="nombre" name="nombre" class="form-control" required/>
                    </div>                              
                </div>                
                <div class="row">
                    <label for="usuario">Usuario</label>
                    <div class="input-group mb-3">
                        <input type="text" id="usuario" name="usuario" class="form-control" required/>
                    </div>                              
                </div>
                <div class="row">
                    <label for="contraseña">Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" id="contraseña" name="contraseña" class="form-control" required/>
                    </div>                              
                </div>                
                <div class="row">
                    <label for="confirme">Confirme contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" id="confirme" name="contraseña" class="form-control" required/>
                    </div>                              
                </div>          
                <div class="row">
                    <label for="confirme">Perfil</label>
                    <div class="input-group mb-3">
                        <?php
                            include_once "./Db/GetPerfilesSelUsuario.php";
                        ?>
                    </div>                              
                </div>                                
                <div class="row">
                    <label for="activo">Activo</label>
                    <div class="mb-3">
                        <input type="checkbox" id="activo" name="activo" class="form-check-input" checked/>
                    </div>                              
                </div>     
            </div>
            <div class="card-footer">    
                <div class="col-md-4">
                    <input type="submit" value="Agregar" name="agregar" id="agregar" class="btn btn-success">
                    <?php 
                        include_once "./Db/Usuarios.php"; 
                    ?>                    
                </div>
            </div>
            <br>
            <div class="card-body">
                <?php 
                    include_once "./Db/GetUsuariosTB.php"; 
                ?>
            </div>
        </div>
        <input type="hidden" name="id" id="id" value="0">
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       