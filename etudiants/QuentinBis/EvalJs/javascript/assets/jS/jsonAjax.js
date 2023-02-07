let affichageContact = document.querySelector('.row')



let ficheContact = {
    ficheContact1: {
        'nom': 'ourion',
        'prenom': 'Quentin',
        'mail': 'superemail@gmail.com'
    },
    ficheContact2: {
        'nom': 'dupond',
        'prenom': 'pierre',
        'mail': 'ouil@gmail.com'
    },
    ficheContact3: {
        'nom': 'dupond',
        'prenom': 'pierre',
        'mail': 'ouil@gmail.com'
    },
    ficheContact4: {
        'nom': 'dupond',
        'prenom': 'pierre',
        'mail': 'ouil@gmail.com'
    }
}


for (let contact in ficheContact) {
    affichageContact.innerHTML += `
                                    <div class="card col-sm-12 col-md-6 col-lg-3" >
                                        <div class="card-header bg-primary text-white" style="text-align: center"> ${contact}</div>
                                            <div class="card-body bg-dark ">
                                                    <ul class="list-group list-group-flush  ">
                                                        <li class="list-group-item bg-dark text-white"style="text-align: center">${ficheContact[contact].nom}</li>
                                                        <li class="list-group-item bg-dark text-white"style="text-align: center">${ficheContact[contact].prenom}</li>
                                                        <li class="list-group-item bg-dark text-white"style="text-align: center">${ficheContact[contact].mail}</li>
                                                    </ul>
                                            </div>
                                    </div> 
                                   
                 `
}




















//
//
// for (let contact in ficheContact.ficheContact2) {
//     affichageContact2.innerHTML += `
//                                     <div class="card " >
//                                         <div class="card-body">
//                                                     <ul class="list-group list-group-flush">
//                                                         <li class="list-group-item">${ficheContact.ficheContact2[contact]}</li>
//                                                     </ul>
//                                         </div>
//                                     </div>`
// }


// for(let contact in ficheContact.ficheContact2) {
//     affichageContact2.innerHTML += ficheContact.ficheContact2[contact] + '<br>'
// }
//
// for(let contact in ficheContact.ficheContact1) {
//     affichageContact1.innerHTML += ficheContact.ficheContact1[contact] + '<br>'
// }


// for (let i = 0; i < ficheContact.ficheContact1.length; i++) {
//     affichageContact1.innerHTML += ficheContact.ficheContact1[i] + '<br>'
// }
//
//
// for (let i = 0; i < ficheContact.ficheContact2.length; i++) {
//     affichageContact2.innerHTML += ficheContact.ficheContact2[i] + '<br>'
// }