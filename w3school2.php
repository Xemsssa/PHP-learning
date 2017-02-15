


Name: <input type="text" name="name" value="<?php echo $name; ?>">
E-mail:  <input type="text" name="name" value="<?php echo $email; ?>">
Website:  <input type="text" name="name" value="<?php echo $Website; ?>">
Comment: <textarea name="comment" id="" cols="40" rows="5"><?php echo $comment; ?></textarea> 
Gender: <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
 
 $cars = array(
	array("Volvo", 22, 18),
	array("BMW", 15, 13),
	array("Saab", 5, 2),
	array("Land Rover", 17, 15),
 );

 <?php 

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

  ?>

  <?php 

for ($row = 0; $row < 4; $row ++) { 
	# code...
	echo "<p><b>Row number $row</b><.p>";
	echo "<ul>";
	for ($col = 0; $col < ; $col ++) { 
		# code...
		echo "<li> . $cars[$row][$col] . </li>";
	};
	echo "</ul>";
};

   ?>

// Date
date(format, timestamp)

<?php 

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";

&copy; 2010-<?php echo "date("Y")"; ?>	

 ?>

 <?php 

echo "The time is " . date("h:i:sa");

  ?>

 <?php 
 
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
 ?> 

 <?php 

$d = mktime(11,14,54,8,12,2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

  ?>

 <?php 

$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);  
 
 ?>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php 

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
	echo date("M d", $startdate) . "<br>";
	$startdate = strtotime("+1 week", $startdate);
}

 ?>

 <?php 

$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time())/60/60/24);

echo "There are ". $d2 . " days until 4th of July.";

  ?>


<?php 

echo "<p>Copyright &copy: 1999-" . date("Y") . " W3School.com</p>"

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Welcome to my home page!</h1>
	<p>Some text.</p>
	<p>Some more text.</p>
	<?php include 'footer.php'; ?>

</body>
</html>

<?php 

echo '< a href="/default.asp">Home</a> -
< a href="/html/default.asp">HTML Tutorial</a> -
< a href="/css/default.asp">CSS Tutorial</a> -
< a href="/js/default.asp">JavaScript Tutorial</a> -
< a href="default.asp">PHP Tutorial</a>';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="menu">
		<?php include 'menu.php'; ?>
	</div>
</body>
</html>

<?php 

$color = "red";
$car = "BMW";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Welcpme to my home page!</h1>
	<?php include 'vars.php'; 
	echo "I have a $color $car.";
	?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Welcome to my home page!</h1>
	<?php include 'noFileExists.php'; 
	echo "I have a $color $car.";
	?>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Welcome to my home page!</h1>
	<?php require 'noFileExists.php'; 
	echo "I have a $color $car.";
	?>


</body>
</html>

<?php 

echo readline('webdictionary.txt');

 ?>

<?php 

$myfile = fopen(webdictionary.txt, "r") or die('Unable to open file!');
echo "fread($myfile, filesize(webdictionary.txt))";
fclose($myfile);

 ?>

<?php 

$myfile = fopen("webdictionary", "r");
// some code
fclose($myfile);

 ?>

<?php 

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

 ?>

<?php 

$myfile = fopen("webdictionary.txt", "r") or die("Unable to  open file!");
while (! feof($myfile)) {
	# code...
	echo fgets($myfile) . "<br>";
}
fclose($myfile);

 ?>

<?php 

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

while (!feof($myfile)) {
	# code...
	echo fgetc($myfile);
}
fclose($myfile);

 ?>

$myfile = fopen("testfile.txt", "w"); 

<?php 

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);

fclose($myfile);
 
 ?>

<?php 

$myfile = fopen($newfile, "w") or die("Unable to open file!");

$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);

fclose($myfile);

 ?>

file_uploads = On

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="
		submit">
	</form>
</body>
</html>

<?php 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if (isset($_POST["submit"])) {
	# code...
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		# code...
		echo "File is a image - " . $check["mime"] . ".";
		$upload = 1;
	} else {
		echo "File is not an image.";
		$upload = 0;
	}
}

 ?>

<?php 
// Check file already uploaded
if (file_exists($target_file)) {
	# code...
	echo "Sorry, fiel already exist.";
	$uploadOk = 0;
}

 ?>

<?php 
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	# code...
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

 ?>

<?php 

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	# code...
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}

 ?>

<?php 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES
	["fileToUpload"]["name"]);
$uploadOk = 1;	

$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (isset($_POST["submit"])) {
	# code...
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		# code...
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk  = 0;
	}
}

