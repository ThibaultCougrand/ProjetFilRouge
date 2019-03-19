$(".un-filtre").click(function () {
    reset = $("#les-recettes");
    reset.html("");
    $.post(
        'ajax.php', {
            id: $(this).data("id"),
            uc: 'recipe'
        },
        function (data) {
            results = (JSON.parse(data));
            if (Array.isArray(results)) {
                results.forEach(element => {
                    figure = document.createElement('figure');
                    lien = document.createElement('a');
                    lien.href = "index.php?loc=one-recipe&id=" + element.id;
                    img = document.createElement('div');
                    figcaption = document.createElement('figcaption');
                    img.className = "image-recette";
                    img.style = "background-image: url(" + element.img + ")";
                    figcaption.textContent = element.name;
                    lien.append(img);
                    figure.append(lien);
                    figure.append(figcaption);
                    $("#les-recettes").append(figure);
                });
            } else {
                console.log('pas tableau');
            }
        }
    );
});

$(".ajout-panier").click(function () {
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    var tableauId = new Array();
    monCookie = Cookies.get('panier');
    if (monCookie !== undefined) {
        tableauId = JSON.parse(monCookie);
    }
    console.log(tableauId["nom" + id]);
    if (tableauId["nom" + id] == undefined) {
        tableauId["nom" + id] = 1;
        console.log('nouveau recette');
    } else {
        tableauId["nom" + id] += 1;
    }
    str = JSON.stringify(tableauId);
    console.log(tableauId);
    Cookies.set('panier', str); // Création */
    });

/********************ICI REQUÊTE ROMAIN *******************************/
$('un-filtre').click(function () {
    reset = $('.container-ing');
    reset.html(""); //me permet de reset la class qui contient les images, names etc
    $.post(
        'ajax.php', { //permet de pointe vers la page ajax.php
            id: $(this).data("id"),
            uc: 'produit'
        },
        function (data) {
            results = (JSON.parse(data));
            if (Array.isArray(results)) {
                results.forEach(element => {
                    figure = document.createElement('figure');
                    lien = document.createElement('a');
                    lien.href = "index.php?loc=produits&id=" + element.id;
                    img = document.createElement('div');
                    figcaption = document.createElement('figcaption');
                    img.className = "image-recette";
                    img.style = "background-image: url(" + element.img + ")";
                    figcaption.textContent = element.name;
                    lien.append(img);
                    figure.append(lien);
                    figure.append(figcaption);
                    $('container-ing').append(figure);

                });
            } else {
                console.log('requête ajax romain null');
            }
        })
        $(".image-recette").click(function () {

        })
});
