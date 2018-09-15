<!DOCTYPE html>
<html>
    <?php include("bootstrap.php");?>
<body>
<?php $activePage = "new_images"; include("header.php");?>

<div class="container bg-light py-5 my-4">
<form action="upload_img.php" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text rounded-0">Upload image(s)</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name ="fileToUpload" id="inputGroupFile01">
    <label class="custom-file-label rounded-0" for="inputGroupFile01">Choose the file you want to upload</label>
  </div>
</div>
    <button type="submit" class="btn btn-dark rounded-0" name="submit">Upload images</button>
</form>
</div>
<?php include("footer.php");?>
</body>
</html>