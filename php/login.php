<?php
// Проверяем, активна ли уже сессия
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Подключение файла с конфигурацией базы данных
require_once 'server.php';

$errors = array(); // Массив для хранения ошибок

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы входа
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Подготовка SQL запроса для выборки пользователя из базы данных
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";

    // Выполнение SQL запроса
    $result = mysqli_query($conn, $sql);

    // Проверка наличия результата и соответствия логина и пароля
    if (mysqli_num_rows($result) == 1) {
        // Если логин и пароль верные, устанавливаем сессию и перенаправляем пользователя
        $_SESSION['username'] = $username;
        //header('Location: index.php');
        exit();
    } else {
        // Если пользователь не найден или пароль неверен, добавляем ошибку
        $errors['login'] = 'Неверное имя пользователя или пароль';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Login</h2>
  </div>
         
  <form method="post" action="login.php">
        <?php if (isset($errors['login'])) : ?>
            <div class="error"><?php echo $errors['login']; ?></div>
        <?php endif; ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Sign up</a>
        </p>
  </form>
</body>
</html>
