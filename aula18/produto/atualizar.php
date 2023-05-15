<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) 
           && isset($_POST["preco"]))
{
$id =        $_POST["id"];        
$nome =      $_POST["nome"];
$descricao = $_POST["descricao"];
$preco =     $_POST["preco"];
$foto = "semfoto.png";

//String com o comando SQL para ser executado no DB
$sql = "UPDATE produto SET 
`nome`= ?, `descricao`= ?, `preco`= ?, `foto`= ? 
WHERE  `idproduto`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: produtos.php");
