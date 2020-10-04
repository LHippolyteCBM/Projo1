let meteoCard = document.querySelectorAll('.meteo-card.appa');
let card = {};


meteoCard.forEach((x, index) => {
    card[index] = {
        name: '',
        temp: '',
        heure: '',
        image:'',
    };
    x.childNodes.forEach(y => {
        if (y.className === 'city-name') {
            card[index].name = y.innerText;
        } else if (y.className === 'meteo-temp') {
            card[index].temp = 0;
        } else if (y.className === 'meteo-hour') {
            card[index].heure = 0;
        } else if (y.className === 'meteo-img') {
            card[index].image = '';
        }
    })
})


for (let index = 0; index < Object.keys(card).length; index++) {

    let request = new XMLHttpRequest();
    let cityCall = card[index].name;
    let apiKey = '7ae3f9b6867bf1de7cfc8884acd6a445';
    let apiCallurl = `https://api.openweathermap.org/data/2.5/weather?q=${cityCall}&appid=${apiKey}`;

    request.onreadystatechange = function () {
        
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            let response = JSON.parse(this.responseText);
            let weather = response.weather[0].icon;            
            let temperatureCelsius = Math.floor(response.main.temp - 273.15) ;
            let decalageHoraire = (response.timezone / 60) / 60,
                date = new Date();
            let hours = (date.getUTCHours() + decalageHoraire);
                minutes = date.getMinutes(),
                seconds = date.getSeconds();

            if (hours > 24) {
                hours -= 24
            }

            time = underTen(hours) + ' : ' + underTen(minutes) + ' : ' + underTen(seconds);

            card[index].temp = temperatureCelsius;
            card[index].heure = time;

            meteoCard.forEach((x, index) => {
                x.childNodes.forEach(y => {
                    if (y.className === 'meteo-temp') {            
                        y.innerHTML = `Temperature : ${( card[index].temp + 15 ) + '°'}</br>Before crisis ${card[index].temp + '°'}`;
                    } else if (y.className === 'meteo-hour') {
                        y.innerText = card[index].heure
                    } else if (y.className === 'meteo-img') {
                        y.src = `http://openweathermap.org/img/wn/${weather}.png`;
                        console.log(weather)
                    }
                })
            })
            

        }

    }
    request.open('GET', apiCallurl);
    request.send();

}






function underTen(valeur) {

    if (valeur < 10) {
        valeur = '0' + valeur;
    }
    return valeur
}