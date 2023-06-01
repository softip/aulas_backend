<?php
//sempre que for trabalhar com sessões é necessário
//iniciar a sessão
session_start();

//verifica se existe a variável de sessão chamada usuário
if(!isset($_SESSION['usuario'])){
   header("Location: ../controla_sessao/form_login.php");
}

