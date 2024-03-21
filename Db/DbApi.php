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

