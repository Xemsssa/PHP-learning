<?php

$odd_numbers = [1,3,5,7,9];

$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd numbder is $first_odd_number\n";
echo "The second odd numbder is $second_odd_number\n";

$odd_number[5] = 11;

print_r($odd_numbers);


?><?php

$odd_numbers = [1,3,5,7,9];

$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd numbder is $first_odd_number\n";
echo "The second odd numbder is $second_odd_number\n";

$odd_numbers[5] = 11;

print_r($odd_numbers);

unset($odd_numbers[2]);

?>

<?php

$odd_numbers = [1,3,5,7,9];

echo count($odd_numbers);

?>

<?php

$odd_numbers = [1,3,5,7,9];

$first_item = reset($odd_numbers);

echo $first_item;

?>

<?php

$odd_numbers = [1,3,5,7,9];

$first_item = reset($odd_numbers);
$last_item = end($odd_numbers);

echo $first_item;
print("\n");
echo $last_item;

?>

<?php

$odd_numbers = [1,3,5,7,9];

$last_index = count($odd_numbers) - 1;
$last_item = $odd_numbers[$last_index];

echo $last_item;

?>


<?php

$numbers = [1,2,3];

array_push($numbers, 4);

print_r($numbers);

?>


<?php

$numbers = [1,2,3,4];

array_pop($numbers);

print_r($numbers);

?>

<?php

$numbers = [1,2,3];

array_unshift($numbers, 0);

print_r($numbers);

?>


<?php

$numbers = [1,2,3];
array_shift($numbers);

print_r($numbers);

?>

<?php

$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];

$all_numbers = array_merge($odd_numbers, $even_numbers);

print_r($all_numbers);

?>


<?php

$numbers = [4,2,3,1,5];

sort($numbers);

print_r($numbers);


?>


<?php

$numbers = [1,2,3,4,5,6];

print_r(array_slice($numbers, 2));


?>


<?php

$numbers = [1,2,3,4,5,6];

print_r(array_slice($numbers, 3, 2));


?>


<?php

$numbers = [1,2,3,4,5,6];

print_r(array_splice($numbers, 3, 2));

print_r($numbers);

?>

<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

$phone_numbers["Michael"] = "415-955-3857";

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

?>


<?php

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

print_r($phone_numbers);

print_r(array_keys($phone_numbers));

print_r(array_values($phone_numbers));

?>


$name = "JOhn";

$introduction = "Hello, $name";

print_r($name);


<?php
$first_name = "John";
//$introduction = "Hello $name";
$last_name = "Doe";
//echo $introduction;
$name = $first_name . " " . $last_name;

echo $name;

//print_r($introduction);

?>


<?php

$string = "The length of this dtring is 43 characters.";

echo strlen($string);

?>


<?php

$filename = "image.img";

$extension = substr($filename, strlen($filename) - 3);

echo $extension;

?>


<?php

$fruits = "apple, banana, orange";

$fruit_list = explode(",", $fruits);

echo $fruit_list[0];

?>


<?php

$fruits_list = ["apple, banana, orange"];

$fruits = implode(",", $fruits_list);

echo $fruits;

?>


<?php

$odd_numbers = [1,3,5,7,9];

for ( $i = 0; $i < count($odd_numbers); $i++)
    {
		$odd_number = $odd_numbers[$i];
    	echo $odd_number . "\n";
	}

?>


<?php

$odd_numbers = [1,3,5,7,9];

foreach ($odd_numbers as $odd_number)
{
    echo $odd_number . "\n";
}

?>


<?php

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

foreach ($phone_numbers as $name => $number )
{
	echo "$name number is $number.\n";
}
    
?>


<?php
$even_numbers = [2,4,6,8,10,12,14,16,18,20];

foreach ($even_numbers as $number )
{
	echo $number . "\n";
}

?>


<?php

$counter = 0;

while($counter < 10)
{
    $counter += 1;
    
    echo $counter . "\n";
    
    //$counter += 1;
}

?>











