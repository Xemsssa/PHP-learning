<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
		<title>frosh IMs</title>
	</head>
	<body style="text-align: center;">
		<h1>Register for Frosh IMs</h1>
		<form action="register-2.php" method="post">
			NAME: <input type="text" name="name"/>
			<br/>
			<input type="checkbox" name="captain"/> Captain?
			<br/>
			<input type="radio" name="gender" value="F"/> Female
			<input type="radio" name="gender" value="M"/> Male
			<br/>
			Dorm:
			<select name="dorm" id="">
				<option value=""></option>
				<option value="Apley Court">Apley Court</option>
				<option value="Canaday">Canaday</option>
				<option value="Grays">Grays</option>
				<!-- <option value=""></option> -->
			</select>
			<input type="submit" value="Register"/>
		</form>
		
	</body>
</html>