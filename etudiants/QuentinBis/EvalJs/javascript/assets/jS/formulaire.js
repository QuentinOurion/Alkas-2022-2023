let formulaire = document.querySelector('form')
let champsInput = document.querySelectorAll('.tousChamp')


formulaire.addEventListener('submit', checkform)

function checkform(e) {
    let messageFormulaire = document.getElementById('messageFormulaire')
    let cpt = 0

    e.preventDefault()
    for (let i = 0; i < champsInput.length; i++) {
        if (champsInput[i].value.length >= 3 && champsInput[i].value.length <= 10) {
            champsInput[i].style.backgroundColor = 'white'

        } else {
            champsInput[i].style.backgroundColor = 'red'
            cpt++
            // messageFormulaire.textContent = 'Erreur le  formualaire n a pu être bien été envoyé'
            messageFormulaire.innerHTML += `le champ  ${champsInput[i].name} est invalide <br>`
        }
    }
    if (0 === cpt) {
        e.target.submit()
        // messageFormulaire.textContent = 'Le formualaire a bien été envoyé'
        document.querySelector("article > div").innerHTML = `
      <h3>Le formulaire a bien ete envoyé </h3>`
    }
}





