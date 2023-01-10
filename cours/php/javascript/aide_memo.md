let chiffreMax = 200
let elChiffreMax = document.querySelector('#chiffreMax')

            if(elChiffreMax) {
                elChiffreMax.textContent = chiffreMax
            }

            let elMonParagraphe = document.querySelector('#monParagraphe')

            elMonParagraphe.addEventListener('click', monParagrapheChangeCouleur)


            function monParagrapheChangeCouleur(e)
            {
                // console.log(e.target)
                // console.log(this)
                this.style.color = "blue"
            }