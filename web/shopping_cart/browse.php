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
          <li class="nav-item active">
            <a class="nav-link" href="browse.html">Juices</a>
          </li>
        </ul>
      </nav>


      <div class=" text-white text-center">
        <div class="p-3">
          <h2>Juice Products</h2>
        </div>
        
        <div class="row">
          <div class="col-md-4 py-5">
            <h2>Apple Juice</h2>
            <img class="img-fluid" src="apple.jpg" alt="apple juice">
          </div>
          <div class="col-md-4 py-5">
            <h2>Orange Juice</h2>
            <img class="img-fluid" src="orange.jpg" alt="orange juice">
          </div>
          <div class="col-md-4 py-5">
            <h2>Pomegranate Juice</h2>
            <img class="img-fluid" src="pomegranate.jpg" alt="pomegranate juice">
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-4 py-5">
            <h2>Carrot Juice</h2>
            <img class="img-fluid" src="carrot.jpg" alt="carrot juice">
          </div>
          <div class="col-md-4 py-5">
            <h2>grape Juice</h2>
            <img class="img-fluid" src="grape.jpg" alt="grape juice">
          </div>
          <div class="col-md-4 py-5">
            <h2>Tomato Juice</h2>
            <img class="img-fluid" src="tomato.jpg" alt="tomato juice">
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
