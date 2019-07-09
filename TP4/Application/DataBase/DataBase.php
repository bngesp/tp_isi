<?php

/**
 * Connexion  a la base de donnees

 */

namespace Application\DataBase;

class DataBase
{
	private $db_host;
	private $db_name;
	private $db_pass;
	private $db_user;
	private $db;

    /**
     * DataBase constructor.
     * @param $bd_host
     * @param $db_name
     * @param $db_pass
     * @param $db_user
     */
    public function __construct($bd_host="localhost", $db_name="forum", $db_pass="root", $db_user="root")
    {
        $this->db_host = $bd_host;
        $this->db_name = $db_name;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
    }

    public function getDB(){
        if ($this->db == null){
            $this->db = new \PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_pass);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
            return $this->db;

    }


    public function traitement($sql){
        $el = $this->getDB()->query($sql);
        $all = $el->fetchAll(\PDO::FETCH_OBJ);
        return  $all;
    }

    public function traitement2($sql, $el, $class){
        $req = $this->getDB()->prepare($sql);
        $req->execute($el);
        return $req->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * @return mixed
     */
    public function getBdHost()
    {
        return $this->bd_host;
    }

    /**
     * @param mixed $bd_host
     */
    public function setBdHost($bd_host)
    {
        $this->bd_host = $bd_host;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
     * @param mixed $db_name
     */
    public function setDbName($db_name)
    {
        $this->db_name = $db_name;
    }

    /**
     * @return mixed
     */
    public function getDbPass()
    {
        return $this->db_pass;
    }

    /**
     * @param mixed $db_pass
     */
    public function setDbPass($db_pass)
    {
        $this->db_pass = $db_pass;
    }

    /**
     * @return mixed
     */
    public function getDbUser()
    {
        return $this->db_user;
    }

    /**
     * @param mixed $db_user
     */
    public function setDbUser($db_user)
    {
        $this->db_user = $db_user;
    }




}