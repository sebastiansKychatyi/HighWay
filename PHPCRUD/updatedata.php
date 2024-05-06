<?php
session_start();

// Kontrola, či je užívateľ prihlásený
if (!isset($_SESSION['username'])) {
    header('Location: php/login.php');
    exit(); 
}


require_once "conn.php";

// Ak sa odosielajú údaje z formulára pre aktualizáciu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $new_value = $_POST["new_value"];

    $query = "UPDATE results SET message = '$new_value' WHERE id = '$id'";


    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
}

// Ak chceš aktualizovať konkrétny záznam, môžeš zobraziť formulár
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <h2>Update Record</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        New Value: <input type="text" name="new_value">
        <input type="submit" value="Update">
    </form>
</body>
</html>

