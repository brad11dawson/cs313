<?php
require_once '_db.php';
$stmt = $db->prepare('SELECT id, book, chapter, verse, content FROM scriptures WHERE id=:id LIMIT 1;');
$stmt->execute(array(':id' => $_REQUEST['id']));
$scripture = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
echo '<h1>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</h1>';
echo '<p>' . $scripture['content'] . '</p>';
?>