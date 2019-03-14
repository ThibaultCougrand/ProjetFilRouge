$(".un-filtre").click(function () {
    console.log("salut");
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
                    img = document.createElement('img');
                    figcaption = document.createElement('figcaption');
                    img.src = element.img;
                    figcaption.textContent = element.name;
                    figure.append(img);
                    figure.append(figcaption);
                    $(".les-recettes").append(figure);
                });
            }else{
                console.log('pas tableau');
            }

        }
    )
})