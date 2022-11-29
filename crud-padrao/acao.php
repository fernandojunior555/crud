<?php

    $acao = "";
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':  
            $acao = isset($_GET['acao']) ? $_GET['acao'] : ""; 
            break;
        case 'POST': 
            $acao = isset($_POST['acao']) ? $_POST['acao'] : ""; 
            break;
    }

    if ($acao == "login"){
        $user = isset($_POST['user']) ? $_POST['user'] : "";
        $pass = isset($_POST['pass']) ? $_POST['pass'] : "1";

        if ($user == 'admin' and $pass == 'admin') {
            session_start();
            $_SESSION['user'] = $user;
            header('Location:index.php');
        }
        else
            header('Location:login.php');
    }elseif ($acao == "logoff"){
        session_start();
        session_destroy();
        header('Location:login.php');
    }
          
?>