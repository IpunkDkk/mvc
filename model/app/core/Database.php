<?php

class Databese {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct(){
        // data source name
        $dsn = 'mysql:host='.$this->host . ';'. 'dbname=' . $this->db_name;
        $option = [
            PDO::ATTR_PERSISTENT => true, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn , $this->user , $this->pass , $option);
        } catch (PDOException $er) {
            die($er->getMessage());
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param , $isi , $type=null){
        switch(true){
            case is_int($isi) :
                $type = PDO::PARAM_INT;
                break; 
            case is_bool($isi) :
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($isi):
                $type = PDO::PARAM_NULL;
                break;
            default : 
                $type = PDO::PARAM_STR;
        }
        $this->stmt->bindValue($param , $isi , $type);
    }

    public function execute(){
        $this->stmt->execute();
    }
    
    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function singgle(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount();
    }















}



