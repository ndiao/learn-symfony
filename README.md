# Formation sur Symfony 6 - Monolithic App
## Programme
- Chapitre 1: Presentation du projet
- Chapitre 2: Preparation environnement de travail
- Chapitre 3: Outil de developpement
- Chapitre 4: Faire connaissance avec les fichiers/dossiers d'un projet Symfony
- Chapitre 5: Protocole HTTP et Controlleur
- Chapitre 6: Abstract Controller et la methode render
- Chapitre 7: Recuperer les parametres d'une route et l'objet request dans un controlleur
- Chapitre 8: Gestion des sessions
- Chapitre 9: Mini projet sur la mise en place d'un TodoList avec les sessions
- Chapitre 10: Flashbag session
- Chapitre 11: Correction du mini projet
- Chapitre 12: Routeur
- Chapitre 13: Moteur de template TWIG - Syntaxe
- Chapitre 14: Moteur de template TWIG - Fonctions et Filtres natifs
- Chapitre 15: Moteur de template TWIG - Fonctions et Filtres personnalises
- Chapitre 16: Moteur de template TWIG - Heritage
- Chapitre 17: Moteur de template TWIG - Integration d'un template
- Chapitre 18: Moteur de template TWIG - Fragment et controle
- Chapitre 19: Moteur de template TWIG - URL relative et absolue
- Chapitre 20: ORM Doctrine
- Chapitre 21: ORM Doctrine - Entity
- Chapitre 22: ORM Doctrine - Migration
- Chapitre 23: ORM Doctrine - Entity Manager et Persist
- Chapitre 24: ORM Doctrine - Fixtures
- Chapitre 25: Doctrine Repository - FindAll
- Chapitre 26: Doctrine Repository - Find et Param convertor
- Chapitre 27: Doctrine Repository - FindBy et Pagination
- Chapitre 28: Doctrine Repository - FindBy et Pagination automique
- Chapitre 29: Doctrine Manager - Supprimer un enregistrement
- Chapitre 30: Doctrine Manager - Modifier un enregistrement
- Chapitre 31: Doctrine Repository QueryBuilder - Requete personnalisee
- Chapitre 31: Doctrine Repository - ScalarResult et Factorisation QueryBuilder
- Chapitre 32: Doctrine - Relation OneToOne
- Chapitre 33: Doctrine - Relation ManyToOne et ManyToMany
- Chapitre 34: Doctrine - Lifecyle callback les evenements de Doctrine
- Chapitre 35: Traits avec le lifecyle callback les evenements de Doctrine
- Chapitre 36: Formulaire
- Chapitre 37: Personnaliation d'un formulaire avec Bootstrap
- Chapitre 38: Traitement du formulaire lors de l'ajout
- Chapitre 39: Traitement du formulaire lors de la mise a jour
- Chapitre 40: Formulaire - Personnaliser les champs avec FormTypes
- Chapitre 41: Formulaire - Upload d'image
- Chapitre 42: Formulaire - Validation des champs
- Chapitre 43: Formulaire - Plugin JS Select2
- Chapitre 44: Amelioration de la mise en page avec Font Awesome
- Chapitre 45: Services et inversion de controle
- Chapitre 46: Services et injection de dependance
- Chapitre 47: Services et injection de dependance - Factoriser l'upload de fichier
- Chapitre 48: Services envoi de mail via le bundle Mailer
- Chapitre 49: Generer un PDF avec DomPDF
- Chapitre 50: Services injecter des parametres de configuration
- Chapitre 51: Securite - Ouverture de compte
- Chapitre 52: Securite - Formulaire d'authentification 
- Chapitre 53: Securite - Encoder les mots de passe
- Chapitre 54: Securite - Deconnexion des utiliateurs
- Chapitre 55: Securite - Se souvenir de moi
- Chapitre 56: Securite - Recuperer les informations de l'utlisateur connecte
- Chapitre 57: Securite - Enregistrer vos utilisateurs
- Chapitre 58: Securite - Autorisation et controle d'acces
- Chapitre 59: Controler l'acces dans le controlleur et dans le service
- Chapitre 60: Contraindre l'affichage selon le role
- Chapitre 61: Securite et hierarchie de roles
- Chapitre 62: Systeme d'evenements
- Chapitre 63: Systeme d'evenements - Creer un evenement
- Chapitre 64: Dispatcher un evenement avec EventDispatcher
- Chapitre 65: Ecouteur d'evenement et ordre de priorite - EventListener
- Chapitre 66: Systeme d'evenements du cycle de vie de la requete
- Chapitre 67: Systeme d'evenements - EventSubscriber

