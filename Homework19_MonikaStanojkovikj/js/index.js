
        var banner = document.querySelector(".banner");
        var heroes = document.querySelector(".heroes-cards");


        url = "https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json";

        fetch(url).then(response => {
            return response.json();
        }).then(function (data) {
           printHeroDataToPage(data);
        }).catch(function (error) {
            console.log(error);
    });

        function printHeroDataToPage(data){
            banner.innerHTML = createBanner(data);
            heroes.innerHTML = createCard(data);
        };
