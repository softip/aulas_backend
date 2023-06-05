<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>

<div class="container">
    <h1>Cadastro de Produto</h1>
    <hr>

    
    <form 
    action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="nome" class="form-label">Nome</label><br>
       <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $produto['nome'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $produto['idproduto'] ?? ""; ?>"><br>

       <label for="descricao" class="form-label">Descrição</label><br>
       <textarea  class="form-control" name="descricao" id="descricao"><?php echo $produto['descricao'] ?? ""; ?></textarea><br>

       <label for="preco" class="form-label">Preço</label><br>
       <input class="form-control" type="number" step="0.01" name="preco" id="preco" value="<?php echo $produto['preco'] ?? "0.00"; ?>"><br>

       <label for="foto" class="form-label">Foto</label><br>
       <input class="form-control" type="file" name="foto" id="foto"><br>

       <br>
       <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
    </div>

    <?php require_once "../template/rodape.php";  ?>