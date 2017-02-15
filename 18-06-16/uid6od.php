<?php

	function foo($s)
	{
		$n = strlen($s);
		for ($i = 0; $i < $n; $i++) { 
			# code...
			print($s[$i]. "\n");
		}
	}	
	foo ("This is CS50");
 ?>



 <?php 

 $arrray = [1, 2, 3];
 foreach ($array as $numsber) {
 	# code...
 	print($numsber. "\n");
 }

 ?>

 <?php 

 	function add($a, $b)
 	{
 		return $a + $b;
 	}

 	function substr($a, $b)
 	{
 		return $a - $b; 
 	}

  ?>

  <?php 

  require_once(__DIR__ . "/math.php");
  print(add(1, 2) . "\n");

   ?>