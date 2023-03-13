<h2>Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repetição
    for.

    <pre>
         +------------+
       0 |Pedro       |
         +------------+
       1 |Júlia       |
         +------------+
       2 |Maria       |
         +------------+
    </pre>
</p>

<?php
   //criar o vetor
   $nomes = ["Pedro", "Júlia", "Maria"];

   //imprimir usando for
   for($i = 0; $i<=2; $i++){
      echo $nomes[$i] . "<br>";
   }
?>