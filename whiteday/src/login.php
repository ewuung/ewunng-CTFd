<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $query = "SELECT MEM_ID, MEM_NAME, MEM_PW FROM MEMBERS WHERE MEM_ID = '$id' AND MEM_PW = '$password'";
    $result = $pdo->query($query);
    $user = $result->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user_id'] = $user['MEM_ID'];
        $_SESSION['username'] = $user['MEM_NAME'];
        header("Location: home.php");
        exit;
    } else {
        $error = "아이디 또는 비밀번호가 잘못되었습니다.";
    }
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
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: rgb(206, 91, 104);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: rgb(206, 91, 104);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: rgb(206, 91, 104);
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
            <a href="main.php" class="title" style="text-decoration: none; color: inherit;">
                <span class="title">🍬사탕...좋아하세요?🍬</span>
            </a>
    </header>
    <div class="container">
        <h2>Login 로그인</h2>
        <?php if (!empty($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="id">아이디</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">로그인</button>
        </form>
    </div>
</body>
</html>
