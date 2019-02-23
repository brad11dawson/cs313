<div class="px-4 py-3 bg-primary d-flex justify-content-between border-bottom">
  <img src="gh_logo.png" class="img-responsive" height="60" />
  <div>
    <h1>Gamer Haven</h1>
  </div>   
  <div>
    <?php
    if(true) {
      echo '<a class="btn btn-primary" href="login.php" role="button">Log In</a>';
      echo '<a class="btn btn-primary" href="sign_up.php" role="button">Sign Up</a>';
    }
    else {
      echo '<button type="button" class="btn btn-primary">Log-Out</button>';
    }
    ?>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Gamer Haven</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="xbox.php">Xbox One</a>
      <a class="nav-item nav-link" href="playstation.php">Playstation 4</a>
      <a class="nav-item nav-link" href="nintendo.php">Nintendo Switch</a>
    </div>
  </div>
</nav>

