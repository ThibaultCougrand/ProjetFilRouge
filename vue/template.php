<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>nesti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
