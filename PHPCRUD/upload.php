<?php
if(isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    $uploadOk = 1; 

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 

    // Добавим проверку на тип файла
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Добавим проверку на содержимое файла
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Добавим проверку на размер файла (в данном случае 5MB)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Проверяем, существует ли уже файл с таким именем
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Попробуем загрузить файл, если все проверки пройдены успешно
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
            // Можно добавить вывод дополнительной информации о загруженном файле
            echo "Uploaded File Info: Name: " . $_FILES["fileToUpload"]["name"] . " - Size: " . $_FILES["fileToUpload"]["size"] . " bytes";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
