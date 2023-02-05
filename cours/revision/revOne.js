let choix = prompt("je fais un if ou un switch ?")
let reponse

if ("if" === choix) {
    reponse = prompt("(if) Donne moi ta civilité")

    if ("mr" === reponse || "Mr" === reponse) {
        alert("Monsieur")
    } else if ("mme" === reponse || "Mme" === reponse) {
        alert("Madame")
    } else {
        alert("autre")
    }

} else if ("switch" === choix) {
    reponse = prompt("(switch) Donne moi ta civilité")

    // reponseBis = reponse.toLowerCase() cas où l'on veut toujours comparer en minuscule

    switch (reponse) {
        case 'Mr':
        case 'mr':
            alert("Monsieur")
            break;

        case 'Mme':
        case 'mme':
            alert("Madame")
            break;

        default:
            alert("autre")
    }
}





