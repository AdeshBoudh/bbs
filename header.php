<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Blood Bank System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <?php if (isset($_SESSION['hid'])) { ?>
            <?php } elseif (isset($_SESSION['rid'])) { ?>
            <?php } else { ?>
                <ul class="navbar-nav mx-3">
                    <li class="nav-item mx-3">
                        <a class="nav-link btn btn-dark" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="register.php">Register</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>