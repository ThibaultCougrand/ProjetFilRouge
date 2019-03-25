/**********************************/
/*REQUETTE AJAX POUR PAGE RECETTES*/
/**********************************/

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
                    console.log('erreur ajax');
                }
            }
    );
});

/*********************************************/
/*PASSER LES INGREDIENTS DE RECETTE AU PANIER*/
/*********************************************/
$(".ajout-panier").click(function () {
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    var tableauId = {};
    monCookie = Cookies.get('panier');
    if (monCookie !== undefined) {
        tableauId = JSON.parse(monCookie);
    }
    if (tableauId['recette'] === undefined) {
        tableauId["recette"] = {};
    }
    if (tableauId["recette"][id] === undefined) {
        tableauId["recette"][id] = 1;
    } else {
        tableauId["recette"][id] += 1;
    }
    console.log(tableauId);
    str = JSON.stringify(tableauId);
    Cookies.set('panier', str); // Création */
});

/*********************************************/
/*PASSER LES INGREDIENTS DE PRODUITS AU PANIER*/
/*********************************************/
$(".add-ing").on("click", function () {
    let id = $(this).data("id");
    addPanier(id);
});

function addPanier(id) {
    var tab = {};

    roroCookie = Cookies.get('panier');
    if (roroCookie !== undefined) {
        tab = JSON.parse(roroCookie);
    }
    if (tab['produits'] === undefined) {
        tab['produits'] = {};
    }
    if (tab['produits'][id] !== undefined) {
        tab['produits'][id] += 1;
    } else {
        tab['produits'][id] = 1;
    }
    console.log(tab);
    str = JSON.stringify(tab);
    Cookies.set('panier', str);

}
$(".suppression-recette").click(function () {
    let monCookie = Cookies.getJSON('panier');
    let id = $(this).data('id');
    if (monCookie["recette"][id] >= 1) {
        monCookie["recette"][id] -= 1;
        Cookies.set('panier', JSON.stringify(monCookie));
        location.reload();
    }
    if (monCookie["recette"][id] === 0) {
        delete monCookie["recette"][id];
        Cookies.set('panier', JSON.stringify(monCookie));
        location.reload();
    }
    console.log(monCookie);
})
cookie = Cookies.getJSON('panier');
if (cookie["recette"][0] === 0) {
    console.log("cookie 0");
} else {
    console.log("cookie ok");
}

/*************************************/
/*REQUETTE AJAX POUR PAGE INSCRIPTION*/
/*************************************/

function afficheFormulaire() {
    $.post(
            'ajax.php', {
                email: $("#emailIns").val(),
                uc: 'signup'
            },
            function (data) {
                console.log(data);
                var results = JSON.parse(data);
                var email = $('#emailIns').val().toString();
                console.log(!email.substring(email.indexOf("@"), email.length).includes("."));
                if (email === "") {
                    document.querySelector('#err-email').textContent = "Veuillez saisir un email";
                } else if (!email.includes("@") || !email.substring(email.indexOf("@"), email.length).includes(".")) {
                    document.querySelector('#err-email').textContent = "email invalide !";
                } else if (results.verif === true) {
                    document.querySelector('#err-email').textContent = "";
                    if ($('#passwordIns').val() !== "") {
                        document.querySelector('#err-password').textContent = "";
                        $("#buttonIns").hide();
                        $("#labelEmailIns").hide();
                        $("#emailIns").hide();
                        $("#err-email").hide();
                        $("#labelPasswordIns").hide();
                        $("#passwordIns").hide();
                        $("#err-password").hide();
                        afficheSuiteForm();
                    } else {
                        document.querySelector('#err-password').textContent = "Veuillez saisir un mot de passe";
                    }
                } else {
                    document.querySelector('#err-email').textContent = "Email invalide !";
                }
            });
}

/*Requette ajax pour valider l'inscription*/
function valideForm() {
    $.post(
            'ajax.php', {
                email: $('#emailIns').val(),
                password: $('#passwordIns').val(),
                verifEmail: $('#verifEmailIns').val(),
                verifPassword: $('#verifPasswordIns').val(),
                name: $('#nameIns').val(),
                firstName: $('#firstNameIns').val(),
                age: $('#ageIns').val(),
                sex: recupRadio(),
                uc: 'signup2'
            },
            function (data) {
                console.log(data);
                var results = JSON.parse(data);
                console.log(results.email);
                if (results.email !== "") {
                    document.querySelector('#err-verif-email').textContent = results.email;
                } else {
                    document.querySelector('#err-verif-email').textContent = "";
                }
                if (results.password !== "") {
                    document.querySelector('#err-verif-password').textContent = results.password;
                } else {
                    document.querySelector('#err-verif-password').textContent = "";
                }
                if (results.name !== "") {
                    document.querySelector('#err-name').textContent = results.name;
                } else {
                    document.querySelector('#err-name').textContent = "";
                }
                if (results.firstName !== "") {
                    document.querySelector('#err-firstname').textContent = results.firstName;
                } else {
                    document.querySelector('#err-firstname').textContent = "";
                }
                if (results.age !== "") {
                    document.querySelector('#err-age').textContent = results.age;
                } else {
                    document.querySelector('#err-age').textContent = "";
                }
                if (results.sex !== "") {
                    document.querySelector('#err-sex').textContent = results.sex;
                } else {
                    document.querySelector('#err-sex').textContent = "";
                }

            });
}
;

