<header role="banner"><h1><?= $titre ?></h1></header>
<ul>
<?php
$continent = '';
foreach ($countries_list as $list) {
    if ($continent != $list['continent']) {
        $continent = $list['continent'];
        echo $continent . '<br>';
    }
}
?>
</ul>