<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>
<div class="container">
    <h1>Controle de Acesso</h1>
    <hr>
    <form action="form_login.php" method="post">

    <label class="form-label">Usuário</label>
    <input type="text" name="usuario" class="form-control">

    <label class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control">

    <button type="submit" class="btn btn-primary">Entrar</button>

    </form>
</div>
<?php include_once "../template/rodape.php"; ?>