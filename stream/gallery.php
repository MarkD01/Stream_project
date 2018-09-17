<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php"); ?>
</head>
<body>
    <?php $activePage = "gallery"; include("header.php"); ?>
<div class="container">
<h1 class="my-4 text-center text-lg-center">Image Gallery</h1>
<div class="row text-center text-lg-left">
    <?php
    try {
        $stmt = $con->prepare("SELECT * FROM images ORDER BY img_id");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    if($results) {
        foreach($results as $result) { 
            echo '
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="../uploads/'.$result['img_name'].'" alt="">
          </a>
        </div>';
    }
} else {
    echo "we'll get em next time";
}
?>
</div>
</div>
    <?php include("footer.php"); ?>
</body>
</html>