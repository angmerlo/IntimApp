<?php


require_once './Intima.php';
$daoIntima = new Intima();

if(!isset($_GET['acao'])){
    $acao = "index";
}else{
    $acao = $_GET['acao'];
}
//
if($acao == "index"){
    $listaProtocolo = $daoIntima->buscarTodos();
    require './cabecalho.php';
    require './listaIntima.php';
    require './rodape.php';   
}else if($acao == "cadastrar"){
    $protocolo = $_POST;
    $r = $daoIntima->insere($protocolo);
    if($r) header('Location: crudIntima.php?acao=novo');
   
}else if($acao == "novo"){
    $listaModo = $daoIntima->buscarModo();
    require './cabecalho.php';
    require './formIntima.php';
    require './rodape.php';
}