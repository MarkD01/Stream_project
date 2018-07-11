<?php session_start();?>
<div class="jumbotron rounded-0 text-center bg-primary text-white">
    <h1><a href="index.php" class="href_head" style="color: #fff;">Mark_ED's Home page</a></h1>
    <p>Websites built during my time as a web Designer &amp; Developer</p>
    <div id="clock" class="w-100 text-center"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span> 
</button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link text-white" href="portfolio.php">Portfolio</a>
            <a class="nav-item nav-link text-white" href="about_me.php">About Me</a>
            <a class="nav-item nav-link text-white" href="contact.php">Contact</a>
        <?php if (isset($_SESSION[username])) { ?>
            <a class="nav-item nav-link text-white" href="n_post.php">Post something new</a>           
        <?php } ?>
        </div>
        <?php if (isset($_SESSION[username])) { ?> 
         <ul class="navbar-nav bg-primary">
             <li class="nav-item"><a href="logout.php" class="nav-link text-white"><i class="fas fa-sign-out-alt" style="color: white;"></i>Logout</a></li>
         </ul>  
        <?php } else { ?>
            <a class="nav-item nav-link text-white" href="login.php"><i class="fas fa-sign-in-alt" style="color: white;"></i> Login</a>
        <?php } ?>
    </div>
</nav>