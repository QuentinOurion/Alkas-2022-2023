<?php
//$prenom = 'Quentin';

//if(isset($_GET['prenom'])) {
//    $prenom = $_GET['prenom'];
//}
//if(!empty($_GET['prenom'])) {
//    $prenom = $_GET['prenom'];
//}

$prenom = $_GET['prenom'] ?? 'Quentin';

//echo $toto;
//echo $prenom;

require_once ('tpl/test.php');