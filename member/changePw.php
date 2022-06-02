<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=17">
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
                        <a href="../border/review.php"><li>리뷰 보기</li></a>
                    </ul>
                </div>
                <div class="navBarRight">
                    <div class="navBarLogin">
                        <?php if(!isset($_SESSION['userid'])){
                            echo '<a href="login.php">로그인</a>';
                        } else {
                        echo '<div class="helloUser">'.$_SESSION['name'].'님 환영합니다.</div>';
                        echo '<div class="outAndUpdate"><a href="member_process.php?mode=logout">로그아웃</a> | 
                        <a href="update.php">정보수정</a>
                        </div>';
                        }
                        ?>   
                    </div>
                </div>
        </nav>
    </header>
    <section>
        <div class="mainCon">
            <div class="registerTitle">비밀번호 변경</div>
            <div class="changePw">
            <form action="member_process.php?mode=changePw" method="post">
                <input type="hidden" name="userid" value="<?= $_GET['userid']?>">
                <p>비밀번호 : <input type="password"  name="pw1" size="30"></p>
                <p class="findEmail">비밀번호 확인 : <input type="password"  name="pw2" size="30"></p>
                <div class="findBtn">
                <input type="submit" value="변경">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
        </div>
    </section>
    <footer></footer>
    <script src="../script/script.js"></script>
</body>
</html>