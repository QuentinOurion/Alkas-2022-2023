export default class Calculatrice {
    constructor(el) {
        this.el = el
    }

    init() {
        this.nb1 = document.querySelector('.nb1')
        this.operateur = document.querySelector('.operateur')
        this.nb2 = document.querySelector('.nb2')
        let btnValider = document.querySelector('#btnValider')
        this.affichageResultat = document.querySelector('.resultat')
        btnValider.addEventListener('click', () => {
            this.affichage()
        })
    }


    calculatrice(nb1, operateur, nb2) {
        let result
        switch (operateur) {
            case "+":
                result = nb1 + nb2
                break
            case "-":
                result = nb1 - nb2
                break
            case "*":
                result = nb1 * nb2
                break
            case "/":
                result = nb1 / nb2
                break
        }
        return result
    }


    affichage() {
        this.affichageResultat.textContent = this.calculatrice(Number(this.nb1.value), this.operateur.value, Number(this.nb2.value))
    }


}