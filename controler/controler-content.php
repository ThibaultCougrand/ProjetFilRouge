<?php

//switch ($loc) {
//    case 'recipes':
//        $fileName, $image = 'recipes';
//        break;
//    case 'one-recipe':
//        include "vue/one-recipe.php";
//        $image = 'recipes';
//        break;
//    case 'ingredients':
//        include "vue/ingredients.php";
//        break;
//    case 'sign-in':
//        include "vue/sign-in.php";
//        break;
//    case 'sign-up':
//        include "vue/sign-up.php";
//        break;
//    case 'account':
//        include "vue/account.php";
//        break;
//    case 'cart':
//        include 'vue/cart.php';
//        break;
//    case 'resume-cart':
//        include 'vue/resume-cart';
//        break
//    default:
//        include 'vue/home.php';
//        break;
//}
$file = "vue/".$loc.".php";
if (file_exists($file)) {
    include $file;
} else {
    echo 'erreur dans controler-content';
    die;
}
$image = "asset/".$loc.".jpg";
if (!file_exists($image)) {
    $image = "asset/default.jpg";
}




 