<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>
    <h2>Đăng ký (POST)</h2>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Tên" required><br><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
        <button type="submit">Gửi</button>
    </form>

    <?php
    if (isset($_POST['name'])) {
        echo "<p>Đã nhận thông tin của <b>" . htmlspecialchars($_POST['name']) . "</b></p>";
    }
    ?>
</body>
</html>
