<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>