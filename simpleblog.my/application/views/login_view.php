<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php echo "Это страница авторизации пользователя".'<br>';?>
<form method="post" action="../controllers/login_controller.php">

    <input type="text" name="username" placeholder="username" required /></br>
    <input type="password" name="password" placeholder="password" required /></br>
    <input type="submit" name="login" value="Login" />

</form>

</body>
</html>