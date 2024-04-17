<?php
session_start();

// Проверяем, существует ли сессия с именем пользователя
if (!isset($_SESSION['username'])) {
    // Если сессия с именем пользователя не существует, перенаправляем пользователя на страницу входа
    header('Location: php/login.php');
    exit(); // После перенаправления следует завершить выполнение скрипта
}
?>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
  </div>
<?php  endif ?>