<?php
$file = "vue/".$loc.".php";
if (file_exists($file)) {
    include $file;
} else {
    echo 'erreur dans controler-content';
    die;
}





 