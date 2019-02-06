<h1>Scripture Resources</h1>

<?php
require_once '_db.php';

$statement = $db->query('SELECT id, book, chapter, verse, content FROM scriptures;');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<p>';
  echo '<strong>Scripture: ' . htmlspecialchars($row['book']) . '</strong>' . $row['chapter'] . ':' . $row['verse'] . '<br/>';
  echo htmlspecialchars($row['content']);
  echo '</p>';
}