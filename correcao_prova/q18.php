<?php

 $p1 = array(
    "nome" => "Ana",
    "cpf" => "123.123.123-12"
 );

 $p2 = array(
    "nome" => "Mia",
    "cpf" => "321.321.321-32"
 );

 $nomes = [$p1, $p2];

 //imprimir os nomes
 echo $nomes[0]["nome"] . "<br>";
 echo $nomes[1]["nome"] . "<br>";


 //imprimir cpf com foreach
 foreach($nomes as $valor){
    echo $valor["cpf"] . "<br>";
 }

 ?>