<?php
    session_start();
    if (!isset($_SESSION['user']))
        header("location:login.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h1>Página Principal</h1>
    <a href="acao.php?acao=logoff">Logoff</a>
    <?php
        echo "Bem-vindo ".$_SESSION['user'];
    ?>
</body>
</html>