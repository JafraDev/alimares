<?php
class Db{
    private $host = 'localhost';
    private $db = 'Emat';
    private $user = 'alimares';
    private $password = 'alim@2024';
    protected function pdo_Connect(){
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
        $pdo = new PDO($dsn, $this->user, $this->password);
        return $pdo;
    }
    protected function my_Connect(){
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        $conn->set_charset("utf8");
        return $conn;
    }
    protected function execQry($query){
        $data =  mysqli_query($this->my_Connect(), $query);
        $dataArray = [];
        while($consulta = mysqli_fetch_array($data)){
            $dataArray[] = $consulta;
        }
        return $dataArray;
    }
    protected function execNoQry($stm){
        $data = $this->my_Connect()->query($stm);
    }
    public function setMyConnection(){
        return $this->my_Connect();
    }
    public function setPdoConnection(){
        return $this->pdo_Connect();
    }    
}