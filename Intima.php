<?php

require_once './Dao.php';

class Intima extends Dao{
    
    function __construct() {
        parent::__construct();
    }

    public function buscarTodos(){
        $sql   = "SELECT protocolo.id, protocolo.numero,"
                . " intimador.nome as intimador,"
                . " modo.descricao as modo,"
                . " status.descricao as status,"
                . " protocolo.data_visita,"
                . " protocolo.obs"
                . " FROM protocolo "
                . " INNER JOIN intimador ON protocolo.idintimador=intimador.id "
                . " INNER JOIN modo ON protocolo.idmodo=modo.id "
                . " INNER JOIN status ON protocolo.idstatus=status.id "
                ;
        
        $query = $this->con->query($sql);
        if(!$query){
            echo "Erro ao buscar os protocolos";
            print_r($query->errorInfo());
        }
        return $query->fetchAll();
    }
    public function buscarModo(){
        $sql = "SELECT * FROM modo";
        $query = $this->con->query($sql);
        return $query->fetchAll();
    }
  
    public function insere($protocolo){
       $sql = "INSERT INTO protocolo(numero, idmodo, data_visita) "
                . " VALUES(:numero, :idmodo, CURDATE())";
        $query = $this->con->prepare($sql);
        $r = $query->execute($protocolo);
        if($r){
            return true;
        }else{
            echo "Erro ao inserir novo protocolo";
            print_r($protocolo);
            print_r($query->errorInfo());
        }
    }
    

 
   
   
}

