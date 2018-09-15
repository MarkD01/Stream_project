<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post something new</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $activePage = true; include("bootstrap.php"); ?>
</head>
<body>
<?php $activePage = "new_post"; include("header.php"); ?><br>
<form method="post" id="ajaxForm">
    <div class="container bg-light">
        <h1 class="text-center">Add a Post to the Home page!</h1>   
        <label for="p_title">Post Title</label>
        <input type="text" class="form-control" name="p_title">
        <label for="p_author">Post Author</label>
        <input type="text" class="form-control" name="p_author">
        <label for="p_tag">Tags</label>
        <input type="text" class="form-control" name="p_tag">
        <label for="p_content">Post Content</label>
        <textarea cols="10" rows="10" class="form-control" name="p_content"></textarea><br>
        <button type="submit" class="btn btn-primary" name="p_add">Add Post</button>        
    </div>
</form>
<?php include("footer.php"); ?>
</body>
</html>