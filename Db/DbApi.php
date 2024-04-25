<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once "Db.php";
    class DbApi extends Db{
        /********** Alimares **********/
        public function getEspecies(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                especies e
            order by nombre
            "
            );
            return $dataArray;
        }   
        public function getProductos(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                productos p
            order by nombre
            "
            );
            return $dataArray;
        }   
        public function getCalibres(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                calibres c
            order by nombre
            "
            );
            return $dataArray;
        }  
        public function getUsuarios(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                usuarios u
            order by nombre
            "
            );
            return $dataArray;
        }  
        public function getPerfiles(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                perfiles p
            order by nombre_perfil
            "
            );
            return $dataArray;
        }     
        public function getMenu(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                menu m
            order by nombre_menu
            "
            );
            return $dataArray;
        }  
        public function getPerfilMenus($perfil){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            pm.*,
            m.nombre_menu menu
            from
                perfiles_menus pm
                join menu m on m.id_menu = pm.id_menu 
                where pm.perfil ='$perfil'
                and pm.nulo = 0
                order by m.nombre_menu
            "
            );
            return $dataArray;
        }  
        public function getCalidades(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                calidades c
            order by nombre
            "
            );
            return $dataArray;
        } 
        public function getConservaciones(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                conservaciones c
            order by nombre
            "
            );
            return $dataArray;
        }              
        public function getEnvases(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                envases e
            order by nombre
            "
            );
            return $dataArray;
        }         
        public function getClientes(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                clientes c
            order by razon_social
            "
            );
            return $dataArray;
        }           
        public function getProveedores(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                proveedores p
            order by razon_social
            "
            );
            return $dataArray;
        } 
        public function getGuiaProveedorNumero($idProveedor, $n_guia){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            gdc.id_guia,gdc.num_guia,gdc.id_proveedor,gdc.fecha_recepcion,gdc.decla_jurada,gdc.decla_garantia,gdc.id_origen,gdc.origen,
            gdd.id_guia id_guia_cab,gdd.id_especie,gdd.id_producto,gdd.id_conservacion,gdd.id_envase,gdd.unidades,gdd.peso,gdd.id_reg,
            e.nombre especie,
            p.nombre producto,
            c.nombre conservacion,
            e2.nombre envase,
            COALESCE(ot.id_guia, 0) ot_guia_c,
            COALESCE(ot.id_reg, 0) ot_guia_d
            from
                guias_d_cab gdc
	            left join guias_d_det gdd on gdd.id_guia = gdc.id_guia
	            left join especies e on e.id_especie = gdd.id_especie 
	            left join productos p on p.id_producto = gdd.id_producto 
	            left join conservaciones c on c.id_conservacion = gdd.id_conservacion 
	            left join envases e2 on e2.id_envase = gdd.id_envase
	            left join ot on ot.id_guia = gdc.id_guia and ot.id_reg	= gdd.id_reg             
            where
                gdc.nulo = 0
                and (gdd.nulo = 0 or gdd.nulo IS NULL) 
                and gdc.num_guia = $n_guia
                and gdc.id_proveedor = $idProveedor
            "
            );
            return $dataArray;
        }  
        public function getCcultivos(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                c_cultivos c
            order by nombre
            "
            );
            return $dataArray;
        }     
        public function getOrigenes(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                origenes o
            order by nombre
            "
            );
            return $dataArray;
        }  
        public function getP_proceso(){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
            *
            from
                plantas_proceso
            order by nombre
            "
            );
            return $dataArray;
        }  
        public function getOtDet($idOt, $idProveedor){
            $dataArray = [];
            $dataArray =  $this->execQry(
            "
            select
                ot.*,
                p.nombre_fantasia \"Proveedor\",
                e.nombre \"Especie\",
                p2.nombre \"Producto\",
                c.nombre \"Conservacion\",
                e2.nombre \"Envase\",
                gdd.unidades \"Unidades\",
                gdd.peso \"Peso\"
            from
                ot
                join guias_d_cab gdc  ON gdc.id_guia = ot.id_guia 
                join guias_d_det gdd  on gdd.id_reg = ot.id_reg and gdd.id_guia = gdc.id_guia 
                join proveedores p on p.id_proveedor = gdc.id_proveedor 
                join especies e on e.id_especie = gdd.id_especie 
                join productos p2 on p2.id_producto = gdd.id_producto 
                join conservaciones c on c.id_conservacion = gdd.id_conservacion 
                join envases e2 on e2.id_envase = gdd.id_envase 	
                where 
                ot.id_ot = $idOt
                and gdc.id_proveedor = $idProveedor
            "
            );
            return $dataArray;
        }                                                   
        /******************************/
        public function insertReg($my_stm){
            $result = $this->execNoQry($my_stm);
            return $result;
        } 
        public function execQuery($qry){
            $dataArray = [];
            $dataArray =  $this->execQry($qry);
            return $dataArray;   
        }                
    }             
?>

