<!-- Renato Rosseto Neto - 31336353 -->

 <!-- exercicio 6 -->
 <?php 
	include "operacoes.php";
?> 
<html>
	<?php 
	echo "---------- Exercicio 6 ----------<p/>";
	
	$resultado = soma_valores($x=10, $y=10);
	echo "O resultado entre: $x + $y = $resultado<p/>"; 
	
	$resultado = subtrai_valores($x=10, $y=10);
	echo "O resultado entre: $x - $y = $resultado<p/>"; 
	
	$resultado = multiplica_valores($x=10, $y=10);
	echo "O resultado entre: $x * $y = $resultado<p/>"; 
	
	$resultado = divide_valores($x=10, $y=10);
	echo "O resultado entre: $x / $y = $resultado<p/>"; 
	
	?> 
</html>
