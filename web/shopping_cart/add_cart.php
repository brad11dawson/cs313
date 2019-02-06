<?php
session_start();

$item = $_REQUEST["item"];
if($_SESSION["cart"]) {
    $stack = $_SESSION["cart"];
}
else {
    $stack = array();
}
array_push($stack, $item);
$_SESSION["cart"] = $stack;
?>