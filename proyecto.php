<?php
#$mes= $_POST["MES"];
#$dia= $_POST["DIA"];
echo '<link rel="stylesheet" href="estilos.css" type="text/css">';
  $fichero= fopen("D:\\xampp\\apache\\logs\\error.log", "r");
 echo "<textarea>";
 while (!feof($fichero)){
     $linea= fgets($fichero);
     echo $linea;
 } 
 fclose($fichero);
 echo "</textarea>"; 

$logs = "mes dia";
$partir = explode(" ",$logs);
echo $partir[0];
?>