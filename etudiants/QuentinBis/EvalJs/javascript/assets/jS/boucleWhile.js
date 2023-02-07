doWhile(200)

function doWhile(max = 500) {
    let sortie = 0

    do {
        let chiffre = Number(prompt("Tapez un chiffre", 0))

        sortie += chiffre

        alert("Le resultat de sortie est : " + sortie + " sur " + max)
    } while (sortie < max)
}