
function createBanner(data){
    var title = data.squadName;
    var town = data.homeTown;
    var base = data.secretBase;
    var formed = data.formed;

    var jumbotron = `
    <div class="jumbotron">
    <h1 class="h2">${title}</h1>
    <p class="lead">${town}</p>
    <hr class="my-4">
    <p class="text-center h5">${base}</p>
    <p class="text-center h5">${formed}</p>
    </div>
    `;
    return jumbotron;
};


function createCard(data){
    var card ="";

    var members = data.members;

        members.forEach(member => {
            var name = member.name;
            var age = member.age;
            var identity = member.secretIdentity;
            var powers = member.powers;

            var powersNumber = 0;
            var heroStrength = 0;
            var progressColor ="";
            var powerList = "";
            var heroImage = "";
            var heroReadMore = "";

            var heroData = [
        {   name: "Molecule Man", 
            imgUrl: "https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Molecule_Man.jpg/250px-Molecule_Man.jpg", 
            readMoreUrl: "https://en.wikipedia.org/wiki/Molecule_Man" 
        },

        {   name: "Madame Uppercut", 
            imgUrl: "https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Madame-Web.png/250px-Madame-Web.png", 
            readMoreUrl: "https://en.wikipedia.org/wiki/Madame_Web" 
        },
        {   name: "Eternal Flame", 
            imgUrl: "https://vignette.wikia.nocookie.net/marvel-cinematic-universe/images/7/7b/Eternal_Flame.png", 
            readMoreUrl: "https://marvelcinematicdatabase.fandom.com/wiki/Eternal_Flame" 
        }
        ];

            for(var i=0; i < powers.length ;i++)
            {
                powersNumber++;
                var power = `<li class="list-group-item">${powers[i]}</li>`;
                powerList += power;
            }

                if(powersNumber < 2){
                    heroStrength = 60;
                    progressColor = 'success';
                }
                else if(powersNumber >= 2 && powersNumber <=4){
                    heroStrength = 80;
                    progressColor = 'warning';
                }
                else if(powersNumber > 4){
                    heroStrength = 100;
                    progressColor = 'danger';
                }

            for(var i=0; i < heroData.length; i++){
                if(heroData[i].name === name){
                    heroImage = heroData[i].imgUrl;
                    heroReadMore = heroData[i].readMoreUrl;
                }
            }

            card += `
            <div class="col-md">
            <div class="card">
            <img src="${heroImage}" class="card-img-top" alt="${name}">
            <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <p class="card-text">Strength:</p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-${progressColor}" role="progressbar" style="width:${heroStrength}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="card-text mt-2">Age: ${age}</p>
            <p class="card-text">Secret Identity: ${identity}</p> 
            <h5 class="card-title">Powers:</h5>
            <ul class="list-group">${powerList}</ul>
            <a href="${heroReadMore}" class="btn btn-primary mt-4">Read More...</a>
            </div>
            </div>
            </div>
            `;

        });

        return card;

        };
