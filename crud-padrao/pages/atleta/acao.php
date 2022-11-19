<?php
require_once "../../conf/Conexao.php";
    
$acao = "";
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':  $acao = isset($_GET['acao']) ? $_GET['acao'] : ""; break;
    case 'POST': $acao = isset($_POST['acao']) ? $_POST['acao'] : ""; break;
}

switch($acao){

    case 'excluir': excluir(); break;
    case 'salvar': {
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
        if ($codigo == 0) 
            salvar();
        else 
            editar();
    } ; break;
}

function excluir(){    
    $codigo = isset($_GET['codigo']) ? $_GET['codigo']: 0;
    $conexao = Conexao::getInstance();
    $stmt = $conexao->prepare("DELETE FROM atleta where codigo = :codigo");
    $stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
    $stmt->execute();
    header("location:index.php");
}

function findById($codigo){
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("SELECT * FROM atleta WHERE codigo = $codigo;");
    $result= $conexao->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function editar(){
    echo "editar";
    $codigo = isset($_POST['codigo']) ? $_POST['codigo']: 0;
    $nome = isset($_POST['nome']) ? $_POST['nome']: 0;
    $peso = isset($_POST['peso']) ? $_POST['peso']: 0;
    $altura = isset($_POST['altura']) ? $_POST['altura']: 0;
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("UPDATE atleta SET nome = '$nome',peso = '$peso', altura = '$altura' WHERE codigo = '$codigo'");
    header("location:index.php");
}

function salvar(){
    echo "salvar";
    $nome = isset($_POST['nome']) ? $_POST['nome']: 0;
    $peso = isset($_POST['peso']) ? $_POST['peso']: 0;
    $altura = isset($_POST['altura']) ? $_POST['altura']: 0;
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("INSERT INTO atleta (nome, peso, altura) VALUES ('$nome', $peso, $altura);");
    header("location:index.php");
}

?>