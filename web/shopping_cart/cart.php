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
            <a class="nav-link active" href="cart.php">Shopping Cart</a>
          </li>
        </ul>
      </nav>


      <div class=" text-white">
        <div class="p-3 text-white text-center">
          <h2>Shopping Cart</h2>
        </div>
        
        <div class="container mx-50">
          <div class="panel panerl-default">
            <div class="panel-heading">Items in cart</div>
            <div class="pannel-body">
              <?php
                print_r($_SESSION)["cart"];
              ?>
            </div>
          </div>
        </div>
      </div>
      
    </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>