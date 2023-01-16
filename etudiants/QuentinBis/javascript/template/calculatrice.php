<?php
require_once('doctype.php');
?>

<article class="page" role="article">
    <header>
        <h1>Cours Js</h1>
    </header>

    <script>

        function recupChiffre(){
        let nb1 = Number(prompt('Veuillez saisir un chiffre'))
        let operateur = prompt("veuillez saisir un operateur")
        let nb2 = Number(prompt('Veuillez saisir a nouveau un chiffre'))
        result = calculatrice(nb1, operateur, nb2)
            alert(result)
        }


        // if(operateur == "+"){
        //     result = nb1 + nb2
        // }else if (operateur == "-"){
        //     result = nb1 - nb2
        // }else if (operateur == "*") {
        //     result = nb1 * nb2
        // }else if (operateur == "/") {
        //     result = nb1 / nb2
        // }
        //
        // alert(result)

        //




        function calculatrice(nb1, operateur, nb2) {
            let result
            switch (operateur) {

                case "+" :
                    result = nb1 + nb2
                    break;
                case "-" :
                    result = nb1 - nb2
                    break;
                case "*" :
                    result = nb1 * nb2
                    break;
                case "/" :
                    result = nb1 / nb2
                    break;
                default:
                    console.log(`cool`);
            }
            return result
        }


        recupChiffre()


        let chiffre = Number(prompt('Veuillez saisir un chiffre'))


        while (result <500){

        }

    </script>
</article>

<?php

require_once('footer.php');