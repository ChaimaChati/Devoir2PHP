<?php

function devide($string , $car)
{
	echo'<table border=1 style="width: 500px;"> ';
	 echo"<tr>";
	$parts= explode($car,$string);
	foreach($parts as $cellule){
        echo "<td>".$cellule."</td>"; }
    echo"</tr>";
}

	devide("ntouma ga3 moustahtirat" , " ");
	devide("tata|moustahtira ", "|");
	devide("katkouta.moustahtira",".");
 
?>
