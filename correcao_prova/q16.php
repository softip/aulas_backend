<?php

if(isset($_GET['n1']) && isset($_GET['n2'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    if($n1 > $n2){
        echo "$n1 é maior";
    }else if($n2 > $n1){
        echo "$n2 é maior";
    }else{
        echo "Iguais";
    }
}else{
    echo "Impossível prosseguir";
}