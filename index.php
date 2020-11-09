<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "includes/head.php" ?>
</head>

<body>

  <?php require_once "includes/header.php" ?>

  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Heading One</h1>
              <p class="lead">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Expedita necessitatibus minima beatae doloremque recusandae
                culpa omnis nesciunt, aliquid, molestias fuga ut! Ipsa
                voluptates illum nihil.
              </p>
              <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Heading Two</h1>
              <p class="lead">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Expedita necessitatibus minima beatae doloremque recusandae
                culpa omnis nesciunt, aliquid, molestias fuga ut! Ipsa
                voluptates illum nihil.
              </p>
              <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-3 text-right">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Heading Three</h1>
              <p class="lead">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Expedita necessitatibus minima beatae doloremque recusandae
                culpa omnis nesciunt, aliquid, molestias fuga ut! Ipsa
                voluptates illum nihil.
              </p>
              <a href="#" class="btn btn-success btn-lg">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!-- HOME ICON SECTION -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cog fa-3x mb-2"> </i>
          <h3>Turning Gears</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque,
            quas.
          </p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cloud fa-3x mb-2"> </i>
          <h3>Sending Data</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque,
            quas.
          </p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-cart-plus fa-3x mb-2"> </i>
          <h3>Making Money</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque,
            quas.
          </p>
        </div>
        <div class="col-md-4 mb-4 text-center"></div>
      </div>
    </div>
  </section>

  <?php include_once "includes/footer.php" ?>

  <?php include_once "includes/foot.php" ?>
</body>

</html>