## Chapitre 1: Presentation du projet
## Chapitre 2: Preparation environnement de travail
1. Se rendre sur le site officiel: https://symfony.com/
2. Specifications techniques
   1. PHP 8
   2. Composer
   3. Symfony CLI
   4. SGBD
   5. NodeJS pour les dependances CSS et JS

3. Le 1 et 4 s'acquiert avec WAMP, XAMP, MAMP, etc
4. Installation Symfony CLI
   1. Installation de Scoop
      1. Demarrer PowerShell
      2. Change la politique d’exécution en signature à distance pour votre compte
    ```
    > Set-ExecutionPolicy RemoteSigned -scope CurrentUser
    ```
      3. Install scoop
    ```
    > iwr -useb get.scoop.sh | iex
    > symfony -v
    > symfony check:requirements
    > symfony server:start
    ```
5. Installer NodeJS
    ```
    > node -v
    ```
6. Creation du projet
```
> symfony new learn-sf6 --full
```
## Chapitre 3: Outil de developpement
1. Installer VSCode
2. Ajouter les extensions suivantes:
   1. Symfony for VSCode
   2. Symfony code snippets
   3. Symfony extensions pack
   4. Symfony Console
3. Installer Git
4. Deposer le projet sur Github
```
> git init
> git add .
> git commit -m "Initialisation du projet"
> git branch -M master
> git remote add origin https://github.com/ndiao/learn-symfony.git
> git push -u origin master
```
## Chapitre 4: Faire connaissance avec les fichiers/dossiers d'un projet Symfony
1. Qu'est-ce qu'un framework?
2. La communaute derriere Symfony
3. Le fichier .env
Nous sommes en mode developpement
```
APP_ENV=dev
```
Cle secrete pour hacher les mots de passe
```
APP_SECRET=acc637f53a3332c33378232ec170bfc0
```
Connexion avec ma base de donnees
```
DATABASE_URL="mysql://root:@127.0.0.1:3306/learn_sf?serverVersion=8&charset=utf8mb4"
```
4. Fichier composer.json
Definition de l'ensemble des bibliotheques dont notre application aura besoin en mode prod et dev.
Des configurations de l'ensemble des plugins qu'il va executer et le systeme d'auto load.
5. Fichier docker pour containeriser votre application
6. Le dossier src
7. Le dossier template contiendra toutes les vues de notre application
8. Le dossier test pour les tests unitaires et fonctionnels
9. Le dossier translation pour l'internationalisation
10. Le dossier var contient le cache pour optimiser les vues
11. Le dossier vendor contient toutes les bibliotheques du projet

## Chapitre 5: Protocole HTTP et Controlleur
1. Quelle est l'architecture utilisee par Symfony
![Alt text](architecture_mvc.png?raw=true "Title")
2. Demarrer le serveur et envoyer cette requete http://localhost:8000/
Nous obtenons une erreur 404 car la ressouce appelee n'existe pas encore.
3. Creer un controlleur
```
> symfony console make:controller
```
Creer la classe controlleur et un fichier template qui lui est associe
   1. Le code la classe controlleur
```java
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
   // Cette annotation dans la version 8 de PHP s'appelle attribut
    #[Route('/', name: 'app_first')]
    public function index(): Response
    {
        die('Je suis la requete /first');
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
}
```
Cet attribut ```#[Route(...)]``` n'est accessible qu'apartir de la version 8 de PHP.
4. Explications sur la classe AbstractController
- La methode format permet de passer la main a un autre controlleur.
- La methode json retourne une donnee sous format json, xml, yaml apartir d'un objet passe en parametre
![Alt text](serialize.png?raw=true "Title")