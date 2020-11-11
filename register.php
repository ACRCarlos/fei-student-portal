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