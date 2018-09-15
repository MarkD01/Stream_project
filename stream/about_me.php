<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php");?>
</head>
<body>
<?php $activePage = "about_me"; include("header.php");?>
<br>
<div id="carouselExampleIndicators" class="carousel w-50 mx-auto slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=Second slide" alt="Second slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=Third slide" alt="Third slide">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>

<div class="container">
   <br>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #1</h5>
               <h6 class="card-title text-primary">Who am I?</h6>
               <hr>
               <p class="card-text">My name is Mark</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #2</h5>
               <h6 class="card-title text-primary">Where am I from?</h6>
               <hr>
               <p class="card-text">"My Mom" - <a href="https://twitch.tv/ko_badg" target="_blank">ko_badg</a></p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #3</h5>
               <h6 class="card-title text-primary">What do I like to do?</h6>
               <hr>
               <p class="card-text">"Your Mom" - <a href="https://twitch.tv/ko_badg" target="_blank">ko_badg</a></p>
            </div>
         </div>
      </div>
      <hr>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #4</h5>
               <h6 class="card-title text-primary">How Long have I been programming?</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, consequatur.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #5</h5>
               <h6 class="card-title text-primary">What is your Twitch?</h6>
               <hr>
               <p class="card-text">My Twitch is right at the bottom of the screen, or can be found <a href="https://twitch.tv/mark_ed" target="_blank">Here.</a></p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Question #6</h5>
               <h6 class="card-title text-primary">Where do you live?</h6>
               <hr>
               <p class="card-text">Next to my neighbours.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
    <?php include("footer.php");?>

</body>
</html>