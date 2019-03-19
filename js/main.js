$(".category-recipe").click(function () {
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
    )
})


/********************ICI REQUÊTE ROMAIN *******************************/
//ajax envoie sur php et php retourne
$('.category-ing').click(function () {
    reset = $('#les-articles');
    reset.html(""); //me permet de reset la class qui contient les images, names etc
    $.post(
        'ajax.php', { //permet de pointe vers la page ajax.php
            id: $(this).data("id"), //envoie la valeur de $id dans ajax.php
            uc: 'produit' //permet de switch dans le ajax.php 
        },
        function (data) {
            //retour de data dans ajax.php
            results = (JSON.parse(data)); //JE PARSE MON TABLEAU EN JSON
            if (Array.isArray(results)) {
                results.forEach(element => {
                    console.log(data);
                    figure = document.createElement('figure');
                    lien = document.createElement('a');
                    lien.href = "index.php?loc=produits&id=" + element.id;
                    img = document.createElement('img');
                    figcaption = document.createElement('figcaption');
                    div = document.createElement('div');
                    div.className = "wrap-button";
                    para = document.createElement('p');
                    para.textContent = element.prix + '€' + ' pour '+ element.qtx + ' ' + element.unit;
                    button = document.createElement('button');
                    i = document.createElement('i');
                    i.className = "fas fa-cart-plus";
                    img.src=element.img;
                    figcaption.textContent = element.name;

                    button.append(i);
                    div.append(para); 
                    div.append(button);
                    lien.append(img);
                    figure.append(lien);
                    figure.append(figcaption);
                    figure.append(div);
                    $('#les-articles').append(figure);

                });
            } else {
                console.log('requête ajax romain null');
            }
        })
        
})