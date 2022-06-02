<?php
    require_once("../db/db.php");
    session_start();

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
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=22">
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
    <footer></footer>
</body>
</html>