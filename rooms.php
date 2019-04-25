<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Бронирование номера</title>
</head>
<body>

<?php
require('connect.php'); 

if (isset($_POST['MaleOrFemale']) && isset($_POST['phone']) && isset($_POST['age']) && isset($_POST['numberDays']) && isset($_POST['data']) && isset($_POST['name'])) {
	$MaleOrFemale = $_POST['MaleOrFemale'];
	$phone = $_POST['phone'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$numberDays = $_POST['numberDays'];
	$data = $_POST['data'];

	$query = "INSERT INTO hotelRooms (MaleOrFemale, phone, name, age, numberDays, data) VALUES ('$MaleOrFemale' , '$phone' , '$name' , '$age' , '$numberDays' , '$data')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		$smsg = "Успешно забронирован номер.";
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
	} else {
		$fmsg = "Не верно введены данные";
		
	}
}
 ?>

	<div class="container">
		<h2>Бронирование</h2>
		<div class="booking">
			<ul>
				<li><img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/90/30/4b/caption.jpg"></li>
				<li>Спальных мест : 4</li>
				<li>Кол-во комнат : 2</li>
				<li>Обычный интерьер</li>
			</ul>
		</div>
		<div class="booking">
			<form action="" class="" method="POST">
				<ul>
				<li>Ф.И.О.<input type="text" name="name" class="form-control" placeholder="ФИО" required></li>
				<li>Пол<input type="text" name="MaleOrFemale" class="form-control" placeholder="Мужской" required></li>
				<li>Возраст<input type="text" name="age" class="form-control" placeholder="20" required></li>
				<li>Кол-во дней <input type="text" name="numberDays" class="form-control" placeholder="4" required></li>
				<li>Дата бронирования<input type="text" name="data" class="form-control" placeholder="2019-04-27" required></li>
				<li>Контактный телефон<input type="text" name="phone" class="form-control" placeholder="89374355381" required></li>
				<li><button class="btn btn-lg btn-primary btn-block" type="submit">Забронировать</button></li>
				</ul>
		</form>
	</div>
	</div>

	<?php 
		$email = $_SESSION['email'];
		$name = $_SESSION['name'];
		echo "<div class='signin-text'>На вашу почту : " .$email. " отправлено сообщение , о успешном бронировании, проверьте! </div>";
		echo "<div><a href='index.php'>Вернуться главную</a></div>";


	$message = "Вы успешно забронировали номер ".$name." на сайте нашего Отеля-Орион. ";
	$to = "".$email."";
	$subject = "Отель-Орион : Бронирование";
	mail($to, $subject, $message);
	
 ?>
	
</body>
</html>