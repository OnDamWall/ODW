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
		<div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
		<div style="text-align: center;">
			<img src="/ODW/ODW-Private/season_menus/tomato_vajil_ade-02.png" alt="01" class="menu-main-img"/>
		</div>
		<h1>광란의 신메뉴!!!<br>토메이도오 바지ㄹㄹㄹ~~</h1>
        <div id="menu-wrapper">
			<div class="new-menu">
				<img src="/ODW/ODW-Private/season_menus/tomato_vajil_ade-05.jpg" alt="03" class="new-menu-img"/>
			</div>
			<div class="new-menu">
				<img src="/ODW/ODW-Private/season_menus/tomato_vajil_ade-01.jpg" alt="02" class="new-menu-img"/>
			</div>
			<div class="new-menu">
				<img src="/ODW/ODW-Private/season_menus/tomato_vajil_ade-04.png" alt="04" class="new-menu-img"/>
			</div>
		</div>
    </section>
	<?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>