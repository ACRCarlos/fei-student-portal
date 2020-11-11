<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "includes/head.php" ?>
</head>

<body>
    <?php require_once "includes/header.php" ?>
    <?php require_once "includes/connection.php" ?>
    
    <section id="content" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md"></div>

                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-body">
                            <?php if (isset($_SESSION['user'])) : ?>
                                <h3 class="text-center">
                                    Welcome, <?php echo $_SESSION['user']['name'] ?>
                                </h3>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md"></div>
            </div>
        </div>
    </section>

    <?php require_once "includes/foot.php" ?>

</body>

</html>