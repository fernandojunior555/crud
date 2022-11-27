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
        break;
    }
}

function excluir(){    
    $codigo = isset($_GET['codigo']) ? $_GET['codigo']:0;
    $conexao = Conexao::getInstance();
    $stmt = $conexao->prepare("DELETE * FROM tipousuario WHERE codigo = :codigo");
    $stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);  
    $stmt->execute();
    header("location:index.php");
}

function editar(){
    $dados = formToArray();
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("UPDATE tipousuario SET descricao = '$dados[descricao]' WHERE codigo = $dados[codigo];");
    header("location:index.php");
}

function salvar(){
    $dados = formToArray();
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("INSERT INTO `2info`.`tipousuario` (`descricao`) VALUES ('$dados[descricao]');");
    header("location:index.php");
}

function formToArray(){
    $codigo = isset($_POST['codigo']) ? $_POST['codigo']: 0;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao']: 0;

    $dados = array(
        'codigo' => $codigo,
        'descricao' => $descricao,
    );
return $dados;

}

function findById($codigo){
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("SELECT * FROM tipousuario WHERE codigo = $codigo;");
    $result = $conexao->fetch(PDO::FETCH_ASSOC);
    return $result; 
}

?>