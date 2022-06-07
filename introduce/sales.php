<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/icon.php"); ?>
    <link rel="stylesheet"  href="/ODW/css/main.css?after">
	<title>온담월</title>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
    </header>
    <!-- 유령의 집, 단순한 기준점, 높이 : 항상 0 -->
    <section id="picture-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="picture-contents">
            <img src="/ODW/ODW-Private/shop/interior-11.jpg" width="200">
            <br>
            <h3>영업 정보</h3>
            상호명  온담월<br><br>      
            운영시간 평일 - 오전 9:00 ~ 오후 8:00<br><br>
            휴무일 4월 8일<br>
            내부사정으로인해 휴무입니다!<br><br>
            전화번호 050-6672-7310<br>
            050번은 배달의 민족에서 제공하는 번호
            입니다.<br><br>
            배달지역 용전동, 홍도동, 중리동, 오정동, 중촌동,<br>
            삼성동, 성남동, 법동1동,가양 1동,<br>
            대화동, 송촌동 일부<br>
            <br>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>