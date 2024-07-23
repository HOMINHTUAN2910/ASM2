<?php
include 'view/layout/header.php';
if (!isset($_GET['page'])) {
    //
    include 'view/layout/home.php';
} else {

    switch ($_GET['page']) {
    case 'product':
    //
    break;

    default:
    //
    include 'view/layout/home.php';
    break;
    }
}

include 'view/layout/footer.php';
?>
