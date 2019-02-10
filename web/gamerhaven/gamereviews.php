<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamer Haven - Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
  
<body class="bg-light">
  <?php include 'header.php'; ?>
  
  <?php>
  $Game_Name = $_GET["gamename"];
  echo '<div class="container bg-primary py-2">';
  echo '<h2 class="text-center">' . $Game_Name . ' Reviews</h2>';

  include 'connectdatabase.php';
  
  echo '<p>Specific game reviews will go here</p>';
  echo '</div>';
  ?>
  
</body>
</html>