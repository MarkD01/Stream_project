<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php");?>
<script>
    function yesnoCheck(that) {
        if (that.value == "other") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>
</head>
<body onload="startTime()">
<?php include("header.php");?><br>
<form method="post" action="mailto:" enctype="text/plain">
    <div class="container bg-light">
        <h1 class="text-center">Contact me about anything!</h1>
        <label for="name">Name</label>
        <input type="text" class="form-control" name="Name: ">
        <label for="email">E-Mail</label>
        <input type="email" class="form-control" name="E-Mail: ">
        <label for="email">Subject</label><br>
        <select onchange="yesnoCheck(this);" class="form-control">
            <option value="Twitch">Twitch related</option>
            <option value="Programming">Programming related</option>
            <option value="other">Other...</option>
        </select>
        <div id="ifYes" style="display: none;">
            <label>Other Subject:</label><br><input type="text" class="form-control">
        </div><br>
        <label for="email">Message</label>
        <textarea cols="10" rows="10" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-primary">Send E-Mail</button   
    </div>
</form>
    <?php include("footer.php");?>
</body>
</html>