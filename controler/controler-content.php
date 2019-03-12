<?php

switch ($loc) {
    case 'recipes':
        include "vue/recipes.php";
        break;
    case 'one-recipe':
        include "vue/one-recipe.php";
        break;
    case 'ingredients':
        include "vue/ingredients.php";
        break;
    case 'sign-in':
        include "vue/sign-in.php";
        break;
    case 'sign-up':
        include "vue/sign-up.php";
        break;
    case 'account':
        include "vue/account.php";
        break;
    case 'cart':
        include 'vue/cart.php';
        break;
    case 'resume-cart':
        include 'vue/resume-cart';
        break;
    default:
        include 'vue/home.php';
        break;
}
 