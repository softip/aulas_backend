<?php

   if (isset($_GET["nota1"]) 
          &&  isset($_GET["nota2"])){

      $resultado = $_GET["nota1"] + $_GET["nota2"];
      echo "<strong>o resultado da soma foi $resultado</strong>";
   }

?>