<?php
$css = "./public/css/menu.css";
if (isset($catalogue)) :
    $css = "../public/css/menu.css";
endif;
$logo = "./public/images/logo_site/Logo Panda.jpg";
if (isset($catalogue)) :
    $logo = "../public/images/logo_site/Logo Panda.jpg";
endif;
$retour = "./index.php";
if (isset($catalogue)) :
    $retour = "../index.php";
endif;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo $css; ?>">
    <?php if (isset($index)) : ?>
        <link rel="stylesheet" href="./public/css/menu.css">
    <?php endif; ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper backparallax">
    <header>
        <div id="logo"><a href="<?php echo $retour; ?>"><img src="<?php echo $logo; ?>" alt="Logo Panda Site"></a>
        </div>
        <div id="marque"><a id=retour href="<?php echo $retour; ?>">BambouPanda</a></div>
    </header>
    <nav>
        <ul>
            <?php if($index) :?>
            <li><a class=menus href="./pages/catalogue.php?collection=femmes">Femmes</a></li>
            <li><a class=menus href="./pages/catalogue.php?collection=hommes">Hommes</a></li>
            <li><a class=menus href="./pages/catalogue.php?collection=enfants">Enfants</a></li>
            <li><a class=menus href="./pages/panier.php">Panier</a></li>
            <li><a class=menus href="./pages/cgv.php" target="blank_">CGV</a></li>
            <?php else :?>
            <li><a class=menus href="../pages/catalogue.php?collection=femmes">Femmes</a></li>
            <li><a class=menus href="../pages/catalogue.php?collection=hommes">Hommes</a></li>
            <li><a class=menus href="../pages/catalogue.php?collection=enfants">Enfants</a></li>
            <li><a class=menus href="../pages/panier.php">Panier</a></li>
            <li><a class=menus href="../pages/cgv.php" target="blank_">CGV</a></li>
            <?php endif;?>
        </ul>
    </nav>