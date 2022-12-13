<?php

const PWD = 'àlacon';
//define('LOGIN', 'aol@aol.com');
const LOGIN = 'aol@aol.com';
echo LOGIN;

$hash = password_hash(PWD, PASSWORD_DEFAULT );

var_dump(password_verify(PWD, $hash));