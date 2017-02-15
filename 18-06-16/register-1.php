<?php

if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"])) {
	# code...
	header("Location: http://localhost/froshims-1.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frosh IMs</title>
</head>
<body>
	You are regester! (Well bot really.)
</body>
</html>