





let test = document.querySelector('div')

        fetch('https://randomuser.me/api' +
            '').then((reponse) => {
            if (reponse.ok) {
                reponse.json().then((json) => {
                    console.log(json["results"]["0"]["name"]["first"])
                    // test.innerHTML = json

                })
            }
        })







































//
// fetch('https://api.openweathermap.org/data/2.5/weather?lat=43.610769&lon=3.876716&units=metric&appid=18d1029fc075b37dde7722985d26104d').then((reponse) => {
//     if (reponse.ok) {
//
//
//         reponse.json().then((json) => {
//                 // let heure = json.dt
//                 console.log(json)
//                 let ville = document.getElementById('ville')
//                 let temperature = document.getElementById('temperature')
//                 let temperatureMin = document.getElementById('temperatureMin')
//                 let temperatureMax = document.getElementById('temperatureMax')
//                 let temperatureResent = document.getElementById('temperatureResent')
//                 let iconMeteo = document.getElementById('iconMeteo')
//                 let iconWeather
// // Affichage données météo
//                 ville.innerHTML = json.name
//                 temperature.innerHTML = `${json.main.temp}°C`
//                 temperatureResent.innerHTML = `Resentie : ${json.main.feels_like}°C`
//                 temperatureMin.innerHTML = `Temp min : ${json.main.temp_min}°C`
//                 temperatureMax.innerHTML = `Temp max : ${json.main.temp_max}°C`
// // icon meteo
//
//                 iconWeather = json.weather[0].icon
//                 console.log(iconWeather)
//
//
//                 iconMeteo.innerHTML = `<img src='http://openweathermap.org/img/wn/${iconWeather}@2x.png' >`
//
//             }
//         )
//     }
// })



// ********************************************************************************************************************
// let formulaire = document.getElementById('formulaire')
//
// formulaire.addEventListener('submit', tchat)


// function tchat(e){
//     e.preventDefault()
//
// let message = document.getElementById('message').value
//     if(message){
//         let formData = new FormData(formulaire)
//         fetch('index.php?js=message',{
//             method: 'post',
//             body: formData
//         }).then((reponse)=>{
//             reponse.json().then((json)=>{
//                 let affichage = document.getElementById('affichageMessages')
//                 affichage.innerHTML+= `<p> nouveau message : ${json.message} </p> <br>`
//                 console.log(json)
//             })
//         })
//     }else{
//         alert('pas de message')
//     }
//
//
// }


/***************************************************************************************************/
// EXERCICE F1
// créer un champ de texte
// au clic sur un bouton,
// changer la couleur de fond de la page avec la couleur donnée par l'utilisateur

//
// let saisieReponse = document.querySelector('input')
// let btn = document.querySelector('button')
// let reponseOui = document.querySelector('.oui')
// let reponseNon = document.querySelector('.non')
//
//
// btn.addEventListener('click',()=>{
// reponseQuestion(saisieReponse,reponseOui,reponseNon)
// })
//
//
// function reponseQuestion(saisieReponse,reponseOui,reponseNon){
//     if(saisieReponse.value ==="paris"){
//         reponseOui.textContent = "bravo la reponse etait bien paris"
//     }else{
//         reponseNon.textContent = "desolé ce n'est pas la bonne reponse"
//     }
// }


/***************************************************************************************************/


// let message = document.getElementById('message')
// let formulaire = document.getElementById('formAjax')
//
// formulaire.addEventListener('submit', envoyerForm)
//
//
// function envoyerForm(e){
//     e.preventDefault()
//     let message = document.getElementById('message')
//     if (message.value){
//         // let data = new Data(formulaire)
//         let formData = new FormData(formulaire)
//         fetch('index.php?js=message',{
//             method: 'post',
//             body: formData
//         }).then((reponse)=>{
//             // console.log(json())
//             reponse.json().then((json)=>{
//                 let maReponse = document.getElementById('messageform')
//                 maReponse.innerHTML= json.message
//                 console.log(json)
//             })
//         })
//         alert('ok')
//     }else{
//         alert('pas ok')
//     }
//
//
// }








