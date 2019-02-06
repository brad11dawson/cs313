<?php
session_start();

$itemnumber = $_REQUEST["item"];

unset($_SESSION["cart"][$itemnumber]);
$_SESSION["cart"] = array_values($_SESSION["cart"]);
var_dump($_SESSION["cart"]);

?>