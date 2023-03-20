<?php
  
   $tabuada = $_GET['tabuada'];

   for($i=0; $i<=10; $i++){
      $resposta = $tabuada * $i;
      echo "$tabuada * $i = $resposta <br>";
   }
   