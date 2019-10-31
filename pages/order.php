<?php
$title = "Confirmation de votre commande";
$index = false;
$catalogue = true;
session_start();
$_SESSION = array();


if(!empty($_POST["orderform"])) :

include_once '../view/header.view.php';
include_once '../view/order.view.php';
include_once '../view/footer.view.php';

else :

include_once '../view/header.view.php';
include_once '../view/fail.view.php';
include_once '../view/footer.view.php';

endif;
session_destroy();
