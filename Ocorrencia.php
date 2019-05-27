<?php

require_once './Dao.php';

class Ocorrencia extends Dao{
    
    function __construct() {
        parent::__construct();
    }

    public function buscarTodos(){
        $sql   = "SELECT protocolo.id, protocolo.numero,"
                . " status.descricao as status,"
                . " protocolo.data_visita,"
                . " protocolo.obs"
                . " FROM protocolo "
                . " INNER JOIN intimador ON protocolo.idintimador=intimador.id "
                . " INNER JOIN status ON protocolo.idstatus=status.id "
                ;
        
        $query = $this->con->query($sql);
        if(!$query){
            echo "Erro ao buscar os protocolos";
            print_r($query->errorInfo());
        }
        return $query->fetchAll();
    }
    public function buscarStatus(){
        $sql = "SELECT * FROM status";
        $query = $this->con->query($sql);
        return $query->fetchAll();
    }
    
    public function buscarProtocolo(){
        $sql = "SELECT * FROM protocolo";
        $query = $this->con->query($sql);
        return $query->fetchAll();
    }
  
    public function insere($protocolo){
        $sql = "INSERT INTO protocolo(numero, idstatus, data_visita) "
                . " VALUES(:numero, 10, CURDATE())";
        $query = $this->con->prepare($sql);
        $r = $query->execute($protocolo);
        if($r){
            echo "Protocolo: $r, lançado com sucesso!!";
            return true;
        }else{
            echo "Erro ao inserir novo protocolo";
            print_r($protocolo);
            print_r($query->errorInfo());
        }
    }
    
 
   
   
}

