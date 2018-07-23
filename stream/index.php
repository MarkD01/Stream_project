<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php"); ?>
</head>
<body onload="startTime()">
<?php include("header.php");?>
<div class="container">
<?php 
include("config.php");
$stmt = $con->prepare("SELECT * FROM posts ORDER BY pid");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
foreach($results as $row) {
    ?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-4 text-center"><?php echo $row['p_title']; ?></h1>
                    <p class="lead text-center">by <a href="https://twitch.tv/mark_ed" target="_blank"><?php echo $row['p_author']; ?></a></p>
                    <p class="text-right"><?php echo $row['upload_date']; ?></p>
                <hr>
                  <p class="lead"><?php echo $row['p_content'];?></p>
                    <blockquote class="text-right">
                        <footer class="blockquote-footer">Written by <cite title="Source Title"><?php echo $row['p_author'];?>.</cite></footer>
                    </blockquote>
                    <blockquote class="text-left">
                        <footer class="blockquote-footer">Tags: <?php echo $row['tags'];?></footer>
                    </blockquote>
             </div>
        </div>
<?php } ?>
</div>
    <hr>
    <?php include("footer.php");?>
</body>
</html>