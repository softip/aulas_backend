<h2>Operadores Aritméticos</h2>
<hr>

<p>
    São utilizados para realizar cálculos
    matemáticos.
</p>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Operador</th>
            <th>Descrição</th>
            <th>Exemplo</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>+</td>
            <td>Soma</td>
            <td>$soma = 10 + 5;</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Subtração</td>
            <td>$sub = 10 - 5;</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Divisão</td>
            <td>$div = 10 / 5;</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Multiplicação</td>
            <td>$multi = 10 * 5;</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Resto da divisão</td>
            <td>$resto = 10 % 5;</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Potênciação</td>
            <td>$pot = 10 ** 5;</td>
        </tr>
    </tbody>
</table>

<?php
    $soma = 10 + 5;
    $sub = 10 - 5;
    $div = 10 / 5;
    $multi = 10 * 5;
    $resto = 10 % 5;
    $pot = 10 ** 5;
    echo "Soma $soma <br>";
    echo "Subtração $sub <br>";
    echo "Divisão $div <br>";
    echo "Multiplicação $multi <br>";
    echo "Resto $resto <br>";
    echo "Potência $pot <br>";

?>