<?php
$head = '<script defer src="assets/js/coursAjax.js"></script>';

require_once('template/doctype.php');
?>

    <div id="ajax">
        <form action="" method="post" id="formAjax">
            <div class="mb-3">
                <label for="email" class="form-label">Tapez votre email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Tapez votre message</label>
                <textarea name="content" id="message" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
        </form>
    </div>

<?php
require_once('template/footer.php');