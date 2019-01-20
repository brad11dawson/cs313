<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>BD - Directory</title>
  </head>
  <body class="bg-primary">
    <div class="container bg-dark">
      <div class="text-white text-center p-2">
        <h1>Bradley's Homepage</h1>
      </div>
    
      <nav class="navbar navbar-expand-md navbar-dark bg-secondary">      
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="directory.html">Directory</a>
          </li>
        </ul>
      </nav>
    
      <div class="text-center text-white my-4">
        <h2>About Me!</h2>
        <img src="basketball.jpeg" class="img-responsive rounded-circle" alt="Basketball" heigh="300" width="300">
      </div>
      <div class="bg-secondary">
        <p class="p-3 text-white">I am what you call the perfect mix of nerd and jock. I grew up 
        watching and playing basketball my entire life. Being a fan of the Phoenix Suns, it has been a rought few years. I also have always loved math and Science. After serving my mission in Jamaica i undertook the challenge of getting a degree in Computer Science. So far i have loved programming and look forward to everything I get to learn in the two years I still have in college.</p>
      </div>
      <?php
        echo "Date: " . date("Y/m/d") . "<br>";
        echo "Time: " . date("h:i:sa") . "<br>";
      ?>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>