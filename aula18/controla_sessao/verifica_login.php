<?php

//verifica se foi enviado os dados de usuário e senha
//do formulário de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){
  
   $usuario = $_POST['usuario'];
   $senha = $_POST['senha'];
   
   require_once "../conexao.php";

   //String com o comando SQL para ser executado no DB
   $sql = "SELECT * FROM `usuario` WHERE  `login`= ? ; ";

   //Prepara o SQL para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //adiciona os valores nos parâmetros
   $comando->bind_param("s", $usuario);

   //executa o SQL - Comando no Banco de Dados
   $comando->execute();

   //pegar o resultado da consulta
   $resultado = $comando->get_result();

   //pegar a primeira linha de resultado
   $usuario = $resultado->fetch_assoc();
   
   if($usuario){
      echo "existe um usuario com esse login";
   }else{
      echo "Não existe usuário com o login informado";
   }

}
