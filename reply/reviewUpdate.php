<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/ODW/db/db.php');

    $no = $_GET['no'];

    $sql = $db -> prepare("SELECT * FROM review WHERE no=:no");
    $sql -> bindParam("no",$no);
    $sql -> execute();
    $review = $sql -> fetch();

    if(isset($_SESSION['userid']) ? ($review['userid'] != $_SESSION['userid']) : true){
        errMsg('수정 권한이 없습니다.');
    }

?>
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
    
    <section id = "normal-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="mainCon">
            <div class="writeTitle">리뷰 수정</div>
            <form class="writeForm" action="board_process.php?mode=update" method="post" enctype= "multipart/form-data">
                <input type="hidden" name="id" value="review">
                <input type="hidden" name="no" value="<?= $review['no']?>">
                <input type="hidden" name="userid" value="<?= $_SESSION['userid'] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" size="50" value="<?= $review['title']?>" required></p>
                <textarea class="writeTextarea" name="story" required><?= $review['story']?></textarea>
                <?php 
                    if(!$review['image']){
                    } else { ?>
                        <?= $review['image']?><br>
                <?php } ?>
                <input type="file" name="image" value="<?=$review['image']?>">
                <div class="writeBtn">
                    <input type="submit" value="작성">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>