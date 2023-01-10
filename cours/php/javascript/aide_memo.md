

````html
<p id="monParagraphe">Saisir des données et s'arrêter dès que leur somme dépasse <span id="chiffreMax">500</span></p>
````

```js
let chiffreMax = 200

// récupére un element (la balise) dont l'identifiant est : chiffreMax sur la page html
let elChiffreMax = document.querySelector('#chiffreMax')
// document.querySelectorAll() permet de trouver une liste d'élements 

// On vérifie qu'on a bien (l'objet) l'element pour savoir s'il a été trouvé pour faire du traitement ou autre
if (elChiffreMax) {
    elChiffreMax.textContent = chiffreMax
}

let elMonParagraphe = document.querySelector('#monParagraphe')

// addEventListener permet de créer un évenement, il faudra pour qu'il marche créer une fonction pour qu'il puisse l'appeler
elMonParagraphe.addEventListener('click', monParagrapheChangeCouleur)


function monParagrapheChangeCouleur(e) {
    // console.log(e.target)
    // console.log(this)
    this.style.color = "blue"
}
```