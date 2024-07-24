<?php
ob_start();
session_start();
include_once "model/connect.php";

pdo_get_connection();

include_once 'view/header.php';
if (!isset($_GET['page'])) {

  include "view/home.php";
} else {
  switch ($_GET['page']) {
    case 'home':
      include "view/home.php";
      break;
    case 'tamly':

      break;
    case 'detail':

      break;
      // case 'cotrang':
      //   $categoryName = "Tâm lý";
      //   $movies = get_film_buytheloai($categoryName);
      //   include "view/cotrang.php";
      //   break;
    case 'tinhcam':

      break;
      // case 'bian':
      //   $categoryName = "Tâm lý";
      //   $movies = get_film_buytheloai($categoryName);
      //   include "view/bian.php";
      //   break;
    case 'kinhdi':

      break;
    case 'hanhdong':

      break;
    case 'vothuat':
      include "view/vothuat.php";
    default:
      include "view/404.php";
      break;
  }
}

include_once 'view/footer.php';
ob_end_flush();
