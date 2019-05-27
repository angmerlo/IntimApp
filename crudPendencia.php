<?php


require_once './Pendencia.php';
$daoPendencia = new Pendencia();

if(!isset($_GET['acao'])){
    $acao = "index";
}else{
    $acao = $_GET['acao'];
}
//
if($acao == "index"){
    $listaProtocolo = $daoPendencia->buscarTodos();
    require './cabecalho.php';
    require './listaPendencia.php';
    require './rodape.php';   
}else if($acao == "cadastrar"){
    $protocolo = $_POST;
    $r = $daoPendencia->insere($protocolo);
    if($r) header('Location: crudPendencia.php?acao=novo');
   
}else if($acao == "novo"){
    $listaStatus = $daoPendencia->buscarStatus();
    require './cabecalho.php';
    require './formPendencia.php';
    require './rodape.php';
}