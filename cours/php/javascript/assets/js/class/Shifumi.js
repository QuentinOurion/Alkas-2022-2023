export default class Shifumi {
    elPage
    container = null
    scoreFinal = null
    choix = null
    resultat = null
    possibilite = ['pierre', 'feuille', 'ciseaux']

    score = []

    constructor(elPage)
    {
        this.elPage = elPage
        this.score = this.initScore()
    }

    init()
    {
        this.container = document.createElement('div')
        this.resultat = document.createElement('p')
        this.scoreFinal = document.createElement('p')

        this.choix = this.elChoix()

        this.container.appendChild(this.choix)
        this.container.appendChild(this.elValid())
        this.container.appendChild(this.resultat)
        this.container.appendChild(this.scoreFinal)
    }

    show()
    {
        this.elPage.appendChild(this.container)
        this.choix.focus()
    }

    elValid()
    {
        let valid = document.createElement('button')
        valid.textContent = 'Jouer'
        valid.addEventListener('click', () => this.jouer())

        return valid
    }

    elChoix()
    {
        let choix = document.createElement('input')
        choix.placeholder = this.possibilite.join(', ')

        return choix
    }


    initScore()
    {
        return [0, 0]
    }

    jouer()
    {

        try {
            let resultatDesJoueurs = ['égalité', 'Vous avez perdu espece de naze', 'I am the winnnnnnnnnner']

            let choixPersonne = this.personne(this.choix.value.toLowerCase(), this.possibilite)
            let choixOrdi = this.ordi()
            let resultatDuConcours = this.analyse(choixPersonne, choixOrdi)

            this.resultat.innerHTML = `Vous avez choisi : ${this.possibilite[choixPersonne]}<br>
                          L'ordi a choisi : ${this.possibilite[choixOrdi]}<br>
                          ${resultatDesJoueurs[resultatDuConcours]}`

            this.scoreFinal.innerHTML = `Votre score est ${this.score[0]} vs le score de l'ordi ${this.score[1]}`

            if (this.score[0] > 1) {
                this.score = this.initScore()
                this.scoreFinal.innerHTML += `<br>Vous avez gagné la partie`
                this.resultat.innerHTML = ''
            } else if (this.score[1] > 1) {
                this.score = this.initScore()

                this.resultat.innerHTML = ''
                this.scoreFinal.innerHTML += `<br>Vous avez perdu la partie`
            }
        } catch (e) {
            alert(e)
        }
    }

    analyse(choixPersonne, choixOrdi)
    {
        let result

        if (choixPersonne === choixOrdi) {
            result = 0 // egalite
        } else if (
            0 === choixPersonne && 2 === choixOrdi ||
            1 === choixPersonne && 0 === choixOrdi ||
            2 === choixPersonne && 1 === choixOrdi
        ) {
            result = 2 // on gagne
            this.score[0]++
            // score[0] = score[0] +1
        } else {
            result = 1 // on perd
            this.score[1]++
        }

        return result
    }

    ordi()
    {
        return Math.round(Math.random() * 2)
    }

    personne(choix, possibilite)
    {
        let result = -1

        for (let i = 0; i < possibilite.length; i++) {
            if (choix === possibilite[i]) {
                result = i
                break
            }
        }

        if (-1 === result) {
            throw "Veuillez choisir un choix entre (" + possibilite.join(', ') + ')'
        }

        return result
    }
}