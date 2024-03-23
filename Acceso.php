<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
<script>
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
    function accesosperfil(){
        // 1. Crea un nuevo objeto XMLHttpRequest
        let xhr = new XMLHttpRequest();
        // 2. Configuración: solicitud GET 
        var e = document.getElementById("perfil");
        var value = e.options[e.selectedIndex].value;
        var url = `./Db/GetPerfilesMenu.php?perfil=${value}`;
        xhr.open('GET', url);
        // 3. Envía la solicitud a la red
        xhr.send();
        // 4. Esto se llamará después de que la respuesta se reciba
        xhr.onload = function() {
            if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
                alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
            } else { // muestra el resultado
                // alert(`Hecho, obtenidos ${xhr.response.length} bytes`); // Respuesta del servidor
                // console.log(xhr.response);
                document.getElementById("accesos_actuales").innerHTML = xhr.response;
            }
        };
        // xhr.onprogress = function(event) {
        //     if (event.lengthComputable) {
        //         alert(`Recibidos ${event.loaded} de ${event.total} bytes`);
        //     } else {
        //         alert(`Recibidos ${event.loaded} bytes`); // sin Content-Length
        //     }
        // };
        xhr.onerror = function() {
            alert("Solicitud fallida");
        };
    }
    function delAccesosPerfil(id_menu, perfil){
        if(!confirm("¿Confirma que desea borrar registro seleccionado?")){
            return;                
        }
        let xhr = new XMLHttpRequest();
        var e = document.getElementById("perfil");
        var value = e.options[e.selectedIndex].value;
        var url = `./Db/DelPerfilesMenu.php?id_menu=${id_menu}&perfil=${perfil}`;
        xhr.open('GET', url);
        xhr.send();
        xhr.onload = function() {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                // alert(`Hecho, obtenidos ${xhr.response.length} bytes`);
                alert(xhr.response);
                accesosperfil();
            }
        };
        // xhr.onprogress = function(event) {
        //     if (event.lengthComputable) {
        //         alert(`Recibidos ${event.loaded} de ${event.total} bytes`);
        //     } else {
        //         alert(`Recibidos ${event.loaded} bytes`); // sin Content-Length
        //     }
        // };
        xhr.onerror = function() {
            alert("Solicitud fallida");
        };
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
        <div class="card-body">
        <div class="row">
            <!-- <label for="menuperfil">Acceso actual</label> -->
                <div id="accesos_actuales" class="input-group mb-3"></div>                              
            </div>
        </div>
    </div>
    <!-- <input type="hidden" name="id" id="id" value="0"> -->
</form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       