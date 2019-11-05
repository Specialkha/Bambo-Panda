<?php
include_once '../lib/data.inc.php';

$catalogue = true;

$datas = array();


if (isset($_GET["collection"])) :
    $choix = $_GET["collection"];
    switch ($choix):
        case "enfants":
            $datas = COL_ENFANT;
            $title = 'Collection Enfant';
            break;
        case "femmes":
            $datas = COL_FEMME;
            $title = 'Collection Femme';
            break;
        case "hommes":
            $datas = COL_HOMME;
            $title = 'Collection Homme';
            break;
    endswitch;
    include_once '../view/header.view.php';
    include_once '../view/catalogue.view.php';
    include_once '../view/footer.view.php';

endif;
