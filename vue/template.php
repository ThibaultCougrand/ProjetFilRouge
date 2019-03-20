<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>nesti</title>
        <!--Lien pour responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!--FEUILLE CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
        <!--POLICE D'ECRITURE GOOGLEFONT-->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">      
    </head>
    <body>
        <!--IMAGE HEADER-->
        <header style="background-image: url(<?= $image;?>)"></header>
        <!--NAVBAR-->
        <?php include "vue/navbar.php"?>
        <!--Contenu de la page appelé depuis le controler de contenu-->
        <section>
        <?php include "controler/controler-content.php" ?>
        </section>
        <!--FOOTER-->
        <?php include "vue/footer.php" ?>
        <!--JQUERY-->
        <script src="js/jquery.js"></script>
        <!--JQUERY COOKIE-->
        <script src="js/jquery-cookie.js"></script>
        <!--MAIN JS-->
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>