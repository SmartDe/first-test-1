<?php
	$a = $_GET['a'];
	
	if ($a == 100500)
	{
		echo('You got damn right!</br>');
	}
	else 
		echo 'FUCK OFF!</br>';
	
	$b = $a;
	
	for($b; $b<=100500; $b++)
	{
		if($b%2 == 0)
		{
			echo($b . '=' . 'Это четное число! </br>');
		}
		else 
			echo($b . '=' . 'Это не четное число! </br>');
		
	}
	

