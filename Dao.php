<?php

/**
 * Description of Dao
 *
 * @author 31137
 */
class Dao {
    
    protected $con;
    
    
//$dsn = "mysql:host=localhost;dbname=trab_ads_123";
//$usuario = "root";
//$senha   = "root";
    
    function __construct() {
        $this->con = new PDO('mysql:host=localhost;dbname=rotina',
               "root", "");
    }
    
    
    /*
        function __construct() {
        $this->con = new PDO('pgsql:host=localhost;dbname=rotina',
               "postgres", "masterkey");
    }
    */
    
       
    public function getCon() {
        return $this->con;
    }
}


