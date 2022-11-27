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
    $stmt = $conexao->prepare("DELETE FROM usuario WHERE codigo = :codigo");
    $stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);  
    $stmt->execute();
    header("location:index.php");
}

function editar(){
    
    $dados = formToArray();

    $conexao = Conexao::getInstance();

    $sql = "UPDATE usuario SET nome = '".$dados['nome'].
           "' WHERE codigo = ".$dados['codigo'].";";

    $conexao = $conexao->query($sql);
    header("location:index.php");
}

function salvar(){
    
    $dados = formToArray();

    //var_dump($dados);

    $conexao = Conexao::getInstance();

    $sql = "INSERT INTO usuario (nome) 
            VALUES ('".$dados['nome']."')";
    
    $conexao = $conexao->query($sql);
    header("location:index.php");
}

function formToArray(){
    $codigo = isset($_POST['codigo']) ? $_POST['codigo']: 0;
    $nome = isset($_POST['nome']) ? $_POST['nome']: 0;
    $user = isset($_POST['user']) ? $_POST['user']: 0;
    $pass = isset($_POST['pass']) ? $_POST['pass']: 0;
    $email = isset($_POST['email']) ? $_POST['email']: 0;
    $tipoUsuario_codigo = isset($_POST['tipoUsuario_codigo']) ? $_POST['tipoUsuario_codigo']: 0;

    $dados = array(
        'codigo' => $codigo,
        'nome' => $nome,
        'user' => $user,
        'pass' => $pass,
        'email' => $email
    );

    return $dados;

}


function findById($codigo){
    $conexao = Conexao::getInstance();
    $conexao = $conexao->query("SELECT * FROM usuario WHERE codigo = $codigo;");
    $result = $conexao->fetch(PDO::FETCH_ASSOC);
    return $result; 
}

?>