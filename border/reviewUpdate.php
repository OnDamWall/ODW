<?php
    require_once("../db/db.php");
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
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=21">
    <title>ODW TEST</title>
</head>
<body>
    <header>
        <nav id="navBar">
            <div class="navBarCon">
                <div class="navBarleft">
                    ODW TEST
                </div>
                <div class="navBarItem">
                    <ul>
                        <a href="../main.php"><li>홈으로</li></a>
                        <a href="review.php"><li>리뷰 보기</li></a>
                    </ul>
                </div>
                <div class="navBarRight">
                    <div class="navBarLogin">
                        <?php if(!isset($_SESSION['userid'])){
                            echo '<a href="../member/login.php">로그인</a>';
                        } else {
                        echo '<div class="helloUser">'.$_SESSION['name'].'님 환영합니다.</div>';
                        echo '<div class="outAndUpdate"><a href="../member/member_process.php?mode=logout">로그아웃</a> | 
                        <a href="../member/update.php">정보수정</a>
                        </div>';
                        }
                        ?>   
                    </div>
                </div>
            </div>
        </nav>
    </header>
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
    <footer></footer>
</body>
</html>