<?php
function AbrirConexao(){
    $connection = new PDO("mysql:host=localhost;dhname=curso_php;charset=utf8", 'root', '');
    return $connection;
}
?>