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

    <script>
    $(document).ready(function(){
      $("#removeAll").click(function(){
        $.post("remove_all.php",
        {
        },
        );
      alert("Items have been removed");
      });
    });

    $(document).ready(function(){
      $(".remove").click(function(){
        $.post("remove_cart.php",
        {
          item: $(this).val()
        },
        );
      alert("item removed from shopping cart");
      });
    });
  </script>
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
          <li class="nav-item">
            <a class="nav-link" href="checkout.php">Checkout</a>
          </li>
        </ul>
      </nav>


      <div class=" text-white p-5">
        <div class="p-3 text-white text-center">
          <h2>Shopping Cart</h2>
          <button class="btn btn-secondary" id="removeAll">Remove all items</button>
        </div>
        
        <div class="container border border-dark justify-content-center col-lg-6 p-3">
              <?php
              $arrlength = count($_SESSION["cart"]);

              if($arrlength > 0)
              {
                echo "<ul>";
                for($x = 0; $x < $arrlength; $x++) {
                  echo "<li>" . $_SESSION["cart"][$x] . " juice</li>";
                  echo "<br/>";
                  echo "<button class='remove btn btn-secondary' value=$x>Remove Item From List</button>";
                  echo "<br/>";
                }
                echo "</ul>";
              };
              ?>
        </div>
      </div>
      <div class="p-3 text-white text-center">
          <a class="btn btn-secondary" href="checkout.php" role="button">Check Out</a>
        </div>
    </div>
  </body>
      
</html>