<?php
    require_once("../db/db.php");
    session_start();
    if(!$_SESSION['userid']){
        errMsg('로그인 후 작성할 수 있습니다.');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=15">
    <title>odw review</title>
</head>
<body>
    <header>
        <nav id="navBar">
            <div class="navBarCon">
                <div class="navBarleft">
                    odw review
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
            <div class="writeTitle">리뷰 쓰기</div>
            <form class="writeForm" action="board_process.php?mode=write" method="post" enctype= "multipart/form-data">
                <input type="hidden" name="id" value="review">
                <input type="hidden" name="userid" value="<?= $_SESSION['userid'] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" size="50" placeholder="제목을 입력해주세요" required></p>
                <textarea class="writeTextarea" name="story" placeholder="본문을 입력해주세요"  required></textarea>
                <input type="file" name="image">
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
/* css 파일*/
.writeTitle{
    width: 35%;
    margin: auto;
    margin-top: 30px;
    text-align: center;
    font-size: 30px;
}

.writeForm{
    width: 40%;
    margin: auto;
    margin-top: 60px;
    text-align: left;
}

.writeForm input[type=text]{
    font-size: 20px;
    margin-bottom: 30px;
}

.writeTextarea{
    width: 95%;
    height: 500px;
    resize: none;
}

.writeBtn{
    width: 95%;
    margin-top: 20px;
    text-align: center;
}

.writeBtn input[type=submit], .writeBtn input[type=button]{
   font-size: 16px;
}