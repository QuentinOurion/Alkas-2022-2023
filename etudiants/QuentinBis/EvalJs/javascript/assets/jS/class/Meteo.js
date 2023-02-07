export default class Meteo {


    lienAjax = 'https://api.openweathermap.org/data/2.5/weather?lat=43.610769&lon=3.876716&units=metric&appid=18d1029fc075b37dde7722985d26104d'


    constructor(el) {
        this.el = el
    }


    init() {
        this.ville = document.getElementById('ville')
        this.temperature = document.getElementById('temperature')
        this.temperatureMin = document.getElementById('temperatureMin')
        this.temperatureMax = document.getElementById('temperatureMax')
        this.temperatureResent = document.getElementById('temperatureResent')
        this.iconMeteo = document.getElementById('iconMeteo')
    }


    ajax() {
        fetch(this.lienAjax).then((reponse) => {
            if (reponse.ok) {
                reponse.json().then((json) => {
                    this.show(json)
                })
            }
        })
    }


    show(json)
    {
// Affichage données météo
        this.ville.innerHTML = json.name
        this.temperature.innerHTML = `${json.main.temp}°C`
        this.temperatureResent.innerHTML = `Resentie : ${json.main.feels_like}°C`
        this.temperatureMin.innerHTML = `Temp min : ${json.main.temp_min}°C`
        this.temperatureMax.innerHTML = `Temp max : ${json.main.temp_max}°C`

        // icon meteo
        let iconWeather = json.weather[0].icon
        iconMeteo.innerHTML = `<img src='http://openweathermap.org/img/wn/${iconWeather}@2x.png' >`
    }




/*Deuxième methode :
    meteo(json)
    {
        let iconWeather = json.weather[0].icon
this.el.innerHTML = `
            <section class="meteo" >
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="card bg-dark text-white" style="border-radius: 40px;">
                                <div class="bg-image" style="border-radius: 35px;">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/draw1.webp"
                                         class="card-img" alt="weather" />
                                    <div class="mask" style="background-color: rgba(190, 216, 232, .5);"></div>
                                </div>
                                <div class="card-img-overlay text-dark p-5">
                                    <div style="display:flex ;justify-content: flex-end" id="iconMeteo"><img src='http://openweathermap.org/img/wn/${iconWeather}@2x.png'</div>
                                    <h4 class="mb-0" id="ville">${json.name}</h4>
                                    <p class="display-2 my-3" id="temperature">${json.main.temp}°C</p>
                                    <p class="mb-2" id="temperatureResent">${json.main.feels_like}°C<strong></strong></p>
                                    <p class="mb-2" id="temperatureMin">${json.main.temp_min}°C<strong></strong></p>
                                    <p class="mb-2" id="temperatureMax">${json.main.temp_max}°C<strong></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>`
    }*/




}