
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
/**/
	echo "MY first PHP script!";

	 ?>
</body>
</html>


<?php 

$color = "red";
echo "My car is " . color . "<br>"; 

$txt = "Hello World!";
$x = 5;
$y= 10.5;

$text = "W3Schools.com"
echo "I love $txt!"; 

$x = 5;
$y = 4;

echo $x + $y;

// global
$x = 5;

function myTest() {
	echo "<p>VAriable x inside function is: $x<\p>"; 
};

myTest();

echo "<p>VAriable x outside function is: $x<\p>";

// local
function myTest() {
	$x = 5;
	echo "<p>VAriable x inside function is: $x<\p>"; 
};

myTest();

echo "<p>VAriable x outside function is: $x<\p>";

$x = 5;
$y = 10;

function myTest() {
	global $x, $y;
	$y = $y + $x;
} 

myTest();

echo $y;

?>

<?php 

$x = 5; 
$y = 10;

function myTest() {
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();

echo $y;

 ?>

 <?php 

 function myTest() {
 	static $x = 0;
 	echo $x;
 	$x++;
 }

 myTest();
 myTest();
 myTest();
 

  ?>

<?php 

	echo "<h2>PHP is fun!<\h2>";
	echo "Hello world!<br>";
	echo "I'm about to learn PHP!<br>";
	echo "This ", "string ", "was ", "made ", "with multuple parametrs.";

 ?>


<?php 

$txt1 = "learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 ."<\h2>";  
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

 ?>

<?php 

print "<h2>PHP is fun!<\h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<br>";

 ?> 

<?php 

$x = "Hello world!";
$y = 'hello world!';

echo $x;
echo "<br>";
echo $y;

 ?>

<?php 

$x = 5985;

var_dump($x); 

 ?>


<?php 

$x = 10.365;
var_dump($x);

 ?>

<?php 

$x = true;
$y = false;

 ?>

<?php 

$cars = array("Volvo", "BMW", "TOYOTA");
var_dump($cars)l

 ?>

<?php 

/**
* 
*/
class Car 
{
	
	function ()
	{
		# code...
		$this -> model = "VW";
	}
}

$herbie = new Car();

echo $herbie -> model;

 ?>

<?php 

$x = "HEllo World!";
$x = null;

var_dump($x);

 ?>

<?php 

echo strlen("Hello World!");
echo str_word_count("Hello World!");
echo strrev("Hello World!");
echo strpos("Hello world!", "world");
echo str_replace("world", "dolly", "Hello world!"); 

 ?>

<?php 

define("GREETING", "Welcome to W3School.com");
echo GREETING;

function myTest () {
	echo GREETING;
}

myTest();

 ?>

}

<?php 

$t = date("H");

if ($t < "10") {
	echo "Have a good morning";
} else if ($t < "20") {
	echo "Have a nice day!";
} else {
	echo "Have a good night!";
}

 ?>

<?php 

$favcolor = "red";

switch ($favcolor) {
	case "red":
		# code...
		echo "Your favorite color is red!";
		break;
	
	default:
		# code...
		echo "Your favorite color is neither red!";
		break;
}

 ?>

<?php 

$x = 1;

while ($x <= 5) {
 	# code...
 	echo "The number is: $x <br>";
 	$x++;
 } 

 ?>

<?php 

$x = 1;

do {
	# code...
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);

 ?>

 <?php 

$x = 6;

do {
	# code...
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);

 ?>


<?php 

for ($x = 0; $x <= 10; $x++) { 
	# code...
	echo "The number is: $x <br>";
}

 ?> 

 <?php 

$color = array("red", "green", "blue", "yellow");

foreach ($color as $value) {
	# code...
	echo "$value <br>";
}

  ?>

  <?php 

 function writeMsg() {
 	echo "Hello world!";
 }

 writeMsg();

   ?>

<?php 

