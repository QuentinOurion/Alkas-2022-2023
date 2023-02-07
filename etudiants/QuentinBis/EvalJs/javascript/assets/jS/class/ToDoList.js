export default class ToDoList {
    el

    container = null
    tache
    ul

    constructor(el) {
        this.el = el
    }

    init() {
        this.container = document.createElement('div')
        let titre = document.createElement('h3')
        this.tache = document.createElement('input')
        this.ul = document.createElement('ul')
        // let containerCheck = document.createElement('div')
        // let titreContainerCheck = document.createElement('h1')

        this.tache.setAttribute('type', 'text')
        titre.textContent = "Tache a faire"
        // titreContainerCheck.textContent = "Tâches deja faite"
        // titreContainerCheck.setAttribute('id', 'titreCheck')
        //
        // ul.appendChild(this.creationContainerUlLi( tache.value))
        this.container.appendChild(titre)
        this.container.appendChild(this.tache);
        this.container.appendChild(this.creationBtnAdd());
        this.container.appendChild(this.ul);


        // containerCheck.appendChild(titreContainerCheck)
        // document.querySelector("article[id=blocToDolist]).appendChild(container)
        // document.querySelector("article[id=blocToDolist]).appendChild(containerCheck)
    }


    creationContainerUlLi() {
        let li = document.createElement('li')
        li.textContent = this.tache.value
        li.appendChild(this.creationBtnSupp(li))
        li.appendChild(this.creationBtnAdd(li))
        // li.appendChild(btncheck)

        return li
        // containerCheck.append(li)
    }

    creationBtnAdd() {
        let btnAjout = document.createElement('button')
        btnAjout.textContent = "Ajouter"
        btnAjout.addEventListener('click', () => {
            this.ul.appendChild(this.creationContainerUlLi())
        })
        return btnAjout
    }

    creationBtnSupp(li) {
        let btnSupp = document.createElement('button')
        btnSupp.textContent = "Supprimer"
        btnSupp.addEventListener('click', () => {
            li.remove()
        })
        return btnSupp
    }


    // checkTache() {
    //     let btncheck = document.createElement('button')
    //     btncheck.textContent = "Fait"
    //     btncheck.setAttribute("class", "btn btn-danger")
    //     btncheck.addEventListener('click', () => {
    //     })
    // }


    show() {
        this.el.appendChild(this.container)
    }
}
