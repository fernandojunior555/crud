<?php 
    include '../header.php'; 
    include 'acao.php'; 

    $acao=isset($_GET['acao']) ? $_GET['acao'] : "";
    $codigo=isset($_GET['codigo']) ? $_GET['codigo'] : "";
    $dados= array();
    if ($acao == 'editar') {
        $dados=findById($codigo);
    }
?>

<div class="container-fluid">
<br>
<a class='btn btn-secondary'href="index.php">Consultar</a>

<form action="acao.php" method="post">
    <fieldset>
        <legend>Cadastro de Tipo de Usuario</legend>
        <div class="row">
            <div class="col-2">
                <label class="form-label" for="codigo">Código</label>
                <input class="form-control" type="text" name="codigo" id="codigo" value="<?php if($acao == 'editar') echo $dados['codigo']; else echo "0"; ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label class="form-label" for="descricao">Descricao :</label>
                <input class="form-control" type="text" name="descricao" id="descricao" placeholder="descricao" value="<?php if($acao == 'editar') echo $dados['descricao']; ?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
                <button class="btn btn-warning" type="submit" value="salvar" name="acao" id="acao">Salvar</button>
            </div>
        </div>
    </fieldset>
</form>   

</div>

<?php include '../footer.php'; ?>