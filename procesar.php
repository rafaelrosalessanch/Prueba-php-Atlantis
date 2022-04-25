<?php
  $numero = $_POST['numero'];
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $cadena1 = $_POST['cadena1'];
  $cadena2 = $_POST['cadena2'];
  $descendente = $_POST['descendente'];
  $i=0;
  $retorno;
  
  if (($numero%2)==0){  
 $retorno ='<p>El numero es par</p><br/>';}
  else{
  $retorno ='<p>El numero es impar</p><br/>';}
 //echo $retorno;
  
   if ($numero1<$numero2){
   $retorno = $retorno.('<p>El numero:'.$numero2.' es mayor</p><br/>');
  }else{
   $retorno = $retorno.('<p>El numero:'.$numero1.' es mayor</p><br/>');
  }
  $retorno = $retorno.('<p>Las cadenas unidas con un espacio es: '.$cadena1.' '.$cadena2.'</p><br/>');
  $retorno = $retorno.('<p>'.$descendente.'</p><br/>');
  while  ($i != 6) {
	  $i=$i+1;
	  
	  $descendente=$descendente-1;
	  $retorno = $retorno.('<p>'.$descendente.'</p><br/>');
	  
  }
  //echo '<script>alert('.$numero1.')</script>';
  
 echo $retorno;
?>