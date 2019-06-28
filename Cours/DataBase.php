<?php
/**
 * Connexion a la base de donnees
 */
class DataBase 
{
    use fonction;
    
    private $dbname = DataBaseConstante::DB_NAME;
    private $dbhost = DataBaseConstante::DB_HOST; 
    private $dblogin = DataBaseConstante::DB_LOGIN;
   private $dbpass = DataBaseConstante::DB_PASS;
   private $db;

    function __construct()
    {
    //    $this->dbhost = $dbhost;
    //    $this->dbname = $dbname;
    //    $this->dbpass = $dbpass;
    //    $this->dblogin = $dblogin;
       $this->db = new  PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost, $this->dblogin, $this->dbpass);
    }

    public function getDB(){
        if($this->db==null){
            echo "bd init";
            $this->db = new  PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost, $this->dblogin, $this->dbpass);
        }
        echo "bd called";
        return $this->db;
    }

    public function getAll($table_name)
    {
        $req = "SELECT * from ".$table_name;
        $int = $this->getDB()->query($req);
        return $int->fetchAll();
    }
}

