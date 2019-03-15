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
                    lien.href = "index.php?loc=one-recipe";
                    img = document.createElement('div');
                    figcaption = document.createElement('figcaption');
                    img.className ="image-recette";
                    img.style = "background-image: url("+element.img+")";
                    img.setAttribute('data-id',element.id);
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
$(".image-recette").click(function(){

})