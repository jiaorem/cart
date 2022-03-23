<?php
require('app/Customer.php');
require('app/Product.php');
require('app/ShoppingCart.php');
require('app/FileUtility.php');

$products_data = FileUtility::openCSV('products.csv');

$products = Product::convertArrayToProducts($products_data);

$customer = new Customer('Micoh Yabut', 'yabut.micohjomarie@auf.edu.ph');

$shoppingCart = new ShoppingCart($customer);
$shoppingCartItems = $shoppingCart->getAllItems();
?>
<html>
<head>
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
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
<section class="h-100 h-custom" style="background-color: #89CFF0;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="products-list.php" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 3 items in your cart</p>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://cafe24img.poxo.com/withdrama/web/product/big/202110/7f439d3264858bcfe1f375845f1cf2c7.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Formula of Love</h5>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 750</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://m.media-amazon.com/images/I/71mmeN+c9vL._SL1254_.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Fancy You</h5>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 500</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://m.media-amazon.com/images/I/51xszzWqszL.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Feel Special</h5>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">PHP 1100</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                    <p class="mb-2">Subtotal</p>
                    <p class="mb-2">PHP 2,350.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                    <p class="mb-2">Shipping</p>
                    <p class="mb-2">PHP 150.00</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                    <p class="mb-2">Total</p>
                    <p class="mb-2">PHP 2,500.00</p>
                    </div>

                    <button type="button" class="btn btn-info btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                    </div>
                    </button>

              </div>
              

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</h4>

<?php if (count($shoppingCartItems) > 0): ?>

    <table>
    <thead>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Subtotal</th>
    </thead>
    <tbody>

    <?php foreach ($shoppingCartItems as $item): ?>

        <tr>
            <td><?php echo $item['product']->getName(); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['subtotal']; ?></td>
        </tr>

    <?php endforeach; ?>

        <tr>
            <td colspan="4">
                <?php echo $shoppingCart->getItemsTotal(); ?>
            </td>
        </tr>

    </tbody>
    </table>

    <?php endif; ?>

</body>
</html>

<style>
body{
  background-color: #89CFF0; 
  font-family: Bebas;
}
@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
</style>