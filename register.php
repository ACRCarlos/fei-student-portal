<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "includes/head.php" ?>
</head>

<body>
    <?php require_once "includes/header.php" ?>

    <section id="content" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md"></div>

                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-body">
                            <h3 class="text-center">
                                Register Now!
                            </h3>

                            <hr>

                            <?php if (isset($_SESSION['completed'])) : ?>
                                <div class="alert alert-success"><?php echo $_SESSION['completed']; ?></div>
                            <?php elseif (isset($_SESSION['errors']['general'])) : ?>
                                <div class="alert alert-error"><?php echo $_SESSION['errors']['general']; ?></div>
                            <?php endif; ?>

                            <form action="auth/signup.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" />
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email" />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" />
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-success btn-block">
                                </div>
                            </form>
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