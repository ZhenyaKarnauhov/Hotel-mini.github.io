<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type">
	<link rel="stylesheet" href="css/zoom-css.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

	<title>Кагау-Политика</title>
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
			<h3 class="Comfortaa">ПОЛИТИКА Гостиницы «КаГау» В ОБЛАСТИ ОБРАБОТКИ И ЗАЩИТЫ ПЕРСОНАЛЬНЫХ ДАННЫХ</h3>
			<h5 class="loading-file"><a href="https://kagau.ru/wp-content/uploads/2018/01/Utverzhdennaya-politika-o-personalnyih-dannyih.docx">Скачать</a></h5>
		</div>
	</section>

	
	<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy1.jpeg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy2.jpeg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy3.jpeg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy4.jpeg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy5.jpg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy6.jpg">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="img/policy7.jpeg">
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      zoom: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  </script>

	<!-- <div class="grid">
	<div class="grid-item"><img src="https://100review.ru/img/nomer-otely.jpg"></div>
	<div class="grid-item"><img src="https://im0-tub-ru.yandex.net/i?id=168d8c4491e687c8da6bd59e1f4f66b0-l&n=13"></div>
	<div class="grid-item"><img src="https://avatars.mds.yandex.net/get-pdb/251121/cf8ad4c4-9041-4c39-a5db-13014301ef85/s1200?webp=false"></div>
	<div class="grid-item"><img src="https://s1.1zoom.ru/big3/627/349992-admin.jpg"></div>
	<div class="grid-item"><img src="http://solidrent.ru/shared_pics/courchevel-hotels/courchevel-hotels-013.jpg"></div>
	<div class="grid-item"><img src="http://turpotok.com/wp-content/uploads/2017/10/Centara-Grand-Phratamnak-Pattaya-Hotel-Photo-1024x683.jpg"></div>
	</div> -->

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