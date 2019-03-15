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
                    img = document.createElement('div');
                    figcaption = document.createElement('figcaption');
                    img.className ="image-recette";
                    img.style = "background-image: url("+element.img+")";
                    figcaption.textContent = element.name;
                    figure.append(img);
                    figure.append(figcaption);
                    $("#les-recettes").append(figure);
                });
            } else {
                console.log('pas tableau');
            }

        }
    )
})