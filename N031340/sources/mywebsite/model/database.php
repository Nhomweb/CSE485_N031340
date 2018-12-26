<?php
ob_start();
require_once("config.php");

class database{
    public $_mysqli;
    public $_sql;
    public function __construct(){
        
                $this->_mysqli = new mysqli("localhost",'root','','mywebsite');
                mysqli_query($this->_mysqli, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

        if($this->_mysqli->connect_errno){
            echo "Lỗi kết nối: ".$this->_mysqli->connect_error;
            die;
        }
    }
    public function setQuery($sql){
        $this->_sql = $sql;
    }
    public function execute(){
        $result = $this->_mysqli->query($this->_sql);
        return $result;
    }
    public function loadAllRows(){
        $execute = $this->execute();
        $dataList = [];
        if($execute){
            while($row = $execute->fetch_object()){
                array_push($dataList, $row);
            }
        }
        return $dataList;
    }
    public function loadRow(){
        $execute = $this->execute();
        $row = false;
        if($execute){
            $row = $execute->fetch_object();
        }
        return $row;
    }
    public function getLastId(){
        return $this->_mysqli->insert_id;
    }
    public function disconnect(){
        $this->_mysqli = NULL;
    }
}
?>