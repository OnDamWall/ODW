<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--모바일 반응형 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include($_SERVER['DOCUMENT_ROOT']."/ODW/icon.php"); ?>
	<link rel="stylesheet"  href="/ODW/css/main.css?after">
	<title>온담월</title>
</head>
<body>
	<header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header>

    <section id="menu-section">
		<div style="text-align: center;">
			<img src="/ODW/ODW-Private/menus/cookies.jpg" alt="01" class="menu-main-img"/>
		</div>
		<h1>이것이 바로오♡ 꾸끼이~☆<br>음료랑 같이 먹으면 너도 나도 행복 두배~~</h1>
		<?php
			function PrintMenuContent($src, $name) {
				echo ("<div class='drink-menu'>
						<img src={$src} alt={$name} class='drink-menu-img'/>
						<div class='menu-name'>$name</div>
					</div>");
			}
		?>
        <div class="normal-menu-wrapper">
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-black_sesame_smore.jpg", "흑 세사미 스모어"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-choco_levain.jpg", "초코르뱅"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-matcha_smore.jpg", "말차 스모어"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-matcha_levain.jpg", "말차르뱅"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-mocha_levain.jpg", "모카르뱅"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-oreo_smore.jpg", "오레오 스모어"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-raisin_scon.jpg", "레진 스콘"); ?>
        	<?php PrintMenuContent("/ODW/ODW-Private/menus/cookie-walnut_scon.jpg", "월넛 스콘"); ?>
		</div>
		<footer></footer>
    </section>
</body>
</html>