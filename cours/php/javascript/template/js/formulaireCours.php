<?php
$head = '<script defer src="assets/js/formulaireCours.js"></script>';

require_once('template/doctype.php');

print_r($_POST ?? '');
?>

<form method="post">
    <input name="liste" id="liste" type="text">
    <button type="submit" id="btSubmit">Envoyez</button>
</form>

<?php
require_once('template/footer.php');