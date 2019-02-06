<?php
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Browse Items</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="shoppingcart.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
      crossorigin="anonymous">
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  
  </head>
  <body bg-primary>
    <div class="content container bg-primary">
      <div class="text-white text-center p-2">
        <h1>Fresh Juice to You!</h1>
      </div>
    
      <nav class="navbar navbar-expand-md navbar-dark bg-secondary">      
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="browse.php">Juices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Shopping Cart</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="checkout.php">Checkout</a>
          </li>
        </ul>
      </nav>

      <div class="container justify-content-center text-white col-lg-6 p-4">
        <h2>Checkout Form</h2>
        <p>To check out and revcieve your fresh juice, please enter an adress</p>
        <form method="post" action="confirmation.php">
          <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" name="city" id="inputCity" placeholder="Rexburg">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <input type="text" class="form-control" name="state" id="inputState" placeholder="ID">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" name="zip" id="inputZip" placeholder="12345">
            </div>
          </div>

            <button type="submit" class="btn btn-secondary">Submit Purchase</button>
            <a class="btn btn-secondary" href="cart.php" role="button">Return to Cart</a>
          </form>
        </div>
    </div>
  </body>
</html>