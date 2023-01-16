let scoreJoueur = document.getElementById("score_joueur")
let scoreOrdinateur = document.getElementById("score_ordinateur")
let restBtn = document.getElementById("btn_recommencer")
let jouerMsg = document.getElementById("msg_jouer")
let suivantMsg = document.getElementById("msg_suivant")
let joueurBtns = document.querySelectorAll(".btn_joueur")
let pierreBtn = document.getElementById("pierre")
let feuilleBtn = document.getElementById("feuille")
let ciseauxBtn = document.getElementById("ciseaux")
let ordinateurBtns = document.querySelectorAll(".btn_ordinateur")
let pierreBtnOrdinateur = document.getElementById("pierre_ordinateur")
let feuilleBtnOrdinateur = document.getElementById("feuille_ordinateur")
let ciseauxBtnOrdinateur = document.getElementById("ciseaux_ordinateur")



// const jouerManche = (e) => {
//     let choix = e.target.closest(".btn_joueur") 
//     let choixJoueur = choix.id;
// }
// 

                    // PARTIE PLAYER
let player;


  function jeux(e){
    
    let choix = e.target.closest(".btn_joueur")
    let choixJoueur = choix.id;
    
    choix.classList.add("active");


    pierreBtn.removeEventListener("click", jeux);
    feuilleBtn.removeEventListener("click", jeux);
    ciseauxBtn.removeEventListener("click", jeux);

    

    if(choixJoueur === "pierre"){
        player = "pierre"
    }
    else if(choixJoueur==="feuille"){
        player = "feuille"
    }
    else{
        player = "ciseaux"
    }

// PARTIE COMPUTEUR

    let computer;

let nbAleatoire = Math.floor(Math.random()*3)
// 0 = pierre
// 1 = feuille
// 2 = ciseaux
if(nbAleatoire == 0){
computer = "pierre"
pierreBtnOrdinateur.classList.add("active");
}
else if(nbAleatoire == 1){
computer = "feuille"
feuilleBtnOrdinateur.classList.add("active");
}
else{
computer = "ciseaux"
ciseauxBtnOrdinateur.classList.add("active");
}



                // PARTIE JOUER LA MANCHE


    if(player == computer){
    jouerMsg.textContent = "Egalité !!";
    }

    else{
        switch(computer){
        case "pierre" : if(player==="feuille"){
            scoreJoueur.textContent++;
            jouerMsg.textContent = "Vous avez gagné, bien joué :-)"}
        else{scoreOrdinateur.textContent++;
            jouerMsg.textContent = "L ordinateur gagne :-( "}
        break

        case "feuille" : if(player==="ciseaux"){
            scoreJoueur.textContent++;
            jouerMsg.textContent = "Vous avez gagné, bien joué :-)"}
        else{scoreOrdinateur.textContent++;
            jouerMsg.textContent = "L ordinateur gagne :-(" }
        break

        case "ciseaux" : if(player==="pierre"){
            scoreJoueur.textContent++;
            jouerMsg.textContent = "Vous avez gagné, bien joué :-)"}
        else{scoreOrdinateur.textContent++;
            jouerMsg.textContent = "L ordinateur gagne :-(" }
        break
    }}


  }         


  joueurBtns.forEach((btn)=> btn.addEventListener("click", jeux))



            // BOUTON TOUR SUIVANT

  suivantMsg.addEventListener("click", () => {
jouerMsg.textContent = "A vous de jouer !"
pierreBtnOrdinateur.classList.remove("active")
feuilleBtnOrdinateur.classList.remove("active")
ciseauxBtnOrdinateur.classList.remove("active")
pierreBtn.classList.remove("active")
feuilleBtn.classList.remove("active")
ciseauxBtn.classList.remove("active")

pierreBtn.addEventListener("click", jeux);
feuilleBtn.addEventListener("click", jeux);
ciseauxBtn.addEventListener("click", jeux);

  })

            // BOUTON RECOMMENCER


  restBtn.addEventListener("click", () => {
    scoreOrdinateur.textContent = "0"
    scoreJoueur.textContent = "0"
    jouerMsg.textContent = "A vous de jouer !"
    pierreBtnOrdinateur.classList.remove("active")
    feuilleBtnOrdinateur.classList.remove("active")
    ciseauxBtnOrdinateur.classList.remove("active")
    pierreBtn.classList.remove("active")
    feuilleBtn.classList.remove("active")
    ciseauxBtn.classList.remove("active")

    pierreBtn.addEventListener("click", jeux);
    feuilleBtn.addEventListener("click", jeux);
    ciseauxBtn.addEventListener("click", jeux);
    
      })


                  










