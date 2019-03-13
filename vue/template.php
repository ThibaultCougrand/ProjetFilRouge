<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>nesti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text.css" href="css/style.css" media="all">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">      
    </head>
    <body>
        <header style="background-image: url(<?php $image ?>)"></header>
        <?php include "vue/navbar.php"?>
        <section>
        <?php include "controler/controler-content.php" ?>
        </section>
        <?php include "vue/footer.php" ?>
        <script src="../js/main.js" type="text/javascript"></script>
    </body>
</html>
