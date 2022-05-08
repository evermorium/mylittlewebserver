<?php

for($i = 1; $i <= 9; $i++)
{
	for($j = 1 ;$j <=9 ; $j++)
	{      
	       	$multi = $i * $j;
		echo "$i * $j = $multi \t ";
	}
	echo nl2br("\n");
	echo nl2br("\n");
}

?>