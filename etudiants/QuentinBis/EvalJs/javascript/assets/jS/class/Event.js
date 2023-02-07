export default class Event {
    constructor(el) {
        this.el = el
    }

    init() {
        this.listesLi = document.querySelectorAll('.items')
        // listesLi.setAttribute('type', 'text')
        this.resultDiv = document.querySelector('#resultDiv')
    }

    affichageItem() {
        for (let i = 0; i < this.listesLi.length; i++) {
            this.listesLi[i].textContent = ("blabla" + (i + 1))
            this.listesLi[i].addEventListener('click', () => {
                this.resultDiv.style.background = 'green'
                this.resultDiv.style.color = 'white'
                this.resultDiv.textContent = ('item' + (i + 1))
            })
        }
    }

    show() {

        this.el.appendChild(this.resultDiv)
    }

}



