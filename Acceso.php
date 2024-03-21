<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
<script>
    // document.addEventListener("DOMContentLoaded", () => {

    // }
    function onSave(){
        var e = document.getElementById("perfil");
        var value = e.options[e.selectedIndex].value;
        if(value == "0"){
            alert("Debe seleccionar perfil");
            return false;
        }
        var options = document.getElementById('menus').selectedOptions;
        var values = Array.from(options).map(({ value }) => value);
        if(values.length == 0){
            alert("Debe seleccionar al menos una opción de menu");
            return false;
        }
    }
</script>
<form action="" method="post">
    <div class="card" style="width:50%; margin:0 auto">
        <div class="card-header">Configuración de acceso</div>
        <div class="card-body">
            <div class="row">
                <label for="perfiles">Perfil</label>
                <div class="input-group mb-3">
                    <?php
                        include_once "./Db/GetPerfilesSel.php";
                    ?>
                </div>                              
            </div>
            <div class="row">
                <label for="menu">Menus</label>
                <div class="input-group mb-3">
                    <?php
                        include_once "./Db/GetMenusSel.php";
                    ?>
                </div>                              
            </div>
        </div>
        <div class="card-footer">    
            <div class="col-md-4">
                <input type="submit" value="Guardar" name="guardar" id="guardar" class="btn btn-success" onclick="onSave()"> 
                <?php 
                    include_once "./Db/Acceso.php"; 
                ?>                    
            </div>
        </div>        
    </div>
    <!-- <input type="hidden" name="id" id="id" value="0"> -->
</form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       