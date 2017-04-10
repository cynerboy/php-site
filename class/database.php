<?php

require_once ('config.php');

class Database{

    private $connection;
    private $last_query;

    public function __construct(){

        $this->Open_connection();

    }

    private function Open_connection(){

        $this->connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        if (!$this->connection){
            die("Database config failed");
        }

    }

    public function prep($value){

        $value = mysqli_real_escape_string($this->connection, $value);
        return $value;

    }

    public function query($sql){

        $this->last_query = $sql;
        $sql = mysqli_query($this->connection, $sql);
        $sql = $this->confirm_query($sql);
        return $sql;


    }

    private function confirm_query($sql){

        if (!$sql){
            die('Your Query failed: '.$this->last_query);
        }else{
            return $sql;
        }

    }

    public function fetch_assoc($result_set){

        return mysqli_fetch_assoc($result_set);

    }

    public function Close_connection(){

        if (isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }

    }

}

$db = new Database();
