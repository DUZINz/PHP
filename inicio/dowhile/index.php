<?php
//$i = 0;
//
//do {
//    echo "valor: {$i} <br>";
//   $i++;
//}   while($i == -1);
?>
<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $i = 1;
        do {
            ?>
            <li>Valor =
                <?= $i; ?>
            </li>
            <?php
            $i++;
        } while ($i <= 10);
        ?>
    </ul>
</body>

</html>