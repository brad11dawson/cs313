<?php
session_start();

$_SESSION["cart"];
$cartlist = $_SESSION["cart"];

$item = $_REQUEST["item"]

array_push($cartlist, $item);

$_SESSION["cart"] = $cartlist;

$_SESSION["cart"]["numitem"] = $item;

?>