<?php

if(isset($_POST['numero']) && isset($_POST['n2'])){
    $r = $_POST['numero'] + $_POST['n2'];
    echo $r;
}else{
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento 
    header("Location: form1.html");
}



  

?>