<?php 
 //$arrayNome = array("pedro", "fernanda", "lucas", "marcos", "joana");
$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
//for ($i = 0; $i < count ($arrayNome); $i++) {
//    echo $arrayNome [$i] . "<br />";
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
    <select name="slProfessores" id="slProfessores">
    <?php
    for ($i = 0; $i < count($arrayNome); $i++)  {
        ?>
        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
        <?php
    }
    ?>
    </select>
    <button onclick="alert (Document.getElementById('slProfessores') .value); ">Selecionar</button>
</body>
</html>