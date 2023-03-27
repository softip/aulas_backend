<?php
  $cores = ["yellow", "green", "blue", "pink", "red", 
            "purple", "orange", "gray", "white"];

if(isset($_GET['cor'])){
    $cor = $_GET['cor'];
}else{
    $cor = 'white';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-color: <?php echo $cor ?>; 
        }
    </style>
</head>
<body>

    <?php
       foreach($cores as $key => $cor){
          echo "<a href='atividade1.php?cor=$cor'>
                   Mudar para $cor
                </a>";
       }
    ?>

</body>
</html>