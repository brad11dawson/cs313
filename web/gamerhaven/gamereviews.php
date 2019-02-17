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
  
  <?php
  $Game_Name = $_GET["gamename"];
  echo '<div class="container bg-primary py-2">';
  echo '<h2 class="text-center">' . $Game_Name . ' Reviews</h2>';
  ?>

  <div class="container text-center">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#addReviewForm">Add a Review</button>
    <div id="addReviewForm" class="collapse m-2">
    <form action="#">
      <div class="form-group">
         <select class="custom-select" required>
          <option selected value="">Select Score</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          <option value="4">four</option>
          <option value="5">five</option>
          <option value="6">six</option>
          <option value="7">seven</option>
          <option value="8">eight</option>
          <option value="9">nine</option>
          <option value="10">ten</option>
        </select>
      </div>
      <div class="form-group">
        <label for="reviewContent">Enter Review</label>
        <textarea class="form-control" id="reviewContent" rows="3" required></textarea>
      </div>
       <button type="submit" class="btn btn-secondary mb-2">Submit</button>
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