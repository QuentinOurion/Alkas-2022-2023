<?php
require_once('doctype.php');
?>

<div id="ajax">
    <form method="post" action="" id="formAjax">
    <div class="mb-3">
    <label  class="form-label" for="email">Saisir votre E-mail</label>
    <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="mb-3">
    <label  class="form-label" for="message">Saisir votre message</label>
    <textarea class="form-control" name="message" id="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <div id="messageform"></div>
</div>

<?php

require_once('footer.php');