function recupRadio() {
    value = '';
    for (i = 0; i < document.inscription.sexIns.length; i++) {
        if (document.inscription.sexIns[i].checked) {
            value = document.inscription.sexIns[i].value;
        }
    }
    return value;
}

/*Fonction qui génère le formulaire d'inscription dans la page html*/
function afficheSuiteForm() {

    /*br,hr et div radio*/
    var separate = document.createElement('hr');
    separate.className = "dividerIns";
    var lineBreack1 = document.createElement('br');
    var lineBreack2 = document.createElement('br');
    var lineBreack3 = document.createElement('br');
    var divRadio = document.createElement('div');
    divRadio.className = "divRadio";

    /*création de mes éléments*/
    // verif email.
    var labelVerifEmail = document.createElement('label');
    labelVerifEmail.textContent = "vérifiez votre email";
    var verifEmail = document.createElement('input');
    verifEmail.type = 'text';
    verifEmail.name = 'verifEmailIns';
    verifEmail.id = 'verifEmailIns';
    var errVerifEmail = document.createElement('p');
    errVerifEmail.id = "err-verif-email";
    errVerifEmail.className = "mesErr";
    // verif password
    var labelVerifPassword = document.createElement('label');
    labelVerifPassword.textContent = "vérifiez votre mot de passe";
    var verifPassword = document.createElement('input');
    verifPassword.type = 'password';
    verifPassword.name = 'verifPasswordIns';
    verifPassword.id = 'verifPasswordIns';
    var errVerifPassword = document.createElement('p');
    errVerifPassword.id = "err-verif-password";
    errVerifPassword.className = "mesErr";
    // nom
    var labelName = document.createElement('label');
    labelName.textContent = "nom";
    var name = document.createElement('input');
    name.type = "text";
    name.name = "nameIns";
    name.id = 'nameIns';
    var errName = document.createElement('p');
    errName.id = "err-name";
    errName.className = "mesErr";
    // prenom
    var labelFirstNAme = document.createElement('label');
    labelFirstNAme.textContent = "prénom";
    var firstName = document.createElement('input');
    firstName.type = "text";
    firstName.name = "firstNameIns";
    firstName.id = 'firstNameIns';
    var errFirstName = document.createElement('p');
    errFirstName.id = "err-firstname";
    errFirstName.className = "mesErr";
    // age
    var labelAge = document.createElement('label');
    labelAge.textContent = "age";
    var age = document.createElement('input');
    age.type = "number";
    age.min = "1";
    age.max = "99";
    age.name = "ageIns";
    age.id = 'ageIns';
    var errAge = document.createElement('p');
    errAge.id = "err-age";
    errAge.className = "mesErr";
    // sex
    var labelSex = document.createElement('label');
    labelSex.textContent = "Sexe";
    var sexF = document.createElement('input');
    sexF.type = "radio";
    sexF.name = "sexIns";
    sexF.value = "female";
    var labelSexF = document.createElement('label');
    labelSexF.textContent = " femme";
    var sexM = document.createElement('input');
    sexM.type = "radio";
    sexM.name = "sexIns";
    sexM.value = "male";
    var labelSexM = document.createElement('label');
    labelSexM.textContent = " homme";
    var sexO = document.createElement('input');
    sexO.type = "radio";
    sexO.name = "sexIns";
    sexO.value = "other";
    var labelSexO = document.createElement('label');
    labelSexO.textContent = " autre";
    var errSex = document.createElement('p');
    errSex.id = "err-sex";
    errSex.className = "mesErr";
    // bouton
    var button = document.createElement('input');
    button.type = "button";
    button.id = "submitIns";
    button.addEventListener("click", valideForm, false);
    //button.addEventListener('click', valideForm());
    button.value = "S'inscrire";
    button.form = "inscription";

    /*push de mes éléments dans le html.*/
    $('#inscription').append(labelVerifEmail);
    $('#inscription').append(verifEmail);
    $('#inscription').append(errVerifEmail);
    $('#inscription').append(labelVerifPassword);
    $('#inscription').append(verifPassword);
    $('#inscription').append(errVerifPassword);
    $('#inscription').append(separate);
    $('#inscription').append(labelName);
    $('#inscription').append(name);
    $('#inscription').append(errName);
    $('#inscription').append(labelFirstNAme);
    $('#inscription').append(firstName);
    $('#inscription').append(errFirstName);
    $('#inscription').append(labelAge);
    $('#inscription').append(age);
    $('#inscription').append(errAge);
    $('#inscription').append(divRadio);
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
    $('#inscription').append(errSex);
    $('#inscription').append(button);
}

/*************************************/
/*REQUETTE AJAX POUR PAGE INGREDIENTS*/
/*************************************/

//ajax envoie sur php et php retourne
$('.category-ing').click(function () {
    reset = $('#les-articles');
    reset.html(""); //me permet de reset la class qui contient les images, names etc
    $.post(
            'ajax.php', {//permet de pointe vers la page ajax.php
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
                        para.textContent = element.prix + '€' + ' pour ' + element.qtx + ' ' + element.unit;
                        button = document.createElement('button');
                        //button.className = "add-ing";
                        //button.setAttribute("data-id", element.id);
                        button.onclick = function () {
                            addPanier(element.id);
                        }
                        i = document.createElement('i');
                        i.className = "fas fa-cart-plus";
                        img.src = element.img;
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
            });
    $(".image-recette").click(function () {

    });
});
