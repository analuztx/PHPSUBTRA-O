<?php
    include('conexao.php');
    $query = mysqli_query($conexao,"SELECT * FROM mobile ORDER BY id DESC");
    $exibe = mysqli_fetch_array($query);
        $varEntrada = $exibe[1]; 
        $varSaida = $exibe[2]; 
?>

<html lang="pt-br">
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <meta http-equiv="refresh" content="2">
        <title> EVA Mobile </title>

<?php
    $num1 = $varEntrada;
    $num2 = $varSaida;
    $res = $num1 - $num2;
?>
<?php

        $num1 = $num1;
        if($num1 >= 0){
            echo($res);
        };
    
?>
</html>