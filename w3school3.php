<?php 

$test = 2;

if ($test >= 1) {
	# code...
	trigger_error("Value must be 1 or below");
}

 ?>

<?php 

function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "Ending Script";
	die();
}

set_error_handler("customError", E_USER_WARNING);

$text = 2;
if ($test >= 1) {
	# code...
	trigger_error("Value must be 1 or below", E_USER_WARNING);
}

 ?>  

 //error messsage by e-mail
<?php 

//error handler function
function customError($errno, $errstr) {
	echo "<b>Error:</b> [$error] $errstr<br>";
	echo "Webmaster has been notified";
	error_log("Error: [$errno] $errstr", 1,
		"someone@example.com", "From: webmaster@example.com")
	}

//ser error handler
set_error_handler("customError", E_USER_WARNING);	
//triger error
$test = 2;
if ($test >= 1) {
	# code...
	trigger_error("Value must be 1 or below",E_USER_WARNING);
}
 ?>

 <?php 
// create function with an expection
function checkNum($number) {
	if ($number > 1) {
		# code...
		throw new Exception("Value  must be 1 or below");
	} else {
		return true;
	}
}

//trigger exception
checkNum(2);

  ?>

<?php 

function checkSum($number) {
	if ($number > 1) {
		throw new Exception("Value must be 1 or below");
	}
	return true;
}

try {
	checkNum(2);
	echo "If you see this, te number is 1 or below";
}

catch(Exception $e) {
	echo "Message: " . $e -> gwrMesssage();
}

 ?>

 <?php 

/**
* 
*/
class customException extends Exception
{
	
	public function errorMessage()
	{
		# code...
		$errorMsg = "Error on line " . $this ->getLine() . " in " . $this -> getFile() . ": <b>" . $this -> getMessage(). "</b> is not a valid E-mail adress";
		return $errorMsg;
	}
}

$email = "someone@example...com";

try {
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		# code...
		throw new customException($email);
		
	}
}

catch (customException $e) {
	echo $e -> errorMessage();
}

 ?>

<?php 

class customException extends Exception
{
	public function errorMessage()
	{
		# code...
		$errorMsg = "Error on line " . $this ->getLine() . " in " . $this -> getFile() . ": <b>" . $this -> getMessage(). "</b> is not a valid E-mail adress";
		return $errorMsg;
	}
}

$email = "someone@example...com";

try {
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		# code...
		throw new customException($email);		
	}

	if (stripos($email, "example") !== false) {
		# code...
		throw new Exception("$email is an example e-mail");
		
	}

catch (customException $e) {
	echo $e -> errorMessage();
}

catch (Exception $e) {
	echo $e -> getMessage();
}

 ?>

<?php 

class customException extends Exception
{
	public function errorMessage()
	{
		# code...
		$errorMsg = "Error on line " . $this ->getLine() . " in " . $this -> getFile() . ": <b>" . $this -> getMessage(). "</b> is not a valid E-mail adress";
		return $errorMsg;
	}
}

$email = "someone@example...com";

try {
	try {
		if (strpos($email, "example") !== false) {
			# code...
			throw new Exception($email));
			
		}
	}

	catch(Exception $e) {
		throw new customException($email);
	}
}

catch (customException $e) {
	echo $e -> errorMessage();
}

?>

php


