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
                var results = JSON.parse(data);
                if (results.verif === true) {
                    $("#buttonIns").hide();
                    $("#labelEmailIns").hide();
                    $("#emailIns").hide();
                    $("#labelPasswordIns").hide();
                    $("#passwordIns").hide();
                    afficheSuiteForm();
                } else {
                    var erreur = document.createElement('p');
                    erreur.style = "color:red;";
                    erreur.textContent = "Email invalide !";
                    $('#inscription').append(erreur);
                }
            });
}

function afficheSuiteForm() {
    //br et hr et div
    var separate = document.createElement('hr');
    var lineBreack1 = document.createElement('br');
    var lineBreack2 = document.createElement('br');
    var lineBreack3 = document.createElement('br');
    var lineBreack4 = document.createElement('br');
    var div = document.createElement('div');
    div.className = "divRadio";
    //création de mes éléments
    var labelVerifEmail = document.createElement('label');
    labelVerifEmail.textContent = "vérifiez votre email";
    var verifEmail = document.createElement('input');
    verifEmail.type = 'text';
    verifEmail.name = 'verifEmailIns';
    var labelVerifPassword = document.createElement('label');
    labelVerifPassword.textContent = "vérifiez votre mot de passe";
    var verifPassword = document.createElement('input');
    verifPassword.type = 'text';
    verifPassword.name = 'verifPAsswordIns';
    var labelName = document.createElement('label');
    labelName.textContent = "nom";
    var name = document.createElement('input');
    name.type = "text";
    name.name = "nameIns";
    var labelFirstNAme = document.createElement('label');
    labelFirstNAme.textContent = "prénom";
    var firstName = document.createElement('input');
    firstName.type = "text";
    firstName.name = "firstNameIns";
    var labelAge = document.createElement('label');
    labelAge.textContent = "age";
    var age = document.createElement('input');
    age.type = "number";
    age.name = "ageIns";
    var labelSex = document.createElement('label');
    labelSex.textContent = "Sexe";
    var sexF = document.createElement('input');
    sexF.type = "radio";
    sexF.name = "sexIns";
    sexF.value = "female";
    var labelSexF = document.createElement('label');
    labelSexF.textContent = "femme";
    var sexM = document.createElement('input');
    sexM.type = "radio";
    sexM.name = "sexIns";
    sexM.value = "male";
    var labelSexM = document.createElement('label');
    labelSexM.textContent = "homme";
    var sexO = document.createElement('input');
    sexO.type = "radio";
    sexO.name = "sexIns";
    sexO.value = "other";
    var labelSexO = document.createElement('label');
    labelSexO.textContent = "autre";
    var button = document.createElement('input');
    button.type = "submit";
    button.value = "S'inscrire";
    button.form = "inscription";
    //push de mes éléments dans le html
    $('#inscription').append(labelVerifEmail);
    $('#inscription').append(verifEmail);
    $('#inscription').append(labelVerifPassword);
    $('#inscription').append(verifPassword);
    $('#inscription').append(separate);
    $('#inscription').append(labelName);
    $('#inscription').append(name);
    $('#inscription').append(labelFirstNAme);
    $('#inscription').append(firstName);
    $('#inscription').append(labelAge);
    $('#inscription').append(age);
    $('#inscription').append(div);
    $('.divRadio').append(labelSex);
    $('.divRadio').append(lineBreack1);
    $('.divRadio').append(sexF);
    $('.divRadio').append(labelSexF);
    $('.divRadio').append(lineBreack2);
    $('.divRadio').append(sexM);
    $('.divRadio').append(labelSexM);
    $('.divRadio').append(lineBreack3);
    $('.divRadio').append(sexO);
    $('.divRadio').append(labelSexO);
    $('#inscription').append(button);
}

$(".ajout-panier").click(function () {
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    var tableauId = new Array();
    monCookie = Cookies.get('panier');
    if (monCookie !== undefined) {
        tableauId = JSON.parse(monCookie);
    }
    console.log(tableauId["nom" + id]);
    if (tableauId["nom" + id] === undefined) {
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




