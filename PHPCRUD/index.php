<?php
session_start();
require_once "conn.php"; // Подключаем файл с настройками базы данных

// Проверяем, существует ли сессия с именем пользователя
if (!isset($_SESSION['username'])) {
    // Если сессия с именем пользователя не существует, перенаправляем пользователя на страницу входа
    header('Location: php/login.php');
    exit(); // После перенаправления следует завершить выполнение скрипта
}

// Получаем роль пользователя из базы данных
$username = $_SESSION['username'];
$query = "SELECT role FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$role = $row['role'];

// Обработка выхода из сессии при нажатии кнопки "logout"
if (isset($_POST['logout'])) {
    session_destroy(); // Уничтожаем все данные сессии
    header('Location: ../php/login.php'); // Перенаправляем пользователя на страницу входа
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighWay anonymne priznania</title>
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Форма для выхода из сессии -->
    <div class="contents">
        <form method="post">
            <button class="button" type="submit" name="logout" class="btn btn-danger">Logout</button>
        </form>
    </div>
    <!-- Приветствие пользователя -->
    <div class="contents">
        <?php if (isset($_SESSION['username'])) : ?>
            <p class="welcome">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>

    <!-- Секция с описанием сайта и правилами -->
    <section>
        <h1 style="text-align: center;margin: 50px 0;">HighWay Text</h1>
        <p style="text-align: center;margin: 50px 0;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p style="text-align: center;margin: 50px 0;">HighWay text is an anonymous website where students can freely share their thoughts without fear of judgment or harassment. Here they can say things that in real life they cannot say out loud for fear of repercussions.</p>
        <h2 style="text-align: center;margin: 40px 0;">Rules</h2>
        <p style="text-align: center;margin: 30px 0;">1.Do not insult anyone.</p>
        <p style="text-align: center;margin: 30px 0;">2.Use a maximum of 499 characters.</p>
        <p style="text-align: center;margin: 30px 0;">3.The admin always has the right.</p>
        <p style="text-align: center;margin: 30px 0;">4.If rule 3 is not followed, then rule 4 applies: the admin always has the right.</p>
        <p style="text-align: center;margin: 30px 0;">5.Let's be kind.</p>
        <p style="text-align: center;margin: 30px 0;">You can also check out our next products</p>
        <p style="text-align: center;margin: 30px 0;">HighWay anonym</p>
        <li style="text-align: center;">
            <a href="index.php">HighWay anonym</a> <a href="adminpost.php">HighWay post</a>
        </li>

        <!-- Форма для добавления данных (доступна для всех пользователей) -->
        <div class="container">
            <form action="adddata.php" method="post">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Nickname</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-3">
                        <label for="">fakulta</label>
                        <select name="fakulty" id="fakulty" class="form-control" required>
                            <option value="">Select a Faculty</option>
                            <option value="fakulta prirodnych vied a informatiky">fakulta prirodnych vied a informatiky</option>
                            <option value="fakulta socialnych vied a zdravotnictva">fakulta socialnych vied a zdravotnictva</option>
                            <option value="fakulta stredoeuropskych studii">fakulta stredoeuropskych studii</option>
                            <option value="filozoficka fakulta">filozoficka fakulta</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="">Message</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items: flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Секция с данными из базы данных -->
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Message</th>
                        <?php if ($role == 2) : ?>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // Выполнение запроса к базе данных для получения данных
                    $sql_query = "SELECT * FROM results";
                    if ($result = $conn ->query($sql_query)) {
                        while ($row = $result -> fetch_assoc()) { 
                            $Id = $row['id'];
                            $Name = $row['name'];
                            $Faculty = $row['class'];
                            $Message = $row['message'];
                    ?>
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Faculty; ?></td>
                        <td><?php echo $Message; ?></td>
                        <!-- Ссылка для редактирования данных (доступна только для администраторов) -->
                        <?php if ($role == 2) : ?>
                            <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                            <!-- Ссылка для удаления данных (доступна только для администраторов) -->
                            <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                        <?php endif ?>
                    </tr>
                    <?php
                        } 
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
