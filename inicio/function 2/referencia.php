<?php

$salario = 1750.54;
$valorAjuste = 0;

function AjustarSalario($sal, &$valorAjuste) {
    $valorAjuste = 300.00;

    return($sal + $valorAjuste);
}

 $valorFinal = AjustarSalario($salario, $valorAjuste);
 echo "O valor ajustado é de: <b>R$ {$valorFinal}</b>, com aumento de: <b>R$ {$valorAjuste}</b>.";
 ?>