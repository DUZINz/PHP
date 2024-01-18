<html lang="pt - br">

<head>
    <meta charset="UTF-8">
    <title>formulario</title>
    <style>
        ul {
            list-style: nome;
        }

        input,
        select {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form method="POST"></form>
    <ul>
        <li>Usuario: <input type="text" name="txtUsuario" /></li>
        <li>Senha: <input type="password" name="txtSenha" /></li>
        <li><input type="submit" name="btnSubmit" value="entrar" />
            <a href="http://tabaum/criptografia/">Atualizar</a>
        </li>
    </ul>
    </form>
    <br />
    <?php
    echo "Usuario: " . filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
    echo "<br />";
    echo "Senha: " . md5(filter_input(INPUT_POST, "txtSenha2", FILTER_SANITIZE_STRING));
    ?>
</body>

</html>