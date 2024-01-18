<?php 

define("min", 17);
define("max", 45);

$idade = 5;

echo "MIN: " . min . "<br>";
echo "MAX: " . max . "<br>";
echo "idade: " . $idade . "<br><br>";

if($idade >= min && $idade <= max) {
    echo "acesso liberado...";
}else{
    echo "acesso bloqueado";
}
?>
