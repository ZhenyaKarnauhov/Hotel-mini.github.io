<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styleLog.css">
	<title>Регистрация</title>
</head>
<body>

<?php
require('connect.php'); 

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO users (username, email, password) VALUES ('$username' , '$email' , '$password')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		$smsg = "Регистрация прошла успешно!";
		$_SESSION['email'] = $email;
	} else {
		$fmsg = "Не верно введены данные";
		
	}
}
 ?>

	<div class="container">
		<form action="" class="form-signin" method="POST">
		<h2>Регистрация</h2>
		<?php 
			if (isset($smsg)) { ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php } ?>

			<?php 
			if (isset($fmsg)) { ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div> <?php } ?>
 		<input type="text" name="username" class="form-control" placeholder="Имя" required>
		<input type="email" name="email" class="form-control" placeholder="Email" required>
		<input type="password" name="password" class="form-control" placeholder="Пароль" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
		<a href="login.php" class="btn btn-lg btn-primary btn-block">Авторизоваться</a>
		</form>
	</div>

	<?php 
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		echo "<div class='signin-text'>На вашу почту : " .$email. " отправлено сообщение , о успешной регистрации! </div>";

	}
 ?>
	
</body>
</html>