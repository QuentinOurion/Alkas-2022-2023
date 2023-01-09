<?php
require_once('doctype.php');
?>
    <article class="page" role="article">
        <header><h1>Cours Js</h1></header>

        <script>
            var nomVariable
            nomVariable = 1
            nomVariable = "test"

            if ("test" === nomVariable) {
                let nomVariableLet = 2
            }

            const autreVariable = 'test'

            let tab = [123, 123, 123]
            let tab2 = new Array(123, 123, 123)

            // alert(autreVariable)

            let anthony = "5"
            // alert( 3434 + 12)
            // let tab2 = ['bla' => 'test',67676,343434]
            // console.log(tab2[123])

            function test(maVariable)
            {
                alert(anthony)
            }

            //test(anthony)

            let blabla = prompt("Tapez quelque chose")

            alert(blabla)

            let monChiffre = Number(prompt("Tapez un chiffre"))
            alert(monChiffre + 1)
        </script>
    </article>

<?php

require_once('footer.php');