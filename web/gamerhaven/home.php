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
  
<body class="bg-light">
  <?php include 'header.php'; ?>
  <div class="container bg-primary py-2">
    <h2 class="text-center text-white">Welcome to Gamer Haven</h2>
    
    <p class="text-white">If your a gamer, then Gamer Haven is your community. Browse your favorite games,
    find new games, and see what other gamers have to say about them. If you feel like
    giving back, feel free to post your own review on one of our countless selection of
    reviewable games! Enjoy your new little peace of paradise.</p>
    
    <h3>We now have games on the following consoles ready to review:</h3>
    <ul class="list-group">
      <li class="list-group-item">Xbox One</li>
      <li class="list-group-item">PlayStation 4</li>
      <li class="list-group-item">Nintendo Switch</li>
    </ul>
    <h3>Recently Added Games:</h3>

    <?php include 'new_game_form.php' ?>

    <?php
    include 'connectdatabase.php';
    
    $statement = $db->query("SELECT game_name, description FROM game;");
    
    include 'showgames.php'; 
    ?>
  </div>
</body>
</html>
