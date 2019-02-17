<?php
$game_name = $_POST['game_name'];
$user_id = $_POST['user_id'];
$score = htmlspecialchars($_POST['score']);
$review_content = htmlspecialchars($_POST['review_content']);

require('connectdatabase.php');

$statement = $db->query("SELECT id FROM game WHERE game_name = '$game_name'");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$game_id = $result[0]["id"];

$stmt = $db->prepare('INSERT INTO review(game_id, user_id, score, description) VALUES (:game_id, :user_id, :score, :review_content);');
$stmt->bindValue(':review_content', $review_content, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
$stmt->execute();

$new_page = "gamereviews.php?gamename=$game_name";

header("Location: $new_page");
die();
?>