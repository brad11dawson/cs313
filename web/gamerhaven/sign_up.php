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
    include 'connectdatabase.php';

    if (isset($_POST['username'])) {
        //check to see if username is taken
        $username = $_POST['username'];
        $display_name = $_POST['display_name'];

        $statement = $db->prepare('SELECT 1 AS one FROM users WHERE username = :username LIMIT 1;');
        $statement->execute([':username' => $username]);
        $user_exists = $statement->fetch(PDO::FETCH_ASSOC)['one'];

        if(isset($_POST["password"])) {
            //check if password is a valid password
            $hashedpassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

            //Insert into database

            $stmt = $db->prepare(
              'INSERT INTO general_user(username, password, display_name)
              VALUES(:username, :hashedpassword, :display_name);'
            );
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->bindValue(':hashedpassword', $hashedpassword, PDO::PARAM_STR);
            $stmt->bindValue(':display_name', $display_name, PDO::PARAM_STR);
            $stmt->execute();

            $newURL = 'login.php';
            header('Location: ' . $newURL);
            die();
        }
    }
?>
  
<body class="bg-light">
  <?php include 'header.php'; ?>
  <div class="container bg-primary py-2">
  <h2 class="text-center">Create an Account</h2>
  <div class="text-center img-fluid d-none d-sm-block">
    <img src="gh_logo.png" />
  </div>
    <div class="mx-auto w-50 my-1" >

      <form method="POST" action="sign_up.php">
      <div class="form-group">
          <label for="username" class="col-form-label-lg">User Name:</label>
          <input type="text" class="form-control" id="username" name="uesrname" placeholder="User Name" required>
      </div>
      <div class="form-group">
          <label for="displayname" class="col-form-label-lg">Display Name:</label>
          <input type="text" class="form-control" id="displayname" name="display_name" placeholder="Display Name" required>
      </div>
      <div class="form-group">
          <label for="password" class="col-form-label-lg">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="form-group">
          <label for="confirmpassword" class="col-form-label-lg">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-secondary">Submit</button>
      </div>
      </form>
    </div>
  </div>

  <script>
    $('form').on('submit',function(){
    if($('#password').val()!=$('#confirmpassword').val()){
        alert('Password not matches');
        return false;
    }
    return true;
  });
  </script>
</body>
</html>