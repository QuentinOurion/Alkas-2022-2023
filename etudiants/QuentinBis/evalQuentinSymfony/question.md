À quoi sert Request $request ?

la variable $request c'est une variable superglobale
$request est utilisé  pour récupérer des informations de la requête HTTP en cours.



Qu'est-ce qu'une hydratation ?
de traiter la soumission du formulaire et de remplir les propriétés de l'objet associé.
Dans symfony on utilise la methode handleRequest()


Dans une méthode, on retrouve souvent dans les paramètres des choses du genre (Request $request, Chemise $chemise), comment ça s'appelle et comment ça marche ?
C'est l'injection de dépendances. Lorsque qu on a besoin d'un objet dans l'application , on demande au conteneur de services nous fournir une instance de l'objet


Via un contrôleur, j'aimerais afficher une chemise par son identifiant comme dans cet exemple /chemise/4, Comment l'écrire ?

/**
#Route("/chemise/{id}", name="chemise_show")
  */
  public function showAction(Chemise $chemise)
  {
  }


Qu'est-ce qu'un voter et son but ?
Un Voter est un mécanisme de sécurité qui permet de contrôler l'accès aux fonctionnalités
Son but et de vérifier si l'utilisateur actuel a les permissions nécessaires y acceder

Qu'est-ce qu'une entité ?
Une entité est une classe qui représente un objet
une entité correspond une table dans une base de données.



Qu'est ce qu'un repository ?
C'est une classe qui permet d'interagir 
avec la base de données pour récupérer et manipuler des entités.



Pourquoi il vaut mieux utiliser des versions LTS dans la majorité des cas ?
C'est une version d'un logiciel qui est maintenue pendant une longue période.

Comment envoyé une erreur et l'intercepté ? Expliquer la logique
On utilise un dd()

Comment basculer le site en mode développement et production
Modifiant la valeur de la variable d'environnement APP_ENV

Comment supprimer le cache ?
on peut utiliser la commande "cache:clear"