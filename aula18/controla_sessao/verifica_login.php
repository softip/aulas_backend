<?php

//verifica se foi enviado os dados de usuário e senha
//do formulário de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){
   echo $_POST['usuario'];
   echo $_POST['senha'];
}