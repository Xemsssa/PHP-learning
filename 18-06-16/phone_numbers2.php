<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

//$phone_numbers["Michael"] = "415-955-3857";

if (array_key_exists("Alex", $phone_numbers)) {
	# code...
	echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
}
else 
{
	echo "Alex's phone number is not in the phone_numbers ";
}

if (array_key_exists("Michael", $phone_numbers)) {
	# code...
	echo "Michael's phone number is " . $phone_numbers["Michael"] . "\n";
}
else
{
	# code...
	echo "Michael's phone number is not in the phone_numbers ";
}

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";

?>
