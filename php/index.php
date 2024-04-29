<?php 
  // Session start
  session_start(); 

  // Overenie, či užívateľ nie je prihlásený, a ak áno, presmeruje sa na domovskú stránku
  if (!isset($_SESSION['username']) && basename($_SERVER['PHP_SELF']) !== 'login.php' && basename($_SERVER['PHP_SELF']) !== 'register.php') {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }

  // Ak je prítomný GET parameter 'logout', ukončíme reláciu a presmerujeme na prihlasovaciu stránku
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="header">
        <h2>Home Page</h2>
</div>
<div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><?php echo $_SESSION['username']; ?></strong> ty môžeš využívať jednu z našich služieb, ktorou sú anonymné priznania študentov v Nitre.</p>
    <?php endif ?>
      <ul> 
        <li>
             <a class=".text-fontss" href="../PHPCRUD/index.php">HighWay anon</a>
        </li>
      </ul>
</div>
                
</body>
</html>