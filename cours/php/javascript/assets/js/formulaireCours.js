let form = document.querySelector('form')
// let btSubmit = document.querySelector('#btSubmit')

form.addEventListener('submit', checkForm)

// btSubmit.addEventListener('click', checkForm)

function checkForm(event)
{
    event.preventDefault() // annule le comportement par default de l'événement

    let liste = document.querySelector('#liste').value

    if(liste && 'T' === liste[0]) {
        alert('bravooooooo')
        event.target.submit() // envoie du formulaire
    } else {
        alert(`Errrrrrreur met moi un T en premier`)
    }
}