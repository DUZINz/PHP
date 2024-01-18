<?php
$arrayNome = ["Eduardo", "Cleitin", "Pedrao", "Pedrin", "Robertun", "Ana", "Eusebio"];
$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if ($funcionarioCod) {
    $funcionario = $arrayNome[$funcionarioCod];
}
//if (isset($_POST{"txtNome"})) {
//   $nome = $_POST["txtNome"];
//}
//
//if (isset($_POST["txtEmail"])) {
//    $email = $_POST["txtEmail"];
//}
//
//if (isset($_POST["txtEmail"])) {
//   $funcionario = $arrayNome[$_POST["slFuncionario"]];
//}
//
?>
<!DOCTYPE html>
<html lang="pt - br">

<head>
    <title>formulario</title>
    <meta charset="UTF-8">
    <style>
        ul {
            list-style: none;
        }

        input,
        select {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form method="post">
        <ul>
            <li>Nome: <input type="text" name="txtNome" /></li>
            <li>E-mail: <input type="text" name="txtEmail" /></li>
            <li>Funcionario:
                <select name="slFuncionario">
                    <?php
                    for ($i = 0; $i < count($arrayNome); $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnsubmit" value="Cadastrar" /></li>
        </ul>
    </form>
    <br />
    <hr /><br />
    <p>Nome:
        <?= $nome; ?>
    </p>
    <p>E-mail:
        <?= $mail; ?>
    </p>
    <p>Funcionario:
        <?= $funcionario; ?>
    </p>
</body>

</html>