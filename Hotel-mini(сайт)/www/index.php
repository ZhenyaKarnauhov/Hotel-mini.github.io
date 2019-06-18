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

	<title>Кагау-Главная</title>
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

	<section class="welcome-center">
		<div class="welcome-conteiner">
			<h3 class="Comfortaa">Отель - КАГАУ</h3>
		</div>
	</section>


<div class="slider">
	
<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/1.png" alt=""></div>
      <div class="swiper-slide"><img src="img/2.png" alt=""></div>
      <div class="swiper-slide"><img src="img/3.png" alt=""></div>
      <div class="swiper-slide"><img src="img/4.png" alt=""></div>
      <div class="swiper-slide"><img src="img/5.png" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
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

</div>

	<section class="info-hotel">
		<div class="info-container">
			<p class="info-text"> Гостиница «Кагау» расположена в центре города Пенза на 2 и 3 этажах ТК «Кагау» (г. Пенза, ул. Гагарина, 28). Гостиница имеет идеальное месторасположение, как для деловых людей, так и для отдыхающих туристов. Вам не составит труда добраться отсюда в любой конец города. </p>
			<p class="info-text">В номерах бесплатный Wi-Fi, кабельное телевидение, телефон, кондиционер, ванная комната оборудована душевой кабиной, бесплатными туалетно-косметическими принадлежностями (зубная щетка с пастой, мыло, полотенце, халаты, тапочки, фен). В стоимость номера входит Завтрак. Для гостей отеля доступна прачечная, гладильная.</p>
			<p class="info-text">Круглосуточный отдел регистрации и обслуживания гостей (ресепшн) гостиницы вот уже 10 лет встречает спортсменов всех видов спорта, туристов из разных городов России и зарубежных стран.</p>
			<p class="info-text">Не выходя из здания, можно не дорого и вкусно пообедать или поужинать в ресторане «Седьмое небо» или в Спортбаре «Стадион».</p>
			<p class="info-text">К услугам гостей – банкетный зал, конференц-зал.</p>
			<p class="info-text">В здании расположены аптека, банкоматы, магазины продовольственных и промышленных товаров, ремонт обуви/одежды, салон красоты, пункты продажи железнодорожных и авиа билетов, отделы сувенирной продукции.</p>

			</div>
	</section>
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