let formAjax = document.addEventListener('submit', envoiForm)
let formContact = document.getElementById('formAjax')

function envoiForm(e) {
    e.preventDefault()
    let email = formContact.querySelector('#email')
    let message = formContact.querySelector('#message')
    if (email && email.value.trim() && message && message.value.trim()) {
        let formData = new FormData(formContact)
        fetch('index.php?js=formContact', {
            method: 'post',
            body: formData
        }).then((reponse)=>{
            if(reponse.ok){
                reponse.json().then((json)=>{
                    let maReponse = document.getElementById('messageform')
                    maReponse.innerHTML= json.message
                    console.log(json)
                })
            }
        })
    } else {
        alert('Le formulaire est invalid')
    }
}



