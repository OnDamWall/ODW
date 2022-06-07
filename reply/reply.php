<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/ODW/db/db.php');

    $sql = $db -> prepare("SELECT * FROM review order by no DESC");
    $sql -> execute();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/icon.php"); ?>
	<link rel="stylesheet" href="/ODW/css/slider2.css?after">
    <link rel="stylesheet" href="/ODW/css/main.css?after">
	<title>온담월</title>
	<style> 
        #div1 { text-align: center; }/*화면 가운데로 메인로고 정렬*/
	</style>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header>
    <!-- 유령의 집, 단순한 기준점, 높이 : 항상 0 -->
    <section id="slider-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0)  -->
                <div></div>
            </div>
        </div>
        <!-- <div class="slider">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">
            <input type="radio" name="slide" id="slide5">
            <input type="radio" name="slide" id="slide6">

            <ul id="imgholder" class="imgs">
                <li><img src="/ODW/ODW-Private/event/hugi_01.jpg" width="70%"></li>
                <li><img src="/ODW/ODW-Private/event/hugi_02.jpg" width="70%"></li>
                <li><img src="/ODW/ODW-Private/event/hugi_03.jpg" width="70%"></li>
                <li><img src="/ODW/ODW-Private/event/hugi_04.jpg" width="70%"></li>
                <li><img src="/ODW/ODW-Private/event/hugi_05.jpg" width="70%"></li>
                <li><img src="/ODW/ODW-Private/event/hugi_06.jpg" width="70%"></li>
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
     </section> -->
        <div class="mainCon">
            <div class="reviewTitle">리뷰 보기</div>
            <table class="reviewTable">
                <thead>
                    <tr>
                        <td class="reviewTd1">no</td>
                        <td class="reviewTd2">제목</td>
                        <td class="reviewTd3">글쓴이</td>
                        <td class="reviewTd4">작성시간</td>
                    </tr>
                </thead>
                <?php
                    while ($review = $sql -> fetch()){ ?> 
                <?php 
                     $time = DateTime::createFromFormat('Y-m-d H:i:s', $review['redate']);
                     $time = date_format($time, 'Y-m-d');
                ?>
                    <tbody>
                        <tr>
                            <td class="reviewTd1"><?= $review['no']?></td>
                            <td class="reviewTd2"><a href="viewReview.php?no=<?= $review['no']?>"><?= $review['title']?></a></td>
                            <td class="reviewTd3"><?= $review['name']?></td>
                            <td class="reviewTd4"><?= $time?></td>
                        </tr>
                    </tbody>
                <?php } ?>
                    <tfoot>
                    <tr>
                            <td class="reviewTd1"></td>
                            <td class="reviewTd2"></td>
                            <td class="reviewTd3"></td>
                            <td class="reviewTd4"></td>
                        </tr>
                    </tfoot>
            </table>
            <div class="writeReview"><a href="writeReview.php">글쓰기</a></div>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>