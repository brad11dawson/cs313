<?php
$game_name = $_POST['game_name'];
$user_id = $_POST['user_id'];
$score = $_POST['score'];
$review_content = htmlspecialchars($_POST['review_content']);

require('connectdatabase.php');

$statement = $db->query("SELECT id FROM game WHERE game_name = '$game_name'");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
$game_id = $result[0]["id"];
echo "<h1>game id: $game_id </h1>";
echo "id: " . $game_id;
echo "result: " . $result[0]['id'];

?>