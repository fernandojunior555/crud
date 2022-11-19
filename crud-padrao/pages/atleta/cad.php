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
        <legend>Cadastro de Atleta</legend>
        <div class="row">
            <div class="col-2">
                <label class="form-label" for="codigo">Código</label>
                <input class="form-control" type="text" name="codigo" id="codigo" value="<?php if($acao == 'editar') echo $dados['codigo']; else echo "0"; ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label class="form-label" for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Informe seu nome" value="<?php if($acao == 'editar') echo $dados['nome']; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label class="form-label" for="peso">Peso (kg)</label>
                <input class="form-control" type="text" name="peso" id="peso" placeholder="78.5" value="<?php if($acao == 'editar') echo $dados['peso']; ?>"required>
            </div>
            <div class="col-2">
                <label class="form-label" for="altura">Altura (m)</label>
                <input class="form-control" type="text" name="altura" id="altura" placeholder="1.78" value="<?php if($acao == 'editar') echo $dados['altura']; ?>" required>
            </div>    
        </div>
        <br>
        <div class="row">
            <div class="col-2">
                <button class="form-control btn btn-primary" type="submit" value="salvar" name="acao" id="acao">Salvar</button>
            </div>
        </div>
    </fieldset>
</form>   

</div>

<?php include '../footer.php'; ?>