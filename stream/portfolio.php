<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php"); ?>
</head>
<body onload="startTime()">
<?php include("header.php"); ?>
<div class="container"><br>
    <div class="row">
    <?php 
    $i= 1;
    $total = 6;

    for($i; $i <= $total; $i++) { ?>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
            <div class="card-body text-center">
                <a href="#" class="btn btn-primary" id="popup" data-toggle="modal" data-target="#exampleModal">Project #<?php echo $i; ?></a>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, consequatur.</p>
            </div>
        </div>
    </div>
    <?php
     if($i % 3 == 0 && $i !=$total) { ?> </div><hr><div class="row"> <?php }   
    }
    ?>
</div>
</div>
<hr>
<?php include("footer.php");?>    
</body>
</html>