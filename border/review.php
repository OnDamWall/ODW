<?php
    require_once("../db/db.php");
    session_start();

    $sql = $db -> prepare("SELECT * FROM review order by no DESC");
    $sql -> execute();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=18">
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
    <footer></footer>
</body>
</html>

