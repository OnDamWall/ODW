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

    $time = DateTime::createFromFormat('Y-m-d H:i:s', $review['redate']);
    $time = date_format($time, 'Y-m-d');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ODW/css/default.css">
    <link rel="stylesheet" href="/ODW/css/style.css?ver=22">
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
    <title>온담월</title>
</head>
<body>
    <section>
        <div class="mainCon">
            <div class="viewTitle"><?= $review['title'] ?></div>
            <div class="viewInfo">
                <div class="viewName"><?= $review['name']?></div>
                <div class="viewTime"><?= $time?></div>
            </div>
            <div class="viewStory">
                <?= $review['story']?>
                <?php 
                    if(!$review['image']){

                    } else{
                        echo "<br><img src='image/$review[image]'></img>";
                    }
                ?>
            </div>
            <div class="viewBtn">
                <div><a href="review.php">목록으로</a></div>
                <?php if($review['userid'] != $_SESSION['userid']){
                    } else{
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