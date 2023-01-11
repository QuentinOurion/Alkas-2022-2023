let choix = prompt("je fais un if ou un switch ?")
let reponse

if ("if" === choix) {
     reponse = prompt("(if) Donne moi ta civilité")

    if ("mr" === reponse) {
        alert("monsieur")
    } else if ("mme" === reponse) {
        alert("madame")
    } else {
        alert("autre")
    }

} else if ("switch" === choix) {
     reponse = prompt("(switch) Donne moi ta civilité")

    switch (reponse) {
        case 'mr':
            alert("monsieur")
            break;
        case 'mme':
            alert("madame")
            break;
        default:
            alert("autre")
    }
}





