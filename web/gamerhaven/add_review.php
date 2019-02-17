<?php
$game_name = $_POST['game_name'];
$user_id = $_POST['user_id'];
$score = $_POST['score'];
$review_content = $_POST['review_content'];

echo "<h2>" . $game_name . "</h2>";
echo "<h2>" . $user_id . "</h2>";
echo "<h2>" . $score . "</h2>";
echo "<h3>" . $review_content . "</h3>";
?>