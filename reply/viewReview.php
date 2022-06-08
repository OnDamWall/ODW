<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once($_SERVER['DOCUMENT_ROOT']."/ODW/db/db.php");

    $no = $_GET['no'];
    $sql = $db -> prepare("SELECT * FROM review WHERE no=:no");
    $sql -> bindParam("no",$no);
    $sql -> execute();
    $review['userid'] = NULL;
    $review = $sql -> fetch();

    $time = DateTime::createFromFormat('Y-m-d H:i:s', $review['redate']);
    $time = date_format($time, 'Y-m-d');
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
    <script>
        function confirmDel(text) {
            const selValue = confirm(text);
            if(selValue == true){
                location.href="board_process.php?mode=delete&no=<?= $review['no']?>";
            } else if(selValue == false){
                history.back(1);
            }
        }
    </script>
</head>
<body>
	<header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header> 
    <section id = "board-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="mainCon">
            <div class="viewTitle"><?= $review['title'] ?></div>
            <div class="viewContentWrapper">
                <div class="viewInfo">
                    <div class="viewName">작성자 : <?= $review['name']?></div>
                    <div class="viewTime">작성날 : <?= $time?></div>
                </div>
                <div class="viewStory">
                    <?php 
                        if (!$review['image']) {

                        } else{
                            echo "<br><img src='image/$review[image]' class='viewImageContent'></img>";
                        }
                    ?>
                    <br>
                    <?= $review['story'] ?>
                </div>
            </div>
            <div class="viewBtn">
                <div><a href="reply.php">목록으로</a></div>
                <?php 
                    if (isset($_SESSION['userid']) ? ($review['userid'] != $_SESSION['userid']) : true) {

                    } else {
                ?>
                <div>
                    <a href="reviewUpdate.php?no=<?= $review['no']?>">수정</a>
                    <a href="#" onclick="confirmDel('정말로 삭제하시겠습니까?')">삭제</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>