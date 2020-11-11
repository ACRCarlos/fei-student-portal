<?php require_once 'includes/connection.php' ?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">FEI Student Portal</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <?php if (!isset($_SESSION['user'])) : ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                <?php else :  ?>
                    <li class="nav-item">
                        <a href="auth/logout.php" class="nav-link">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>