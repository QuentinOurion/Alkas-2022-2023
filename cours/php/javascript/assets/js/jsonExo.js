let ficheContact = {
    contacts: [
        {
            prenom: 'guillaume',
            nom: 'je ne sais pas comment tu tappelles',
            email: 'guillaime@aime.tout'
        },
        {
            prenom: 'anthony',
            nom: 'lui non plus',
            email: 'anth@on.y'
        },
        {
            prenom: 'anthony',
            nom: 'lui non plus',
            email: 'anth@on.y'
        },
        {
            prenom: 'anthony',
            nom: 'lui non plus',
            email: 'anth@on.y'
        },
        {
            prenom: 'anthony',
            nom: 'lui non plus',
            email: 'anth@on.y'
        }
    ]
}

let cequejeveux = document.getElementById('ficheContact')

/*
// for each
for (let contact in ficheContact.contacts) {
    console.log(ficheContact.contacts[contact])
    cequejeveux.innerHTML += `<p>${ficheContact.contacts[contact].prenom}</p>`
}

// boucle via un mapping (marche uniquement sur des tableaux [])
ficheContact.contacts.map((contact) => {
    cequejeveux.innerHTML += `<p>${contact.prenom}</p>`
})

// autre façon d'écrire un map avec une fonction fléché ligth par ce qu'il y a qu'une instruction donc on peut le raccourcir
ficheContact.contacts.map(contact => cequejeveux.innerHTML += `<p>${contact.prenom}</p>`)

// boucle via un forEach
ficheContact.contacts.forEach((contact)=>{
    cequejeveux.innerHTML += `<p>${contact.prenom}</p>`
})
*/

// boucle for iterative
for (let i = 0; i < ficheContact.contacts.length; i++) {
    console.log(ficheContact.contacts[i])
    cequejeveux.innerHTML += `
<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
    <div class="card">
      <div class="card-header">
        ${ficheContact.contacts[i].nom}
      </div>
      <div class="card-body">
        Prénom : ${ficheContact.contacts[i].prenom}<br>
        Email : ${ficheContact.contacts[i].email}
      </div>
    </div>
</div>
`
}



