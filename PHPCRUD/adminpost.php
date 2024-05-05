<?php
session_start();

// Проверяем, существует ли сессия с именем пользователя
if (!isset($_SESSION['username'])) {
    // Если сессия с именем пользователя не существует, перенаправляем пользователя на страницу входа
    header('Location: php/login.php');
    exit(); // После перенаправления следует завершить выполнение скрипта
}

// Обробка виходу з сесії при натисканні кнопки "logout"
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
    <div class="contents">
        <form method="post">
            <button class="button" type="submit" name="logout" class="btn btn-danger">Logout</button>
        </form>
    </div>
    <div class="contents">
        <?php  if (isset($_SESSION['username'])) : ?>
            <p class="welcome" >Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>

    <section>
        <h1 style="text-align: center;margin: 50px 0;">HighWay post</h1>
        <p style="text-align: center;margin: 50px 0;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p style="text-align: center;margin: 50px 0;">the most interesting posts that students talk about</p>

        <p style="text-align: center;margin: 30px 0;">You can also check out our next products</p>

        <li style="text-align: center;">
            <a href="index.php">HighWay anonym</a> <a href="adminpost.php">HighWay post</a>
        </li>
                <!-- Форма для загрузки изображений -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <!-- Вывод загруженных изображений -->
        <div class="img-fluid">
            <?php
            $dir = "uploads/"; // Папка, где хранятся загруженные изображения
            $images = glob($dir . "*.{jpg,png,gif}", GLOB_BRACE); // Получаем список изображений

            foreach($images as $image) {
                echo '<img src="'.$image.'" class="img-fluid" alt="Uploaded Image">';
            }
            ?>
        </div>

</div>


    </section>

</body>

</html>
