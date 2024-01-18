<?php
//function Ola($nome, $email = "" ) {
//  return "Ola, meu nome é: {$nome} e meu e-mail é: {$email}!";
//}
//
//$v = Ola("Eduzin");
//echo  $v;
  function ajuste($p1, $p2) {
    return (($p1 * $p2) / 4);
  } 
?>
<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <h1><?= ajuste(3, 10); ?></h1> -->

   <ul>
    <?php 
    for ($i = 0; $i < 10; $i++) {
        ?>
        <li><?= ajuste($i, ($i * 6)) ?></li>
        <?php
    }
    ?>
   </ul>
</body>
</html>