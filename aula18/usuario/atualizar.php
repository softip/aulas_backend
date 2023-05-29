<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["login"]) 
           && isset($_POST["senha"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$id = $_POST['id'];
$nome =  $_POST["nome"];
$login = $_POST["login"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$foto =  $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "UPDATE usuario SET 
`nome`= ?, `login`= ?, `senha`= ?, `foto`= ? 
WHERE  `idusuario`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssssi", $nome, $login, $senha, $foto, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
