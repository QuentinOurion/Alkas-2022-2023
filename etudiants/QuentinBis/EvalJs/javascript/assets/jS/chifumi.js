let btnInput = document.createElement('button')
let joueur


btnInput.textContent = 'boutou valider'
// btnInput.setAttribute('value',"je suis la")

document.querySelector('main').appendChild(btnInput)
 btnInput.value = "1"




btnInput.addEventListener('click', (e)=>{
    console.log(e.target.value)


})
