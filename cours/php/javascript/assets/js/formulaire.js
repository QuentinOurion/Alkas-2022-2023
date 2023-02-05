let form = document.querySelector('#formulaire')
// let btSubmit = document.querySelector('#btSubmit')

form.addEventListener('submit', checkForm)

// btSubmit.addEventListener('click', checkForm)

function checkForm(event)
{
    event.preventDefault() // annule le comportement par default de l'événement

    let messageErreur = ''
    // let couleurErreur = 'red'

    // let nom = document.querySelector('#nom')

    // if(nom) {
    //     if(!nom.value) {
    //         nom.style.backgroundColor = couleurErreur
    //         messageErreur = `Remplis ton nom !!!<br>`
    //     }
    //     if(nom.value.length <3 ) {
    //         nom.style.backgroundColor = couleurErreur
    //         messageErreur += `Le nom doit être composé de 3 caractères au minimum<br>`
    //     }
    // }

    messageErreur += gestionMessageErreur('nom', 'nom')
    messageErreur += gestionMessageErreur('prenom', 'prénom', 1)
    messageErreur += gestionMessageErreur('email', 'email', 6)

    // if (messageErreur) {
    //     document.getElementById('messageErreur').innerHTML = messageErreur
    // } else {
        event.target.submit()
    // }
}


function gestionMessageErreur(id, nom, tailleMin = 3)
{
    let couleurErreur = 'red'
    let el = document.getElementById(id)
    let messageErreur = ''

    if (el) {
        if (!el.value) {
            el.style.backgroundColor = couleurErreur
            messageErreur = `Remplis ton ${nom} !!!<br>`
        }
        if (el.value.length < tailleMin) {
            el.style.backgroundColor = couleurErreur
            messageErreur += `Le ${nom} doit être composé de ${tailleMin} caractères au minimum<br>`
        }

        if(!messageErreur) {
            el.style.backgroundColor = "transparent"
        }
    }

    return messageErreur
}