<?php

class Message
{
    private $con;


    public function __construct($connexion)
    {
        $this->con = $connexion;
    }


    /**
     * Permet de lire les messages des utilisateurs
     * @param $id
     * @return mixed
     */
    public function lireMessage($id)
    {
        $message = $this->con->prepare('select  r.nom nom_role, m.contenu message_contenu,u.nom utilisateur_nom,m.date_creation date_du_message
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


    /**
     * Permet d'envoyer des nouveaux messages
     * @param $connexion
     * @param $userId
     * @param $conversationId
     * @param $contenu
     * @return mixed
     */
    public function envoiNvxMessage($userId, $conversationId, $contenu)
    {
        $message = $this->con->prepare('insert into message(user_id, conversation_id, contenu, date_creation)  values (:userId,:conversationId,:contenu,NOW())');
        $result = $message->execute([
            ':userId' => $userId,
            ':conversationId' => $conversationId,
            ':contenu' => $contenu,
        ]);
        return $result;
    }
}