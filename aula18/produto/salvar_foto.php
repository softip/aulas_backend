<?php



if(!empty($_FILES['foto']['tmp_name'])){
    $onde_esta = $_FILES['foto']['tmp_name'];
    $nome_arquivo = time() . $_FILES['foto']['name'];
    $para_onde_vai = "../uploads/$nome_arquivo";
    move_uploaded_file($onde_esta, $para_onde_vai);
}else{
    $nome_arquivo = "sem_foto.jpg";
}