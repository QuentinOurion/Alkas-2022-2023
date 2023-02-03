
let formAjax = document.addEventListener('submit', traiteMoi)
let formContact = document.getElementById('formAjax')

function traiteMoi(e) {
    e.preventDefault()
    let email = formContact.querySelector('#email')
    let message = formContact.querySelector('#message')

    if(email && email.value.trim() && message && message.value.trim()) {
        let formData = new FormData(formContact)

        fetch('index.php?js=formContact', {
            method: 'post',
            body: formData
        })
    } else {
        alert('Le formulaire est invalid')
    }


    // e.target.submit()
}