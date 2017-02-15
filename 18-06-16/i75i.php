<?php 

//var

$var = 'A';
$letter = ctype_alpha($var) ? true : false;	

$state = readline("You state, please: ");
switch ($state) {
	case "MA": case "Mass.": case 'Massachusetts':
		# code...
		break;
	
	default:
		# code...
		echo("I dont understand your input!");
		break;
}

//loops

$counter = 1;
while ($counter <= 100) {
	# code...
	print($counter);
	$counter++;
}

do {
	# code...
	print($counter);
	$counter++;
} while ($counter <= 100);

for ($counter = 0; $counter < 100; $counter++) { 
	# code...
	print($counter);
}

//array
$nums = [1,2,3,4];
$nums = array(1,2,3,4);
$nums[4] = 5;
$nums[] = 6;
$nums[99] = 100;
array_push($nums, 7);

$pizzas = [
	"cheese" => 8.99,
	"pepperoni" => 9.99,
	"vegetable" => 10.99,
	"buffalo chiken" => 11.99
];

$pizzas["cheese"] = 7.99;

if ($pizzas["vegetable"] < 12) {
	# code...
}

$pizzas["bacon"] = 13.49;

foreach ($array as $key) {
	# code...
}

foreach ($pizzas as $pizza) {
	# code...
	print($pizza);
	print("\n");
}

foreach ($pizzas as $topping => $price) {
	# code...
	print("A whole ");
	print($topping);
	print("pizza costs $");
	print($price);
	print(".\n");
}

printf("A whole %s pizza costs $%s.\n", $topping, $price);

echo "A whole {$topping} pizza costs \${$price}.\n";

print("A whole ". $topping ." pizza costs " . $price. ".\n");

//function

function hard_square($x)
{
	$result = 0;
	for ($i = 0; $i < $x; $i++) { 
		# code...
		$result += $x;
	}
	return $result;
}


	$x = readline("Give me a number to square: ");
	echo(hard_square($x) . "\n");

	function hard_square($x)
	{
		$result = 0;
		for ($i = 0; $i < $x; $i++) { 
			# code...
			$result += $x;
		}
	return $result;
	}

	echo(hard_square() . "\n");

	function hard_square($x = 10)
	{
		$result = 0;
		for ($i=0; $i < $x; $i++) { 
			# code...
			$result += $x;
		}
		return $result;
	} 

#INCLUDE <CS50.H>

require_once(__DIR__ . "cs50.php");

$name = readline("What is your name? \n");
print("Hello, " . $name . "\n");

What is your name?

	$name = readline();
	print("hello, {$name}\n"); 

print("Please\n");
$num1 = readline();

print("Please\n");
$num2 = readline();

$sum = $sum1 +$sum2;
print("The sum is {$sum}\n");

Please
<?php $num1 = readline() ?>
Please
<?php $num2 readline() ?>
The sum is <?= ($num1 + $num2) . "\n" ?> 

You rolled a <?= rand() % 6 + 1 ?> and a < ?= rand() % 6 + 1 . "\n" ?>

#!/usr/bin/php

chmod a+x <file>




 ?>