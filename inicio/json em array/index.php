<?php

$jsonStr = '{"titulo":"titanic","sinopse":"Um navio colide com um ice berg e afunda.","ano":2017,"horario":["16:00","19:00","20:00"]}';

$arrFilme = json_decode($jsonStr);

echo "<p><b>Titulo: </b> ". $arrFilme->titulo ."</p>";
echo "<p><b>sinopse: </b> ". $arrFilme->{"sinopse"} ."</p>";
echo "<p><b>Ano: </b> ". $arrFilme->ano ."</p>";
echo "<p><b>Horario: </b></p>";

for($i = 0; $i < count($arrFilme->horario); $i++){
     echo "<p>-------------<b>".$arrFilme->horario[$i] ." </b></p>";
 }
?>