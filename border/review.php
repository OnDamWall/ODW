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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ODW/css/default.css">
    <link rel="stylesheet" href="/ODW/css/style.css?ver=18">
    <title>온담월</title>
</head>
<body>
    <section>
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

