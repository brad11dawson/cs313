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

<?php
require 'connectdatabase.php';

if (isset($_POST['username'] && isset($_POST['password']))) {
  $statement = $db->prepare('SELECT * FROM general_user WHERE username = :username LIMIT 1;');
  $statement->execute(array(':username' => $_POST['username']));
  $user = $statement->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($_POST['password'], $user['password'])) {
    // success!
    session_start();
    $_SESSION['user_id'] = $user['id'];
    header('Location: home.php');
    die();
  } else {
    $incorrect_login = true;
  }
}
?>  

<body class="bg-light">
  <?php include 'header.php'; ?>
  <div class="container bg-primary py-2">
  <h2 class="text-center">Log-In</h2>
  <div class="text-center img-fluid d-none d-sm-block">
    <img src="gh_logo.png" />
  </div>
    <div class="mx-auto w-50 my-5" >
      <?php if ($incorrect_login): ?>
        <p>Incorrect Login Attempt</p>
      <?php endif; ?>
      <form method="POST" action="login.php">
      <div class="form-group">
          <label for="username" class="col-form-label-lg">User Name:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="User Email" required>
      </div>
      <div class="form-group">
          <label for="password" class="col-form-label-lg">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-secondary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</body>
</html>