<?php 
	require ("PHPmailer/class.phpmailer.php");
	if (!empty($_POST["name"]) && empty($_POST["gender"]) && empty($_POST["dorm"])) {
		# code...
		$mail = new PHPmailer();
		$mail -> IsSMTP();

		$mail -> Host = 'smtp.fas.harvard.edu';

		$mail -> SetForm('jharvard@cs50.net');

		$mail -> AddAddress('jharvard@cs50.net');

		$mail -> Subject = 'registration';

		$mail -> body =
			"This person registered:\n\n" .
			"Name": . $_POST["name"] . "\n" .
			//

		if ($mail -> send() == false) {
				# code...
				die($mail -> ErrInfo);
			}	
	}
	else
	{
		
	}

 ?>


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