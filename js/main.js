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
$(".image-recette").click(function () {

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