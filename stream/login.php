<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("bootstrap.php");?>
</head>
<body>
<?php include("header.php");?><br>
<div id="clock"></div>
<form method="POST" action="clogin.php" class="w-50 mx-auto">
    <div class="container bg-light">
        <h1 class="text-center">Admin Login</h1>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password"><br>
        <button type="submit" class="btn btn-primary" name="login">Admin Login</button>
    </div>
</form>



<?php include("footer.php");?>    
</body>
</html>