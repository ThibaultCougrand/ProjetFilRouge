<?php 
$loc = filter_input(INPUT_GET, 'loc');
if(!$loc){
    $loc = 'home';
}

$image = "asset/".$loc.".jpg";
if (!file_exists($image)) {
    $image = "asset/home.jpg";
}
include "vue/template.php";