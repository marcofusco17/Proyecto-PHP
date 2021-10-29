<?php

$mes= $_POST["Mes"];
$dia= $_POST["Dia"];


#echo $mes,$dia;

 /* $fichero= file_get_contents("D:\\xampp\\apache\\logs\\error.log");
  $partir = explode(" ",$fichero);
  $encuentra=  $partir[1];
  $pos= strpos($fichero,$encuentra);

      if($pos !== false){
        "No encontrado '$encuentra'";
      }
      else{
        "Encontrado '$encuentra' en '$pos'";
      }*/





echo '<link rel="stylesheet" href="estilos.css" type="text/css">';
$fichero = fopen("D:\\xampp\\apache\\logs\\error.log", "r");
 echo "<textarea>";
 while (!feof($fichero)){
     $linea = fgets($fichero);
     $buscar = strpos($linea,$mes." ".$dia);
  if($buscar !== false){

    echo $linea."<br>";

  }
 }
 fclose($fichero);
 echo "</textarea>"; 


/*$logs = "mes dia";
$partir = explode(" ",$logs);
echo $partir[0];
*/
?>