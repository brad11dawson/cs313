<?php
$game_name = htmlspecialchars($_POST['game_name']);
$game_description = htmlspecialchars($_POST['game_description']);
$consoles = ($_POST['consoles']);

require('connectdatabase.php');

$stmt = $db->prepare('INSERT INTO game(game_name, description) VALUES(:game_name, :game_description);');
$stmt->bindValue(':game_name', $game_name, PDO::PARAM_STR);
$stmt->bindValue(':game_description', $game_description, PDO::PARAM_INT);
$stmt->execute();
$newGameId = $db->lastInsertId('game_id_seq');

//need to loop through selected consoles, adding the game to each console selected
foreach($consoles as $console_id) {
    $stmt = $db->prepare('INSERT INTO game_console(game_id, console_id) VALUES($newGameId, $console_id');
    $stmt->execute();
}

$new_page = "home.php";

header("Location: $new_page");
die();
?>