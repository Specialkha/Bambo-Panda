<?php
session_start();
$_SESSION = array();
session_destroy();
$index = false;
$catalogue = true;



include_once '../view/header.view.php';
include_once '../view/order.view.php';
include_once '../view/footer.view.php';
?>