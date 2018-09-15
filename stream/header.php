<?php session_start();?>
<div class="mb-3 text-center bg-dark text-white py-4">
    <h1><a href="index.php" class="href_head" style="color: #fff;">Mark_ED's Home page</a></h1>
    <p>Websites built during my time as a web Designer &amp; Developer</p>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span> 
</button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link <?= ($activePage == "home") ? " active " : ""; ?>" href="index.php">Home</a>
            <a class="nav-item nav-link <?=($activePage == "portfolio") ? " active ":"";?>" href="portfolio.php">Portfolio</a>
            <a class="nav-item nav-link <?=($activePage == "about_me") ? " active " : ""; ?>" href="about_me.php">About Me</a>
            <a class="nav-item nav-link <?=($activePage == "contact") ? " active " : ""; ?>" href="contact.php">Contact</a>
        <?php if (isset($_SESSION['username'])) { ?>
            <a class="nav-item nav-link <?=($activePage == "new_post") ? " active " : ""; ?>" href="n_post.php">Post something new</a>
            <a class="nav-item nav-link <?= ($activePage == "new_images") ? " active " : ""; ?>" href="n_images.php">Post images</a>           
        <?php } ?>
        </div>
        <?php if (isset($_SESSION['username'])) { ?> 
         <ul class="navbar-nav bg-dark">
             <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt" style="color: white;"></i>Logout</a></li>
         </ul>  
        <?php } else { ?>
            <a class="nav-item nav-link <?=($activePage == "login") ? " active " : ""; ?>" href="login.php"><i class="fas fa-sign-in-alt" style="color: white;"></i> Login</a>
        <?php } ?>
    </div>
</nav>