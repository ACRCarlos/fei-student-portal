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
                                Welcome!
                            </h3>

                            <hr>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <input type="submit" value="submit" class="btn btn-success btn-block">
                            </div>

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