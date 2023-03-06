<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
         +---------+
       0 |Murilo   | 
         +---------+
       1 |Poliana  |
         +---------+
       2 |Dalva    |
         +---------+
       3 |Lavinia  |
         +---------+
       4 |Kaua     |
         +---------+
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>


<?php
   $nomes = [];
   $nomes[] = "Murilo";
   $nomes[] = "Poliana";

   //outra forma

   $nomes = [
             "Murilo", 
             "Poliana", 
             "Dalva", 
             "Lavinia",
             "Kaua"
          ];

echo "<ol>";
  for($i=4; $i >= 0; $i--){
     echo "<li> $nomes[$i] </li>";
  }
echo "</ol>";
?>