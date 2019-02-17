<?php
$game_name = $_POST['game_name'];
$user_id = $_POST['user_id'];
$score = $_POST['score'];
$review_content = htmlspecialchars($_POST['review_content']);

require('connectdatabase.php');

$statement = $db->query('SELECT id FROM game WHERE game_name = $game_name');
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$game_id = $result['id'];
echo "<h1>game id: $game_id </h1>";

/*$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/

//INSERT INTO review(score, user_id, game_id, description) 
?>