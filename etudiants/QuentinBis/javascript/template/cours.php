<?php
require_once('doctype.php');
?>
    <h2>Cours Js</h2>
<article class="page" role="article">


    <script>
        let nb1 = Number(prompt('Veuillez saisir un chiffre'))
        let operateur = prompt("veuillez saisir un operateur")
        let nb2 = Number(prompt('Veuillez saisir a nouveau un chiffre'))
        let result;


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


        switch (operateur)
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



                alert(result)

    </script>
</article>

<?php

require_once ('footer.php');