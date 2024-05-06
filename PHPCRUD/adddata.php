<?php
session_start();

// Проверяем, существует ли сессия с именем пользователя
if (!isset($_SESSION['username'])) {
    // Если сессия с именем пользователя не существует, перенаправляем пользователя на страницу входа
    header('Location: php/login.php');
    exit(); // После перенаправления следует завершить выполнение скрипта
}
?>

<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        // Получаем значения из формы
        $name = $_POST['name'];
        $Faculty = $_POST['fakulty']; 
        $message = isset($_POST['message']) ? $_POST['message'] : ''; // Используем isset() для проверки существования ключа в массиве $_POST

        // Проверяем, заполнены ли все обязательные поля
        if($name != "" && $Faculty != "" && $message != "" ){
            // Строим SQL-запрос для добавления данных в базу данных
            $sql = "INSERT INTO results (`name`, `class`, `message`) VALUES ('$name', '$Faculty', '$message')";
            // Выполняем SQL-запрос
            if (mysqli_query($conn, $sql)) {
                header("location: index.php"); // Перенаправляем на главную страницу после успешного добавления
            } else {
                 echo "Something went wrong. Please try again later."; // Выводим сообщение об ошибке, если запрос не выполнен
            }
        } else {
            echo "Name, Class, and Message cannot be empty!"; // Выводим сообщение, если какое-то из полей не заполнено
        }
    }
?>
