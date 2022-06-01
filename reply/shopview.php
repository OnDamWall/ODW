<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/icon.php"); ?>
	<link rel="stylesheet" href="/ODW/css/slider2.css?after">
    <link rel="stylesheet"  href="/ODW/css/main.css?after">
	<title>온담월</title>
	<style>
        #div1 { text-align: center; }/*화면 가운데로 메인로고 정렬*/=
	</style>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header>
    <!-- 유령의 집, 단순한 기준점, 높이 : 항상 0 -->
    <section>
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
        
         <ul id="imgholder" class="imgs">
             <li><img src="/ODW/ODW-Private/shop/interior-01.jpg" width="640"></li>
             <li><img src="/ODW/ODW-Private/shop/interior-03.jpg" width="640"></li>
             <li><img src="/ODW/ODW-Private/shop/interior-05.jpg" width="640"></li>
             <li><img src="/ODW/ODW-Private/shop/interior-06.jpg" width="640"></li>
              <li><img src="/ODW/ODW-Private/shop/interior-10.jpg" width="640"></li>
              <li><img src="/ODW/ODW-Private/shop/outterior-01.jpg" width="640"></li>
            </ul>
         <div class="bullets">
             <label for="slide1">&nbsp;</label>
              <label for="slide2">&nbsp;</label>
              <label for="slide3">&nbsp;</label>
              <label for="slide4">&nbsp;</label>
              <label for="slide5">&nbsp;</label>
              <label for="slide6">&nbsp;</label>
            </div>
        </div>
        <footer></footer>
    </section>
</body>
</html>