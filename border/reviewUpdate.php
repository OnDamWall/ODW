<?php
    require_once("/ODW/db/db.php");
    session_start();

    $no = $_GET['no'];

    $sql = $db -> prepare("SELECT * FROM review WHERE no=:no");
    $sql -> bindParam("no",$no);
    $sql -> execute();
    $review = $sql -> fetch();

    if($review['userid'] != $_SESSION['userid']){
        errMsg('수정 권한이 없습니다.');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ODW/css/default.css">
    <link rel="stylesheet" href="/ODW/css/style.css?ver=21">
    <title>온담월</title>
</head>
<body>
    <section>
        <div class="mainCon">
            <div class="writeTitle">리뷰 수정</div>
            <form class="writeForm" action="board_process.php?mode=update" method="post" enctype= "multipart/form-data">
                <input type="hidden" name="id" value="review">
                <input type="hidden" name="no" value="<?= $review['no']?>">
                <input type="hidden" name="userid" value="<?= $_SESSION['userid'] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" size="50" value="<?= $review['title']?>" required></p>
                <textarea class="writeTextarea" name="story" required><?= $review['story']?></textarea>
                <?php if(!$review['image']){
                    } else{ ?>
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