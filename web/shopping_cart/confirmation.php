<?php
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Browse Items</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  <body>
    <div class="container bg-primary">
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
          <li class="nav-item">
            <a class="nav-link" href="checkout.php">Checkout</a>
          </li>
        </ul>
      </nav>
      
      <div class="container content-justify-center col-md-4 text-white p-3">
        <h2>Congratulations!</h2>
        
        <div class="container bg-success p-3">
        <p>Items Being Shippied:</p>
        <?php
          $address = htmlspecialchars($_POST["address"]);
          $city = htmlspecialchars($_POST["city"]);
          $state = htmlspecialchars($_POST["state"]);
          $zip = htmlspecialchars($_POST["zip"]);
        
          $arrlength = count($_SESSION["cart"]);
          echo "<ul>";
          for($x = 0; $x < $arrlength; $x++) {
            echo "<li>" . $_SESSION["cart"][$x] . " juice</li>";
            }
          echo "</ul>";
        ?>
        <br/>
        <p>Shipping Address:</p>
        <?php
          echo $address;
          echo "<br/>";
          echo "$city, $state $zip";
        ?>
      </div>
      

        <?php
          session_unset();
          session_destroy();
        ?>
      </div>
    </div>
     
  </body>
</html>