if (file_exists($target_file)) {
	# code...
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
	# code...
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
	echo "Sorry, only JPG ,JPEG, PNG & GIF files are allowed";
	$uploadOk = 0;
}

if ($uploadOk == 0) {
	# code...
	echo "Sorry, your file was not uploade.";
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], target_file)) {
		# code...
		echo "The file " . basename($_FILES["fileToUpload"]["name"] . " has been uploaded.");
	} else {
		echo "Sorry, there was error uploading your file.";
	}
}

 ?>


<?php 
//cookies
setcookie(name)

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 1 day

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 

 	if (!isset($_COOKIE[$cookie_name])) {
 		# code...
 		echo "Cookie named '" . $cookie_name . "' is not set!<br>";
 	} else {
 		echo "Cookie named '" . $cookie_name . "' is set!<br>";
 		echo "value is: " . $_COOKIE[$cookie_name];
 	}

 	 ?>
 </body>
 </html>

<?php 
// setrawcookie();

 ?>

<?php 

$cookie_name = "user";
$cookie_value = "Alex Porter";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		if (!isset($_COOKIE[$cookie_name])) {
			# code...
			echo "Cookie named '" . $cookie_name . "' is not set!";
		} else {
			echo "Cookie named '" . $cookie_name . "' is set!";
			echo "value is: " . $_COOKIE[$cookie_name];
		}

	 ?>
</body>
</html>

<?php 
// delete coockie
setcookie("user", "", time() - 3600);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 

 	echo "Cookie 'user' is delete";

 	 ?>
 </body>
 </html>

<?php 

setcookie("test_cookie", "test", time() + 3600, "/");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	if (count($_COOKIE) > 0) {
		# code...
		echo "Cookie are enabled.";
	} else {
		echo "Cookie are disabled.";
	}

	 ?>
</body>
</html>


<?php 
// session start
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		echo "Session variables are set.";
	 ?>
</body>
</html>

<?php 
// Start the session
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
		echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
	 ?>
</body>
</html>

<?php 

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	print_r($_SESSION);

	 ?>
</body>
</html>

<?php 

session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 

 	$_SESSION["favcolor"] = "yellow";
 	print_r($_SESSION);

 	 ?>
 </body>
 </html>

//session_unset()
//session_destroy();

<?php 

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	session_unset();

	session_destroy();

	 ?>
</body>
</html>

//filter_list()
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>Filter Name</td>
			<td>Filter ID</td>
		</tr>

		<?php 

		foreach (filter_list() as $id => $filter) {
			# code...
			echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
		}

		 ?>
	</table>
</body>
</html>

// filter_var()
<?php 

	$str = "<h1>Hello, World!</h1>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr;
 ?>

// validate an int
<?php 

$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
	# code...
	echo("Integer is valid");
} else {
	echo("Integer is not valid");
}

 ?>

<?php 

$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0  || !filter_var($int, FILTER_VALIDATE_INT === false)) {
	# code...
	echo("Integer is valid");
} else {
	echo("Integer is invalid");
}

 ?>

// valid ip
<?php 

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP)) {
	# code...
	echo ("$ip is a valid IP adress");;
} else {
	echo ("$ip is a invalid IP adress");;
}

 ?>

// valid email
<?php 

$email = "john.doe@example.com"

$email = (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	echo ("$email is a valid email adress");
} else {
	echo ("$email is  not valid email adress");
}

 ?>

 // sanitize and valid url
<?php 

$url = "http://www.w3sckool.com"

$url = filter_var($url, FILTER_SANITIZE_URL);

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
	# code...
	echo ("$url is valid URL");
} else {
	echo ("$url is not a valid URL");
}

 ?>

<?php 

$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("option" => array("min_range" => $min, "max_range" => $max))) === false) {
	# code...
	echo ("Variable value is not within the legal range");
} else {
	echo ("Variable value is within the legal range");
}

 ?>

<?php 

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
	# code...
	echo ("$ip is a valid IPv6 adress");
} else {
	echo ("$ip is not a valid IPv6 adress");
}

 ?>

<?php 

$url = "http://www.w3school.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
	# code...
	echo ("$url is valid URL");
} else {
	echo ("$url is not valid URL");
}

 ?>

<?php 

$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;

 ?>

// check
 <?php 
if (!file_exists("welcome.txt")) {
	# code...
	die("File not found");
} else {
	$file = fopen("welcome.txt", "r")
}

  ?>


<?php 

function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "Ending Script";
	die();
}

 ?>  

<?php 

function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr<br>";

set_error_handler("customError");

echo($test);

 ?>

php








