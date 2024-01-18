<?php 
 require_once("func.php");


 try{
    AbrirConexao();
 }catch(Exception $ex){
    echo "<b>Mensagem:</b> " . $ex->getMessage() . "<br>";
    echo "<b>Linha:</b> " . $ex->getLine() . "<br>";
    echo "<br>Arquivo:</b> " . $ex->getFile() . "<br>";
 }
?>