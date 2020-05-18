    <!-- Navigation -->
   <?php
   $navItems = [
    "index.php?page=index" => "Home",
    "index.php?page=about" => "About",
    "index.php?page=contact" => "Contact",
    "index.php?page=login" => "Login"
    ];
?>


<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
    <a class="navbar-brand" href="#">LOGO </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">

        <?php foreach($navItems as $key => $value) : ?>
                            
            <li class="nav-item">
                <a class="nav-link" href="<?= $key ?>"> <?= $value ?></a>
            </li>
            
        <?php endforeach; ?>
        
    </ul>
    </div>
</nav>