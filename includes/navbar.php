<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="./">Securaji</a>
        <button class="navbar-toggler custom-toggler collapsed" data-toggle="collapse" data-target="#navbarNav">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == "home"){echo "active";} ?>" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == "projects"){echo "active";} ?>" href="./projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == "contact"){echo "active";} ?>" href="./contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>