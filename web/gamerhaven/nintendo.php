<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamer Haven - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
  
<body>
  <?php include 'header.php'; ?> 
  
  <div class="container bg-primary py-2">
    <h2 class="text-center">Nintendo Switch</h2>
    <?php
    include 'connectdatabase.php';

    $statement = $db->query("SELECT game_name, description 
    FROM game_console 
    INNER JOIN game ON game_console.game_id = game.id 
    INNER JOIN console ON game_console.console_id = console.id 
    WHERE console_name = 'Nintendo Switch';");

    include 'showgames.php';
    ?>
  </div>
</body>
</html>