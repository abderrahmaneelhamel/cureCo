<!DOCTYPE html>
<html lang="en">

<head>
  <title>CureCo</title>
  <link rel="shortcut icon" href="app/Views/images/logo1.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="app/Views/fonts/icomoon/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="app/Views/css/bootstrap.min.css">
  <link rel="stylesheet" href="app/Views/css/magnific-popup.css">
  <link rel="stylesheet" href="app/Views/css/jquery-ui.css">
  <link rel="stylesheet" href="app/Views/css/style2.css">
  <link rel="stylesheet" href="app/Views/css/owl.carousel.min.css">
  <link rel="stylesheet" href="app/Views/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="app/Views/css/aos.css">

  <link rel="stylesheet" href="app/Views/css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2 fixed-top">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="home" class="js-logo-clone">CureCo</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="shop">Store</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <?php if(isset($_SESSION["user"])){
                        echo '<li  class="scroll-to-section nav-item"><a style="justify-content: center; color: #ffffff;" id="nvrb" class="nvr disconnect" href="disconnect">Logout</a></li>';
                  }else{
                        echo '<li  class="scroll-to-section nav-item"><a id="nvrb" class="nvr" href="login">Login</a></li>';
                  }
                  ?>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php $row = mysqli_fetch_assoc($resultat1); echo $row['COUNT(*)']?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('app/Views/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To CureCo</h1>
              <p>
                <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
        <?php 
          while($row = mysqli_fetch_assoc($resultat)){
        ?>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop"><img src="app/Views/<?php echo $row["image"] ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="shop"><?php echo $row["label"];?></a></h3>
            <p class="price"><span><?php echo $row["price"] ?></span>$</p>
          </div>
          <?php } ?>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
            <?php 
                  while($row2 = mysqli_fetch_assoc($resultat2)){
               ?>
              <div class="text-center item mb-4">
                <a href="shop"> <img src="app/Views/<?php echo $row2["image"] ?>" alt="Image"></a>
                <h3 class="text-dark"><a href="shop"><?php echo $row2["label"];?></a></h3>
                <p class="price"><span><?php echo $row2["price"] ?></span>$</p>
              </div>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="app/Views/images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="app/Views/images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="app/Views/images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="app/Views/images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('app/Views/images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('app/Views/images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>CureCo Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('app/Views/images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="app/Views/js/jquery-3.3.1.min.js"></script>
  <script src="app/Views/js/jquery-ui.js"></script>
  <script src="app/Views/js/popper.min.js"></script>
  <script src="app/Views/js/bootstrap.min.js"></script>
  <script src="app/Views/js/owl.carousel.min.js"></script>
  <script src="app/Views/js/jquery.magnific-popup.min.js"></script>
  <script src="app/Views/js/aos.js"></script>

  <script src="app/Views/js/main.js"></script>

</body>

</html>