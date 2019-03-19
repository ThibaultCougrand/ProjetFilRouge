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
    )
})

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
})