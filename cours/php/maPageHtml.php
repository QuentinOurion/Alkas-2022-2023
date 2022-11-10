<?php
echo date("d / m / Y");
include('header.php'); // inclure une page en mettant un warning en cas d'erreur
include_once('header.php');  // inclure une page UNE seule fois en mettant un warning en cas d'erreur
require('header.php');  // inclure une page en plantant en cas d'erreur
require_once('header.php'); // inclure une page UNE seule fois en plantant en cas d'erreur