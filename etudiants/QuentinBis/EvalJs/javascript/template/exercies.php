<?php
$head = '
<script type="module" src="assets/jS/exercices.js"></script>

';
require_once('doctype.php');
?>
    <div id="containerMisePage">
        <article id="blocEvent" role="article">
            <h3>Exercice Event</h3>
            <ul id="ulListe">
                <li class="items">Item 1</li>
                <li class="items">Item 2</li>
                <li class="items">Item 3</li>
                <li class="items">Item 4</li>
                <li class="items">Item 5</li>
                <li class="items">Item 6</li>
                <li class="items">Item 7</li>
                <li class="items">Item 8</li>
                <div id="resultDiv"></div>
        </article>


        <article id="blocToDolist" role="article">
            <h3>To Do List</h3>
        </article>


        <article id="blocCalculatrice">
            <label> veuillez saisir un chiffre</label>
            <input class="nb1" type="text">
            <label> Selectionner un operateur</label>
            <select class="operateur">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">x</option>
            </select>
            <label> veuillez saisir un deuxieme chiffre</label>
            <input class="nb2" type="text">
            <button id="btnValider">=</button>
            <p class="resultat"></p>
        </article>


        <section class="meteo">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="card bg-dark text-white" style="border-radius: 40px;">
                            <div class="bg-image" style="border-radius: 35px;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/draw1.webp"
                                     class="card-img" alt="weather"/>
                                <div class="mask" style="background-color: rgba(190, 216, 232, .5);"></div>
                            </div>
                            <div class="card-img-overlay text-dark p-5">
                                <div style="display:flex ;justify-content: flex-end" id="iconMeteo"></div>
                                <h4 class="mb-0" id="ville"></h4>
                                <p class="display-2 my-3" id="temperature"></p>
                                <p class="mb-2" id="temperatureResent"><strong></strong></p>
                                <p class="mb-2" id="temperatureMin"><strong></strong></p>
                                <p class="mb-2" id="temperatureMax"><strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div style="text-align: center">
            <input onkeyup="rechercheUser() id="rechercheUser" type="text" name="search">
            <section class="blocUser" id="test" style="display: flex; flex-direction: row; flex-wrap: wrap ;">
            </section>
        </div>
    </div>

<?php
require_once('footer.php');


