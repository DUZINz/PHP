<?php 
$msg = "";
switch (5)  {
    case 1:
        $msg = "dia 1";
        break;
    case 2:
        $msg = "dia 2";
        break;
    case 3:
        $msg = "dia 3";
        break;
    case 4:
        $msg = "dia 4";
        break;
    case 5:
        $msg = "dia 5";
        break;
    default:
        $msg = "Não encontrado";    
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
    <p>olá, hoje é o <?= $msg; ?></p>
</body>
</html>