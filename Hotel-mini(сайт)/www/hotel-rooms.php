<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

	<title>Кагау-Номера</title>
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.php"><img src="img/logo.png" class="graficlogo" alt="Логотип - Кагау"></a>
		</div>
	</header>
	<div class="top">
		<div class="topItem" id="item1">
		</div>

<!-- МЕНЮ -->

		<div class="header">
			<div class="header__section">
				<div class="header__item headerButton"><a href="index.php">Об отеле</a></div>
				<div class="header__item headerButton"><a href="hotel-rooms.php">Номера</a></div>
				<div class="header__item headerButton"><a href="bron_form/index.php">Бронирование</a></div>
				<div class="header__item headerButton"><a href="company-policy.php">Политика</a></div>
			</div>	
			<div class="header__section"> 
				<?php 
					require('connect.php');
					$username = $_POST['username'];
					if (isset($_SESSION['username'])) {
					$username = $_SESSION['username'];
					echo "<div class='session-text'>Вы вошли, как-" .$username. "  ! </div>";
					echo "<a class='header__item headerButton' href='logout.php'>Выйти </a> <br>";
					
				}
				?>
				<div class="header__item headerButton"><a href="enter-exit/login.php">Авторизация</a></div>
				<div class="header__item headerButton"><a href="enter-exit/registration.php">Регистрация</a></div>
				
			</div>
		</div>
	</div>

	<!-- УСЛУГИ -->

	<div class="dws-wrapper"><a href="#"><img src="img/school2.png" alt="Бесплатные услуги">
	<div class="dws-text">

			<h3>Бесплатные услуги</h3>

			<ol>Круглосуточная стойка регистрации</ol>
			<ol>Заказ такси</ol>
			<ol>Заказ трансфера от аэропорта или вокзала</ol>
			<ol>Предоставление утюга и гладильной доски, фена</ol>
			<ol>Пробудка гостя к определенному времени</ol>
			<ol>Услуги по ксерокопированию и отправке почты</ol>
			<ol>Ежедневная уборка номеров</ol>
			<ol>Смена постельного белья каждые 5 дней</ol>
			<ol>Пользование медицинской аптечкой</ol>

			<h3>Платные услуги</h3>

			<ol>Услуги по стирке и глажке белья</ol>
	</div>
	</a></div>

	<!-- Конец - Услуги -->

	<!-- Заголовок Стандарт -->

	<section class="welcome-center">
		<div class="welcome-conteiner">
			<h3 class="Comfortaa">Номер - Стандарт</h3>
			<h5>Стоимость за сутки (руб.) - 2 000</h5>
		</div>
	</section>

	<!-- Cлайдер номеров (Стандарт)-->
  <div class="swiper-container" style="height: 350px">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/standart1.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/standart2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/standart3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/standart4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/standart5.jpg" alt=""></div>
    </div>
    <!-- добав.пагинации (точек) -->
    <div class="swiper-pagination"></div>
    <!-- Указатели перелистывания -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Слайдер JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Инициализация Слайдера -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

	<!-- Заголовок ЛЮКС -->

	<section class="welcome-center">
		<div class="welcome-conteiner">
			<h3 class="Comfortaa">Номер - Люкс</h3>
			<h5>Стоимость за сутки (руб.) - 3 500</h5>
		</div>
	</section>

	<!-- Cлайдер номеров (ЛЮКС)-->
  <div class="swiper-container" style="height: 350px">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/lux.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/lux2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/lux3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/lux4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/lux5.jpg" alt=""></div>
    </div>
    <!-- добав.пагинации (точек) -->
    <div class="swiper-pagination"></div>
    <!-- Указатели перелистывания -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Слайдер JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Инициализация Слайдера -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>


  <!-- Заголовок ЛЮКС-vip -->

	<section class="welcome-center">
		<div class="welcome-conteiner">
			<h3 class="Comfortaa">Номер - Люкс-VIP</h3>
			<h5>Стоимость за сутки (руб.) - 4 500</h5>
		</div>
	</section>

	<!-- Cлайдер номеров (ЛЮКС-vip)-->
  <div class="swiper-container" style="height: 350px">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/vip.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/vip2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/vip3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/vip4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="img/vip5.jpg" alt=""></div>
    </div>
    <!-- добав.пагинации (точек) -->
    <div class="swiper-pagination"></div>
    <!-- Указатели перелистывания -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Слайдер JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Инициализация Слайдера -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

<!-- О номере -->

	<div class="dws-wrapper"><a href="#"><img src="img/school2.png" alt="Бесплатные услуги">
	<div class="dws-text">

			<h3>Номер</h3>

			<ol>В каждом номере есть кондиционер, кабельное ТВ, холодильник, санузел, интернет Wi-Fi, бесплатные туалетно-косметические принадлежности (зубная щётка с пастой, мыло, полотенце, халаты, тапочки, фен). 
			Не выходя из ТК Кагау Вы можете посетить сауну (хамам)- имеется два прекрасных зала с большим и теплым бассейном.</ol>
			
	</div>
	</a></div>

	<!-- Конец - О номере -->


</div>



</body>


<footer>
	<div class="footer">
		<ul>
			<div class="footer_item">Администрация: +7(8412) 49-49-22, +7(8412) 49-49-40.</div>
			<div class="footer_item">Гостиница: +7(8412) 49-49-96.</div>
			</ul>
		<div class="footer_item"><a href="https://www.google.ru/maps/place/%D0%9A%D0%B0%D0%B3%D0%B0%D1%83/@53.2212026,44.8957044,20.21z/data=!4m12!1m6!3m5!1s0x41410114692c7efb:0xc59469d2ca8fdfa3!2z0JrQsNCT0LDRgywg0YLQvtGA0LPQvtCy0YvQuSDQutC-0LzQv9C70LXQutGB!8m2!3d53.221326!4d44.895181!3m4!1s0x414102164a780a97:0xd1672708587cacb9!8m2!3d53.2211942!4d44.8957291" target="_blank">Мы на карте</a></div>

	
	</div>
</footer>


</html>