<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
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
    <p class="description">화이트데이를 맞아 특별한 손님만을 위한 사탕을 준비했어요.</p>
    <p class="description">하지만 이곳에선 로그인을 해야만 입장이 가능합니다.<p>
    <p class="description"><strong>특별한 손님이 될 준비가 되셨나요?</strong></p>
</div>

<div class="container">
    <div class="login-section">
        <button onclick="location.href='login.php'">로그인</button>
    </div>
</div>

<div class="image-container">
    <img src="main.png" alt="Main">
</div>

</body>
</html>
