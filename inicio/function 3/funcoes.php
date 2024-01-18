<?php 
//$nome = "Duzin";
//echo substr ($nome, 0, 6);  //mostra X quantidade de caracteres 
//echo strtolower ("OLA, COMO VAI");
//echo strtoupper ("ola, como vai?");
//$msg = strip_tags ("<h1>Bem-vindo</h1>, acesse o <a href=''><b>link</b></a>", "<a> <b>");
//echo $msg;
//$comida = "Banana, Maça, Pera, Uva";
//$alt = str_ireplace("banana", "morango", $comida); 
//echo $alt;
//$nome = "Eduardo Freitas Grunitzky";
//$ex = explode(" ", $nome);
//echo $ex[0];
$nome = "fulano";

if(strlen($nome) <= 10) {
    echo "Valido";
} else {
    echo "invalido";
}
?>
