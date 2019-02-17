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
  ?>

  <div class="container">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addReviewForm">Simple collapsible</button>
    <div id="addReviewForm" class="collapse">
    <form action="#">
      <textarea name="content">
      <h3>Score</h3><br/>
      <input type="text">
    </form>
    </div>
  </div>

  <?php
  include 'connectdatabase.php';
  
  $statement = $db->query("SELECT score, r.description, display_name
                          FROM review AS r 
                          JOIN game AS g 
                          ON r.game_id = g.id
                          JOIN general_user AS u
                          ON r.user_id = u.id
                          WHERE g.game_name = '$Game_Name';");
  
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<div class="container bg-light my-2 py-2">';
  echo '<h3>Score: ' . $row['score'] . '</h3>';
  echo '<p>Review: ' . $row['description'] . '</p>';
  echo '<p>User: ' . $row['display_name'] . '<p>';
  echo '</div>';
}
  
?>
  
</body>
</html>