<?php
require_once('doctype.php');
?>
    <article class="page" role="article">
        <header><h1>Evenement</h1></header>

        <ul id="ulListOne">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
            <li>Item 7</li>
            <li>Item 8</li>
        </ul>

        <div id="result"></div>

        <script>
            // let ulListOne = document.querySelector('#ulListOne')
            // let listLi = ulListOne.querySelectorAll('li')
            // let ulListOne = document.querySelector('#ulListOne')
            // let listLi = ulListOne.querySelectorAll('#ulListOne > li')
            // let ulListOne = document.getElementById('ulListOne')
            // let listLi = ulListOne.getElementsByTagName('li')
            let listLi = document.getElementById('ulListOne').getElementsByTagName('li')

            let resultDiv = document.querySelector("#result")

            for (let i = 0; i < listLi.length; i++) {
                listLi[i].textContent = "Blabla "+ (i + 1)

                listLi[i].addEventListener('click', clicList)

                function clicList()
                {
                    resultDiv.textContent = "Item " + (i + 1)
                }
            }

        </script>

    </article>

<?php

require_once('footer.php');