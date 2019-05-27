<?php


require_once './Ocorrencia.php';
$daoOcorrencia = new Ocorrencia();


if(!isset($_GET['acao'])){
    $acao = "index";
}else{
    $acao = $_GET['acao'];
}

//
if($acao == "index"){
    $listaProtocolo = $daoOcorrencia->buscarTodos();
    require './cabecalho.php';
    require './rodape.php';   
}else if($acao == "cadastrar"){
    $protocolo = $_POST;
    $r = $daoOcorrencia->insere($protocolo);
    if($r) header('Location: crudOcorrencia.php?acao=novo');
   
}else if($acao == "novo"){
    $listaStatus = $daoOcorrencia->buscarStatus();
    require './cabecalho.php';
    require './formOcorrencia.php';
    require './rodape.php';
}

