<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `produto` where categoria like ?";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

$categoria = '%'.$_GET['categoria'].'%' ?? "%%";
$comando->bind_param("s", $categoria);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$produtos = [];

//pega a todas as linha do resultado
while($produto = $resultado->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $produtos[] = $produto;
}
