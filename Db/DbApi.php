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

