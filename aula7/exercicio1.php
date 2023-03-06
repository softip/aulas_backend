<h2>Exercício 1</h2>
<p>
    Crie um vetor, como representado abaixo:
    <pre>
         +---------+
       0 |Murilo   | 
         +---------+
       1 |4        |
         +---------+
       2 |3        |
         +---------+
    </pre>
  
    <pre>
    <?php
        $meuVetor = [];
        $meuVetor[] = "Murilo";
        $meuVetor[] = 4;
        $meuVetor[] = 3;

        //ou
        $meuVetor = ["Murilo", 4, 3];

        //calcular média
        $media = ($meuVetor[1] + $meuVetor[2])/2;
        $meuVetor[] = $media; //coloca a média na última posição
                              //livre do vetor

        if($meuVetor[3] >= 6){
           $meuVetor[4] = "aprovado";
        }else{
            $meuVetor[] = "reprovado";
        }        
        var_dump($meuVetor);
    ?>
    </pre>

    <p>
        Após calcule a média das posições 1 e 2
        do vetor e armazene o resultado na posição 3.
    </p>
    <p>
        Utilize uma estrutura de condição verificar se a média,
        armazenada na posição 3 é maior ou igual a 6, se for
        armazena na posição 4 do vetor a situação "Aprovado",
        caso contrário armazene "reprovado".
    </p>

    <pre>
        +---------+
        |Murilo   | 
        +---------+
        |4        |
        +---------+
        |3        |
        +---------+
        |3.5      |
        +---------+
        |Reprovado|
        +---------+
    </pre>
    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>
    
</p>