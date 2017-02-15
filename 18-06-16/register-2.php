

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frosh IMs</title>
</head>
<body>
	<?php if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"])): ?>
		You must provide your name, gender, and dorm. Go <a href="froshims-2.php">back</a>.
	<?php else: ?>
		You are regester! (Well bot really.)
	<?php endif ?>

</body>
</html>