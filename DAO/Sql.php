<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){
        $this -> conn = new PDO('mysql:dbname=db_php7; host:localhost', 'root','');
    }

    private function setParams($statment, $paramters=array()){
        foreach($paramters as $key =>$value){
            $this->setParam($key, $value, '');
        }
     }
     
    private function setParam($key, $value, $statment){
         $statment->bindParam($key, $value);
     }
   
    public function consulta($rawQuery,$params=array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt ->execute();
        return $stmt;
       
    
    }
    public function select($rawQuery, $params=array()):array{
        $stmt= $this->consulta($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 
}

?>