<?php
$head = '
<script type="module" src="assets/js/touslesexos.js"></script>
';

require_once('template/doctype.php');
?>

    <article role="article">
        <header>
            <h1>Tous les exos en JS</h1>
        </header>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card" id="calculatrice">
                    <h5 class="card-header">Calculatrice</h5>

                    <div class="card-body"></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card" id="toutdouxliste">
                    <h5 class="card-header">Tout doux liste</h5>

                    <div class="card-body"></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card" id="meteoAlkas">
                    <h5 class="card-header">Météo Alkas</h5>

                    <div class="card-body"></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <div class="card" id="shiFuMi">
                    <h5 class="card-header">ShiFuMi</h5>

                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </article>
<?php
require_once('template/footer.php');