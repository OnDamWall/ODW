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
    <section id="normal-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="mainCon">
            <div class="loginTitle"></div>
            <form action="member_process.php?mode=login" method="post" class="loginForm">
                <p class="loginId">아이디 : <input type="text" name="userid"></p>
                <p class="loginPw">비밀번호 : <input type="password" name="pw"></p>
                <div class="loginButton">
                    <input type="submit" value="로그인">
                    <input type="button" value="취소" onclick="location.href='/ODW/main.php'">
                </div>
            </form>
            <div class="registerAndFind">
                <a href="register.php">회원가입</a>&nbsp;|
                <a href="findId.php">아이디/비밀번호 찾기</a>
            </div>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>