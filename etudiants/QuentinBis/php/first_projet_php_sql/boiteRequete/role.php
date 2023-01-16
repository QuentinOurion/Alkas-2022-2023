<?php

/**
 * Recupere la liste des roles
 *
 * @param PDO $connexion
 * @return array
 */
function listRoles(PDO $connexion) : array
{
    return list_all($connexion, 'select * from roles');
}

