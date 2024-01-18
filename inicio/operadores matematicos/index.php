<?php
$adicao = 2 + 5;
$subtracao = 5 - 2;
$multiplicacao = 2 * 5;
$divisao = 5 / 2;
?>
<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>2 + 5 = <?=$adicao?></p>
    <p>2 - 5 = <?=$subtracao?></p>
    <p>2 * 5 = <?=$multiplicacao?></p>
    <p>2 / 5 = <?=$divisao?></p>
    <hr />
    <p><?=($adicao * $divisao);?></p>
</body>
</html>