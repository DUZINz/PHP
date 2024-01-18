<?php
$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_GET, "txtSobrenome", FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_GET, "dateData", FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_GET, "txtCPF", FILTER_SANITIZE_STRING);
?>
