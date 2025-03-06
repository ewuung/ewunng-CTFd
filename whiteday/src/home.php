<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), $_COOKIE[session_name()], 0, "/");
}

$user['MEM_ID'] = $_SESSION['user_id'];
$user['MEM_NAME'] = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: white;
            padding: 20px 0;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 24px;
        }
        .title {
            font-size: 40px;
            font-weight: bold;
            color:rgb(206, 91, 104);
        }
        .info-box {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid rgb(206, 91, 104);
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .description {
            font-size: 18px;
            color: #333;
            font-weight: normal;
            margin: 10px 0;
        }

        .login-section button {
            background-color:rgb(206, 91, 104);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-section button:hover {
            background-color:rgb(206, 91, 104);
        }
        .image-container {
            margin: 20px auto;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<header>
        <a href="main.php" class="title" style="text-decoration: none; color: inherit;">
            <span class="title">🍬사탕...좋아하세요?🍬</span>
        </a>
</header>

<div class="info-box">
    <div class="welcome-section">
        <?php if ($user['MEM_NAME'] == '관리자(랏소)'): ?>
            <h2>환영합니다, 관리자(랏소)님!</h2>
            <p>화이트데이 특별한 손님들의 정보가 업데이트 되었습니다.</p>
            <p>아이디: special / 비밀번호: special+"Q.Why was 6 afraid of 7?"</p>
            <p><strong style="color: red;">즐거운 화이트데이 보내시길 바랍니다..</strong></p>
        <?php else: ?>
            <h2>특별한 손님께서 입장하셨습니다.</h2>
            <p>사탕을 받기 위해선 아래의 정보를 기억하셔야 합니다.</p>
            <p>HACK{I_sm311_0f_str@wb3rri3s}</p>
            <p><strong style="color: red;">즐거운 화이트데이 보내시길..</strong></p>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <div class="login-section">
        <button onclick="location.href='logout.php'">로그아웃</button>
    </div>
</div>


<div class="image-container">
    <img src="special.png" alt="Main">
</div>

</body>
</html>
