<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Авторизация</title>
</head>

<body>
    <button onclick="go()" class="back"><img src="image/back 1.png" alt=""></button>
    <h2 class="Autorisation">Авторизация</h2>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error"><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form action="auth.php" method="post">
        <input type="text" placeholder="Логин" class="login" name="login">
        <input type="password" placeholder="Пароль" class="password" name="password">
        <button class="sumbit" type="submit">Войти</button>
        <script>
            function go() {
                window.location.href = "index.php";
            }
        </script>
        <?php

        ?>
    </form>

    <img src="image/image 5.png" alt="" class="i">
</body>

</html>