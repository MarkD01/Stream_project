<?php
include('config.php');
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]) ;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        return header("Location: index.php?status=error&message=File is not an image.");
        $uploadOk = 0;
    }
    
}

if (file_exists($target_file)) {
    return header("Location: index.php?status=error&message=File exists already.");
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    return header("Location: index.php?status=error&message=File is too big");
    $uploadOk = 0;
}

// Allow certain file formats

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    return header("Location: index.php?status=error&message=File type not supported.");
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
$newName = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);

if ($uploadOk == 0) {
    return header("Location: index.php?status=error&message=Something went wrong, please try again.");

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newName. "." .$imageFileType)) {
        try {
            $stmt = $con->prepare("INSERT INTO images(img_name) VALUES (:img_name)");
            $stmt->bindValue(':img_name', $newName . "." . $imageFileType);
            $stmt->execute();
        } catch (PDOException $exception) {
            return header("Location: index.php?status=error&message=" .$exception->getMessage());
        }
        header("Location: index.php?status=success&message=Image succesfully uploaded.");
    } else {
        return header("Location: index.php?status=error&message=Image has not been saved, please try again.");
    }
}
?>