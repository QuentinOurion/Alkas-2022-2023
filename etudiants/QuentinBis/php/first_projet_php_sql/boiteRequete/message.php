<?php


function lireMessage($connexion, $id){
    $message = $connexion->prepare('select  r.nom nom_role, m.contenu message_contenu,u.nom utilisateur_nom,m.date_creation date_du_message
                                    from user u
                                    join message m on u.id = m.user_id
                                    join roles r on u.roles_id = r.id
                                    where u.id = :id');
    $message->execute([
        ':id' => $id,
    ]);
    $result = $message->fetchall();
    return $result;
}

function envoiNvxMessage($connexion,$userId,$conversationId,$contenu){
    $message = $connexion->prepare('insert into message(user_id, conversation_id, contenu, date_creation)  values (:userId,:conversationId,:contenu,NOW())');
    $result = $message->execute([
        ':userId' => $userId,
        ':conversationId' =>  $conversationId,
        ':contenu' => $contenu,
    ]);
    return $result;
}





