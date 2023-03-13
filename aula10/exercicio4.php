<h2>Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repetição
    for.

    <pre>
                "nome"     "nota1"      "nota2"
           +------------+------------+------------+
         0 |Poliana     |7           |9           |
           +------------+------------+------------+
         1 |Murilo      |8           |5           |
           +------------+------------+------------+
         2 |André       |6           |7           |
           +------------+------------+------------+
    </pre>
</p>

<?php

$aluno1 = array(
    "nome" => "Poliana",
    "nota1" => 7,
    "nota2" => 9
);

$aluno2 = array(
    "nome" => "Murilo",
    "nota1" => 8,
    "nota2" => 5
);

$aluno3 = array(
    "nome" => "André",
    "nota1" => 6,
    "nota2" => 7
);

$dados = [$aluno1, $aluno2, $aluno3];

foreach($dados as $key =>$value){
    echo $value["nome"]  . " | ";
    echo $value["nota1"] . " | ";;
    echo $value["nota2"] . " <br> ";;
}
  

?>