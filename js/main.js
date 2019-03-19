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
                        console.log(element);
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


/*** SIGN IN AND UP PAGE ***/

function afficheFormulaire() {
    console.log(document.querySelector("#emailIns").value);
    $.post(
            'ajax.php', {
                email: document.querySelector("#emailIns").value,
                uc: 'signup'
            },
            function (data) {
                console.log(data);
                results = JSON.parse(data);
                if (results.verif === true) {
                    $("#buttonIns").hide();
                } else {
                    erreur = document.createElement('p');
                    erreur.style = "color:red;";
                    erreur.textContent = "Email invalide !";
                    $('#inscription').append(erreur);
                }
            });
}

$(".ajout-panier").click(function () {
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    var tableauId = new Array();
    monCookie = Cookies.get('panier');
    if (monCookie != undefined) {
        tableauId = JSON.parse(monCookie);
    }
    console.log(tableauId["nom" + id]);
    if (tableauId["nom" + id] === undefined) {
        tableauId["nom" + id] = 1;
        console.log('nouveau recette'+tableauId["nom" + id]);
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
            'ajax.php', {//permet de pointe vers la page ajax.php
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
            });

});

<<<<<<< HEAD
        });
});
=======
$(".ajout-panier").click(function () {
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    var tableauId = new Array();
    monCookie = Cookies.get('panier');
    if (monCookie !== undefined) {
        tableauId = JSON.parse(monCookie);
        console.log("not undefined" + tableauId);
    }
    console.log(tableauId["recette" + id]);
    if (tableauId["recette" + id] === undefined) {
        tableauId["recette" + id] = 1;
        console.log('nouveau recette');
    } else {
        tableauId["recette" + id] += 1;
    }
    str = JSON.stringify(tableauId);
    console.log("str: " + str);
    Cookies.set('panier', tableauId); // Création */
    console.log(Cookies.set('panier', tableauId));
});




>>>>>>> 9ea7e9af862054e0092214f6b9700e7afcfbd476
