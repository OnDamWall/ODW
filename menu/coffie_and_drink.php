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
			<img src="/ODW/ODW-Private/menus/drink-strawberry_earl_grey_bottle-01.jpg" alt="01" class="menu-main-img"/>
		</div>
		<h1>이것이 바로오♡ 스트로붸리~☆<br>이거 먹고 빙글빙글~~~</h1>

		<?php
			function PrintMenuContent($src, $name) {
				echo ("<div class='drink-menu'>
						<img src={$src} alt={$name} class='drink-menu-img'/>
						<div class='menu-name'>$name</div>
					</div>");
			}
		?>
		<div class="menu-category-title">커피</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-americano.jpg", "아메리카노"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-hazelnut_americano.jpg", "헤이즐넛 아메리카노"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-cafe_latte.jpg", "카페라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-hazelnut_cafe_latte.jpg", "헤이즐넛 카페라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-vanilla_latte.jpg", "바닐라라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-cappuccino.jpg", "카푸치노"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-caffe_mocha.jpg", "카페모카"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-caramel_macchiato.jpg", "카라멜 마끼아또"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-dolce_latte.jpg", "돌체라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-americano_shot.jpg", "아샷추"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-matcha_latte.jpg", "말차라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-decafe_americano.jpg", "말차라떼"); ?>
		</div>
		<div class="menu-category-title">밀크 티</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-milkteas_bottle-01.jpg", "밀크티 보틀"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-milkteas_bottle-02.jpg", "밀크티 보틀2"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-earl_grey_milktea.jpg", "얼그레이 밀크티"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-golden_loyale_milktea.jpg", "골든 로얄 밀크티"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-strawberry_earl_grey_bottle-02.jpg", "딸기 얼그레이 보틀"); ?>
		</div>
		<div class="menu-category-title">시그니처 티</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-peach_blacktea.jpg", "복숭아 홍차"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-peach_earl_grey.jpg", "복숭아 얼그레이티"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-citron_earl_grey.jpg", "유자 얼그레이티"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lemon_rooibos.jpg", "레몬 루이보스티"); ?>
		</div>
		<div class="menu-category-title">에이드</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-odw_ade.jpg", "온담월 에이드"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-peach_earl_grey.jpg", "토마토 바질 에이드"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-green_tangerine_ade.png", "청귤 에이드"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-green_grape.jpg", "청포도 에이드"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lemon_ade.jpg", "레몬 에이드"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lime_mojito_ade.jpg", "라임 모히또 에이드"); ?>
		</div>
		<div class="menu-category-title">라떼</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-strawberry_latte.jpg", "생딸기라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-greentea_latte.jpg", "녹차라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-blacktea_latte.jpg", "홍차라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-choco_latte.jpg", "초코라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-mint_choco_latte.jpg", "민트초코라떼"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-sweet_potato_latte.png", "고구마라떼"); ?>
		</div>
		<div class="menu-category-title">허브 티</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-chamomile.jpg", "캐모마일"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-pepper_mint.jpg", "페퍼민트"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-rooibos.jpg", "루이보스"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-hibiscus.jpg", "히비스커스"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-earl_grey.jpg", "얼그레이"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lavender.jpg", "라벤더"); ?>
		</div>
		<div class="menu-category-title">티</div>
		<div class="normal-menu-wrapper">
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-rooibos.jpg", "유자차"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-hibiscus.jpg", "율무차"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-earl_grey.jpg", "레몬차"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lavender.jpg", "생강차"); ?>
			<?php PrintMenuContent("/ODW/ODW-Private/menus/drink-lavender.jpg", "대추차"); ?>
		</div>
    </section>
	<?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>