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
    $stmt = $conexao->prepare("DELETE FROM tarefa where codigo = :codigo");
    $stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
    $stmt->execute();
    header("location:index.php");
}

function findById($codigo){
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("SELECT * FROM tarefa WHERE codigo = $codigo;");
    $result= $conexao->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function editar(){
    echo "editar";
    $codigo = isset($_POST['codigo']) ? $_POST['codigo']: 0;
    $tarefa = isset($_POST['tarefa']) ? $_POST['tarefa']: 0;
    $data = isset($_POST['data']) ? $_POST['data']: 0;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao']: 0;
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("UPDATE tarefa SET tarefa = '$tarefa', data = '$data', descricao = '$descricao' WHERE codigo = '$codigo'");
    header("location:index.php");
}

function salvar(){
    echo "salvar";
    $tarefa = isset($_POST['tarefa']) ? $_POST['tarefa']: 0;
    $data = isset($_POST['data']) ? $_POST['data']: 0;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao']: 0;
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("INSERT INTO tarefa (tarefa, data, descricao) VALUES ('$tarefa', '$data', '$descricao');");
    header("location:index.php");
}

?>