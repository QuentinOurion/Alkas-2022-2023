//let jour = ['lundi', 'mardi', 'mercredi']

let jourJson = {
    jour: ['lundi', 'mardi', 'mercredi'],
    mois: ['janvier', 'février', 'mars'],
    data: {
        'lundi' : 'jour de la lune',
        'mardi' : 'jour de mars'
    }
}

let jour = document.getElementById('jour')
for (let i = 0; i < jourJson.jour.length; i++) {
    jour.innerHTML += jourJson.jour[i] + '<br>'

}

for(let jourPlanete in jourJson.data) {
    jour.innerHTML += jourJson.data[jourPlanete] + '<br>'
}



