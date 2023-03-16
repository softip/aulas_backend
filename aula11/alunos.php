<?php

$aluno1 = array(
    "nome" => "Poliana Silveira",
    "nota1" => 7,
    "nota2" => 9
);

$aluno2 = array(
    "nome" => "Murilo Alexandre",
    "nota1" => 8,
    "nota2" => 5
);

$aluno3 = array(
    "nome" => "André Felipe",
    "nota1" => 6,
    "nota2" => 7
);

$aluno4 = array(
    "nome" => "Lavinia Sandi",
    "nota1" => 8,
    "nota2" => 9
);

$dados = [
    $aluno1, 
    $aluno2, 
    $aluno3,
    $aluno4
];

//print_r($dados);
echo json_encode($dados);
