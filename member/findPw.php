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
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css?ver=15">
    <title>Sung's 영화 리뷰</title>
</head>
<body>
    <header>
        <nav id="navBar">
            <div class="navBarCon">
                <div class="navBarleft">
                    Sung's 영화 리뷰
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
            <div class="registerTitle">비밀번호 찾기</div>
            <div class="findIdPw">
            <form action="member_process.php?mode=findPw" method="post">
                <p>아이디 : <input type="text"  name="userid" placeholder="아이디 입력" size="30"></p>
                <p class="findEmail">이메일 : <input type="text"  name="email" placeholder="이메일 입력" size="30"></p>
                <div class="findBtn">
                <input type="submit" value="찾기">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
            <div class="findMenu">
                <button onclick="location.href='findId.php'">아이디 찾기</button>&nbsp;&nbsp;&nbsp;
                <button onclick="location.herf='findPw.php'">비밀번호 찾기</button>
            </div>
        </div>
    </section>
    <footer></footer>
    <script src="../script/script.js"></script>
</body>
</html>