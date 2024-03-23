<?php include_once "./Templates/Page_Content_Head.php";?>
<?php include_once "./Templates/Page_Content_Form_Init.php";?>
    <form action="" method="post">
        <div class="card" style="width:50%; margin:0 auto">
            <div class="card-header">Calibres</div>
            <div class="card-body">
                <div class="row">
                    <label for="calibre">Calibre</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 35px;"><label id="id_reg"></label></span>
                        <input type="text" id="calibre" name="calibre" class="form-control" required/>
                    </div>                              
                </div>
            </div>
            <div class="card-footer">    
                <div class="col-md-4">
                    <input type="submit" value="Agregar" name="agregar" id="agregar" class="btn btn-success">
                    <?php 
                    include_once "./Db/Calibres.php"; 
                    ?>                    
                </div>
            </div>
            <br>
            <div class="card-body">
                <?php include_once "./Db/GetCalibresTB.php"; ?>
            </div>
        </div>
        <input type="hidden" name="id" id="id" value="0">
    </form>
<?php include_once "./Templates/Page_Content_Form_End.php"?>       