function familyName($fname) {
	echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");

 ?>

<?php 

function familyName($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");

 ?>

<?php 

function setHeight($minHeight = 50) {
	echo "The height is $minHeight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

 ?>

 <?php 

function sum($x, $y) {
	$z = $x + $y;
	return $z; 
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";  
echo "2 + 4 = " . sum(2, 4); 

  ?>

<?php 

$cars = array("Volvo", "BMW", "TOYOTA");

echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . ".";

 ?>  

<?php 

$cars = array("Volvo", "BMW", "TOYOTA");

echo count($cars);
$arrLength = count($cars);

for ($x = 0; $x < $arrLength; $x++) { 
	# code...
	echo $cars[x];
	echo "<br>";
}

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "TOYOTA";

 ?>

<?php 

$age = array('Peter' => '35', 'Ben' => '37', 'Joe' => '43' );

$age['Peter'] = '35';

echo "Peter is: " . $age['Peter'] . " years old.";

 ?> 


<?php 

$age = array('Peter' => '35', 'Ben' => '37', 'Joe' => '43' );

foreach ($age as $key => $value) {
	# code...
	echo "Key = " . $key . ", Value = " . $value;
	echo "<br>";
}

 ?>

 <?php 

$cars = array("Volvo", "BMW", "TOYOTA");
sort($cars);

  ?>

<?php 

$numbers = array(1, 2,23, 45, 11);
sort($numbers);

 ?>  

<?php 

$x = 75;
$y = 25;

function addition() {
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();

echo $z;

 ?>

<?php 

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
 ?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	Name: <input type="text" name="fname">
	<input type="submit">
</form> 

<?php 

if ($_SERVER["REQUEST_METHOD" == "POST"]) {
	# code...
	$name = $_REQUEST['fname'];
	if (empty($fname)) {
		# code...
		echo "Name is empty";
	} else {
		echo $name;
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="welcome.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
</body>
</html>

// welcome.php

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	Welcome <?php echo $_POST["name"]; ?>
	Your email adress is: <?php echo $_POST["email"]; ?> 

</body>
</html>

Name: <input type="text" name="text">
Email: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="commebt" id="" cols="40" rows="5"></textarea>

Gender: 
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">
Male

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"></form>

// validate
htmlspecialchars()
trim();
stripslashes()
function test_input();

<?php 
$name = $email = $gender = $comment = $website = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  	# code...
  	$name = test_input($_POST['name']);
  	$email = test_input($_POST['email']);
  	$website = test_input($_POST['website']);
  	$comment = test_input($_POST['comment']);
  	$gender = test_input($_POST['gender']);
  	}  

  	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
  		return $data;
  	}

 ?>

<?php 

$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = ""  
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD" == "POST"]) {
	# code...
	if (empty($_POST["name"])) {
		# code...
		$nameErr = "Name required";
	} else {
		$name = test_input($_POST["name"]);
	}

	if (empty($_POST["email"])) {
		# code...
		$nameErr = "Email required";
	} else {
		$email = test_input($_POST["email"]);
	}

	if (empty($_POST["website"])) {
		# code...
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
	}

	if (empty($_POST["comment"])) {
		# code...
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		# code...
		$nameErr = "Name required";
	} else {
		$gender = test_input($_POST["gender"]);
	}

}

 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name: <input type="text" name="name"><span class="error">* <?php echo $nameErr; ?></span><br><br>
E-mail: <input type="text" name="email"><span class="error">* <?php echo $emailErr; ?></span><br><br>
Website: <input type="text" name="website"><span class="error">* <?php echo $websiteErr; ?></span><br><br>
Comment: <textarea name="comment" id="" cols="40" rows="5"></textarea>
Gender: <input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male">
<span class="error">* <?php echo $genderErr; ?></span><br><br>
<input type="submit" name="submit" value="Submit">
	
</form>

// Validate name
$name = test_input($_POST['name']);
if (!preg_match("/^[a-zA-Z]*$/",$name)) {
	$nameErr = "Only letters and white space allowed";
}

$email = test_input($_POST["email"];
if (!filter_var($email, FILTER_VALIADATE_MAIL)) {
	$emailErr = "Invalid eamil format";
}

// Validate URL
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[a-zA-Z0-9+&@#\/%?=~_\!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
	$websiteErr = "Invalid URL";
};
<?php 
// def variable
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	# code...
	if (empty($_POST["name"])) {
		# code...
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check
		if (!preg_match("/^[a-zA-Z ]*$/", $name) {
			# code...
			$nameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])) {
		# code...
		$emailErr = "Email is required";
	} else {
		$email= test_input($_POST["email"]);
		// check
		if (!filter_var($email, FILTER_VALIADATE_EMAIL) {
			# code...
			$emailErr = "Invalid email format";
		}
	}

	if (empty($_POST["website"])) {
		# code...
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
		// check
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website) {
			# code...
			$websiteErr = "Invalid URL";
		}
	}

	if (empty($_POST["comment"])) {
		# code...
		$comment = "";	
	} else {
		$comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		# code...
		$genderErr = "Gender is required";	
	} else {
		$gender = test_input($_POST["gender"]);
	}
}

 ?> 

// keep values in form
input

















