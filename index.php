<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Отель - Орион</title>
</head>
<body id="all">
	<div class="top">
		<h2>Отель - Орион</h2>
		<?php 

		require('connect.php');
		$username = $_POST['username'];
		if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		echo "<div class='signin-text'>Добро пожаловать " .$username. "! </div>";
		echo "<a href='logout.php'> Выйти </a> <br>";
		}
		?>
		<ul>
			<li><a href="login.php">Авторизация</a></li>
			<li><a href="registration.php">Регистрация</a></li>
		</ul>
	</div>
	<div class="grid">
		<div class="grid-item"><img src="https://100review.ru/img/nomer-otely.jpg"></div>
		<div class="grid-item"><img src="https://im0-tub-ru.yandex.net/i?id=168d8c4491e687c8da6bd59e1f4f66b0-l&n=13"></div>
		<div class="grid-item"><img src="https://avatars.mds.yandex.net/get-pdb/251121/cf8ad4c4-9041-4c39-a5db-13014301ef85/s1200?webp=false"></div>
		<div class="grid-item"><img src="https://s1.1zoom.ru/big3/627/349992-admin.jpg"></div>
		<div class="grid-item"><img src="http://solidrent.ru/shared_pics/courchevel-hotels/courchevel-hotels-013.jpg"></div>
		<div class="grid-item"><img src="http://turpotok.com/wp-content/uploads/2017/10/Centara-Grand-Phratamnak-Pattaya-Hotel-Photo-1024x683.jpg"></div>
	</div>

</body>
</html>