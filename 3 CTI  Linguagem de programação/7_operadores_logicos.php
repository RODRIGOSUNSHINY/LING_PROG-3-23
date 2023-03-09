<?php
 $idade = 18;
 $cnh = true;
 /*
 && e and VV
 || ou or VF
 */
 if($idade > 18 && $cnh == true){
	 echo 'pode dirigir!';
 } else{
	 echo 'Não pode dirigir,cavalo!';
 }
 
 
 if($idade >= 23 && $infra == false){
	 echo "<hr>Pode fazer a CNH D";
 }
 /*
 EXERCÍCIO
 O MOTORISTA PODE TER INFRAÇÕES PORÉM CASO ESTEJA QUITADO,
 ELE PODERÁ REALIZAR A CNH D
 */
?>