<?php

  $arrFrutas = [
    1 => "abacaxi",
    2 => "banana",
    3 => "goiaba",
    4 => "manga",
    5 => "uva"];

//    foreach ($arrFrutas as $key => $v) {
//        echo "key: {$key} => Value: {$v} <br >";
//}
?>
<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <ul>
    <?php
    foreach ($arrFrutas as $valor) {
        ?>
        <li><?= $valor ?></li>
        <?php
    } 
    ?>
    </ul>
</body>
</html>