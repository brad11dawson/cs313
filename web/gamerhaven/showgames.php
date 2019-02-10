<?php
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<div class="container bg-primary">';
  echo '<h3>' . $row['game_name'] . '</h3>';
  echo '<p>' . $row['description'] . '</p>';
  echo '</div>';
}
?>