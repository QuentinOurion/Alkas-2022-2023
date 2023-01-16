<!DOCTYPE html>
<html>
<head>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td,th {
            border: solid 1px #aaa;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
// Africa
// length 58
$countries_list = array(
    "DZ" => "Algérie",
    "AO" => "L'Angola",
    "BJ" => "Bénin",
    "BW" => "Botswana",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "CM" => "Cameroun",
    "CV" => "Cap-Vert",
    "CF" => "République centrafricaine",
    "TD" => "Tchad",
    "KM" => "Comores",
    "CG" => "Congo",
    "CD" => "Congo, République démocratique du Congo",
    "CI" => "Côte d'Ivoire",
    "DJ" => "Djibouti",
    "EG" => "Egypte",
    "GQ" => "Guinée Équatoriale",
    "ER" => "Érythrée",
    "ET" => "Ethiopie",
    "GA" => "Gabon",
    "GM" => "Gambie",
    "GH" => "Ghana",
    "GN" => "Guinée",
    "GW" => "Guinée-Bissau",
    "KE" => "Kenya",
    "LS" => "Lesotho",
    "LR" => "Libéria",
    "LY" => "Jamahiriya arabe libyenne",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "ML" => "Mali",
    "MR" => "Mauritanie",
    "MU" => "Ile Maurice",
    "YT" => "Mayotte",
    "MA" => "Maroc",
    "MZ" => "Mozambique",
    "NA" => "Namibie",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "RE" => "Réunion",
    "RW" => "Rwanda",
    "SH" => "Sainte-Hélène",
    "ST" => "Sao Tomé et Principe",
    "SN" => "Sénégal",
    "SC" => "les Seychelles",
    "SL" => "Sierra Leone",
    "SO" => "Somalie",
    "ZA" => "Afrique du Sud",
    "SS" => "Soudan du sud",
    "SD" => "Soudan",
    "SZ" => "Swaziland",
    "TZ" => "Tanzanie, République-Unie de",
    "TG" => "Aller",
    "TN" => "Tunisie",
    "UG" => "Ouganda",
    "EH" => "Sahara occidental",
    "ZM" => "Zambie",
    "ZW" => "Zimbabwe"
);
?>
<?php
;

function countries_table() {
    $table = '';
    foreach ($GLOBALS['countries_list'] as $key => $value) {
        $table .= '<tr>';
        $table .= '<td>'.$value.'</td>';
        $table .= '<td>'.$key.'</td>';
        $table .= '</tr>'."\n";
    }
    return $table;
}
?>

<table class="mytable">
    <thead>
    <tr>
        <th>name</th>
        <th>code</th>
    </tr>
    </thead>
    <tbody>
    <?php echo countries_table(); ?>
    </tbody>
</table>

</body>
</html>
