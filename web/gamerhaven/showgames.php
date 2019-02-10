<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<div class="container bg-light my-2 py-2">';
  echo '<h3>' . $row['game_name'] . '</h3>';
  echo '<p>' . $row['description'] . '</p>';
  $game_name = $row['game_name'];
  echo '<a href="#" class="btn btn-primary btn-md active" role="button" aria-disabled="true">See Reviews</a>';
  echo '</div>';
}
?>