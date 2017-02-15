<?php

//define a func
//receive

function sum($numbers)
{
	$sum = 0;
    
    foreach($numbers as $number)
    {
    	$sum += $number;
    }
	return $sum;
    
}

?>