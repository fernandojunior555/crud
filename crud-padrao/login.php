<?php
    session_start();
    if (isset($_SESSION['user']))
        header('Location:index.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="acao.php" method="post">
        <fieldset>
            <legend>Login de Usuário</legend>
            <label for="user">User</label>
            <input type="text" name="user" id="user" required><br><br>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" required><br><br>
            <button type="submit" id="acao" name="acao" value="login">Enviar</button>
        </fieldset>
    </form>
</body>
</html>