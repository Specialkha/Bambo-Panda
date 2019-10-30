<?php
session_start();
$catalogue = true;
$index = false;
$title = "Votre panier de commande";
$cart = array();
$totalprice = 0;

if (isset($_SESSION["buy"])) :
    $cart = $_SESSION["buy"];
endif;

if (!empty($_POST["quantity"])) :
    array_push($cart, [
        "designation" => $_POST["designation"], "ref" => $_POST["ref"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"]
    ]);
    $_SESSION["buy"] = $cart;
endif;

include_once '../view/header.view.php';
include_once '../view/panier.view.php';
include_once '../view/footer.view.php';
