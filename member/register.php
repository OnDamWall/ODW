<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--모바일 반응형 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include($_SERVER['DOCUMENT_ROOT']."/ODW/icon.php"); ?>
	<link rel="stylesheet" href="/ODW/css/main.css?after">
	<title>온담월</title>
</head>
<body>
	<header>
        <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/header.php"); ?>
	</header>
    <section id="normal-section">
        <div class="sub-menu-bg relative" style="height: 200px">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="mainCon">
            <div class="registerTitle">회원가입</div>
            <div class="registerBox">
                <form name="register" action="member_process.php?mode=register" method="POST">
                    <input type="hidden" name="id" value="register">
                    <table class="registerTable">
                        <tr>
                            <td>아이디</td>
                            <td><input type="text" name="userid" required></td>
                        </tr>
                        <tr>
                            <td>비밀번호</td>
                            <td><input type="password" name="pw1" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인</td>
                            <td><input type="password" name="pw2" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>이름</td>
                            <td><input type="text" name="name" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>성별</td>
                            <td><input type="checkbox" name="sex" value="male" checked>남&nbsp;&nbsp;
                            <input type="checkbox" name="sex" value="female">여</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>전화번호</td>
                            <td><input type="text" name="tel" placeholder="010-1234-5678"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>이메일</td>
                            <td><input type="text" name="email" required></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="registerSubmit">
                        <input type="submit" value="가입"></input>
                        <button onClick="history.back(-1)">취소</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>