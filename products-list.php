<?php
require('app/Customer.php');
require('app/Product.php');
require('app/FileUtility.php');

$products_data = FileUtility::openCSV('products.csv');

$products = Product::convertArrayToProducts($products_data);

$customer = new Customer('Micoh Yabut', 'yabut.micohjomarie@auf.edu.ph');
?>

<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
<header >
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="candy.png" href="products-list.php" height="50" width="50"><img>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-it em">
                <a class="nav-link active headercon" aria-current="page" href="products-list.php">HOME</a>
            </li>
            <li class="nav-it em">
                <a class="nav-link active headercon" aria-current="page" href="products-list.php">KPOP ALBUMS</a>
            </li>
            <li class="nav-it em">
                <a class="nav-link active" aria-current="page" href="products-list.php">OFFICIAL LIGHTSTICKS</a>
            </li>
            <li class="nav-it em">
                <a class="nav-link active" aria-current="page" href="products-list.php">OFFICIAL GOODS</a>
            </li>
        </ul>
        <a href="shopping-cart.php">
          <img src="cartlight.png" left="2000" position="fixed" width="50" height="50" >
        </a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
</header>

</br></br></br></br>
<h1 class="greet">Welcome <?php echo $customer->getName() ?>!</h1>
<div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img src="https://upload.wikimedia.org/wikipedia/en/8/8e/Twice_-_Formula_of_Love.png" width="140" height="140" focusable="false" width="100%" height="100%"></img>
        <h2>Formula of Love</h2>
        <p>The letters O and T represent the initials of Once—the group's official fandom's name—and Twice, respectively, while the heart symbol represents love; thus, the "formula of love" can be verbalized as "Once plus Twice equals love".</p>
        <p><a class="btn btn-light" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      <img src="https://upload.wikimedia.org/wikipedia/en/9/90/Twice_-_Eyes_Wide_Open.png" width="140" height="140" focusable="false" width="100%" height="100%"></img>

        <h2>Eyes Wide Open</h2>
        <p>“To express it in one phrase, I'd say, 'Opening your eyes to your senses. ' If we were able to learn about new senses during 'MORE & MORE,' this album explains that moment you truly register the senses we recognized in our last release.”</p>
        <p><a class="btn btn-light" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      <img src="https://i.scdn.co/image/ab67616d0000b27328e649c0e2d1a3a98ccf8ea3" width="140" height="140" focusable="false" width="100%" height="100%"></img>
        <h2>More & More</h2>
        <p>“When you fall in love, you want to more about that person. It's an album that reflects that desire to know more and want more of the person you fall in love with.” Momo explained, “I think I can describe it as an album that says, 'I want more from you!</p>
        <p><a class="btn btn-light" href="#">View details &raquo;</a></p>
      </div>
    </div>

</br>
<h2>Available products</h2>

<?php foreach ($products as $product): ?>

<form action="add-to-cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>" />
    <h3><?php echo $product->getName(); ?></h3>
    <img src="<?php echo $product->getImage(); ?>" height="100px" />
    <p>
        <?php echo $product->getDescription(); ?><br/>
        <span style="color: black">PHP <?php echo $product->getPrice(); ?></span>
        Qty <input type="number" name="quantity" class="quantity" value="0" />
        <button type="submit" class="btn btn-danger">
            ADD TO CART
        </button>
    </p>
</form>

<?php endforeach; ?>

</body>
</html>


<style>
.greet{
    position: relative;
    left: 40%;
    color: #000;
    font-family: Bebas;
    font-weight: 600;
}
body{
    background-color: #89CFF0; 
    font-family: Bebas;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

@media (min-width: 1000px) {
.bd-placeholder-img-lg {
    font-size: 3.5rem;
}
}
</style>