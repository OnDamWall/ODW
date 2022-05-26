<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/ODW/css/slider2.css">
    <link rel="stylesheet"  href="/ODW/css/main.css">
	<title>가게 사진 구경하기</title>
	<style> 
        #div1 { text-align: center; }/*화면 가운데로 메인로고 정렬*/
	</style>
</head>
<body>
    <body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header>
    <!-- 유령의 집, 단순한 기준점, 높이 : 항상 0 -->
    <div class="sub-menu-bg relative">
        <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
        <div>
            <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
            <div></div>
        </div>
    </div>
    <br>
    <div class="slider">
        <input type="radio" name="slide" id="slide1" checked>
        <input type="radio" name="slide" id="slide2">
        <input type="radio" name="slide" id="slide3">
        <input type="radio" name="slide" id="slide4">
        <input type="radio" name="slide" id="slide5">
        <input type="radio" name="slide" id="slide6">
    </div>
    <ul id="imgholder" class="imgs">
        <li><img src="/ODW/ODW-Private/event/hugi_01.jpg" width="640"></li>
        <li><img src="/ODW/ODW-Private/event/hugi_02.jpg" width="640"></li>
        <li><img src="/ODW/ODW-Private/event/hugi_03.jpg" width="640"></li>
        <li><img src="/ODW/ODW-Private/event/hugi_04.jpg" width="640"></li>
        <li><img src="/ODW/ODW-Private/event/hugi_05.jpg" width="640"></li>
        <li><img src="/ODW/ODW-Private/event/hugi_06.jpg" width="640"></li>
    </ul>
    <div class="bullets">
        <label for="slide1">&nbsp;</label>
        <label for="slide2">&nbsp;</label>
        <label for="slide3">&nbsp;</label>
        <label for="slide4">&nbsp;</label>
        <label for="slide5">&nbsp;</label>
        <label for="slide6">&nbsp;</label>
    </div>
</body>
</html>