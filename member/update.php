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
    <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require_once($_SERVER['DOCUMENT_ROOT']."/ODW/db/db.php");
        
        $sql = $db -> prepare("SELECT * FROM register WHERE userid=:userid");
        $sql -> bindParam("userid",$_SESSION['userid']);
        $sql -> execute();
        $row = $sql -> fetch();
    ?>
    <section id="normal-section">
        <div class="sub-menu-bg relative">
            <!-- 서브메뉴배경 래퍼, 존재이유 : overflow:hidden;, 평소 높이 : 0, 활성화 높이 : 470px -->
            <div>
                <!-- 서브메뉴배경, 높이 : 항상 470px, 평소 transform:translateY(-100%), 활성화 transform:translateY(0) -->
                <div></div>
            </div>
        </div>
        <div class="mainCon">
            <div class="updateTitle">회원정보</div>
            <form action="member_process.php?mode=update" method="post" class="updateForm">
                <input type="hidden" name="userid" value="<?= $row['userid']?>">
                <table class="updateTable">
                    <tr>
                        <td>아이디</td>
                        <td><?= $row['userid'] ?></td>
                    </tr>
                    <tr>
                        <td>비밀번호</td>
                        <td><input type="password" name="pw1"></td>
                    </tr>
                    <tr>
                        <td>비밀번호 확인</td>
                        <td><input type="password" name="pw2"></td>
                    </tr>
                    <tr>
                        <td>전화번호</td>
                        <td><input type="text" name="tel" placeholder=<?= $row['tel']?>></td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td><?= $row['email'] ?></td>
                    </tr>
                </table>
                <div class="updateBtn">
                    <input type="submit" value="수정">
                    <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT']."/ODW/footer.php"); ?>
</body>
</html>