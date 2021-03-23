## Application de gestion d’un service de garde

Voici les etapes afin de pouvoir tester le projet sur votre machine, j'incluerai egalement des images.

- [Telecharger le projet zipé ci-haut / Vous pouvez également le clonez. Une fois téléchargé, dézipé le projet ou vous voulez, mais vous aurez besoin d'y acceder plus tard par la ligne de commande cmd](https://raw.githubusercontent.com/007nicky/007nicky.github.io/main/Steps/1.jpg)
- Telecharger la version zipé de [php](https://windows.php.net/download#php-8.0),(Vous pouvez egalement choisir une autre version, j'ai pris celle [zipé](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/2.jpg))
- Telecharger [Composer](https://getcomposer.org/download/), un gestionnaire de dépendances pour PHP. [Image](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/3.jpg)
- Telecharger [Mysql](https://dev.mysql.com/downloads/installer/). pour la base de données [image1](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/13.jpg),[image2](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/15.jpg)

1.	Apres le telechargement de php, dézipé et ouvrez le dossier, checher 'php.ini' (fichier de configuration) et ouvrez le avec un editeur de texte.
	Chercher la ligne 926 ou (;extension=fileinfo) et decommentez la -> (extension=fileinfo).
	Cherchez la ligne 941 ou (;extension=pdo_mysql) et decommentez la -> (extension=pdo_mysql).
    [Image](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/17.jpg)
    
2. Apres le telechargement de Composer, roulez le fichier et suivez les instructions d'installations.
    Pendant l'installation, vous serez invite a choisir l'executable php.exe  situé dans le dossier dézipé de php.
    NB: Apres l'avoir choisi, ne pas changer le chemin du dossier contenant php.
    
     ([image1](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/4.jpg),
    [image2](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/6.jpg),
    [image3](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/7.jpg),
    [image4](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/8.jpg),
    [image5](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/11.jpg),),
   
	[Apres installation, ouvrez cmd et rouler: 'composer global require laravel/installer' (pour installer laravel)](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/16.jpg)
    
3. Apres le telechargement de MySQL, roulez le fichier et suivez les instructions d'installations par defaut.
    [Apres installation, ouvrez mysql wokbench et creez la base de données 'projetgarderie'](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/19.jpg).

4. Ouvrez la ligne de commande cmd et aller dans le dossier du Projet dézipé.
    Tapez 'composer install' et entrer. Patientez pendant que les dependances du projet s'installent
    
5. Ouvrez votre projet dans votre editeur de texte ou application(notepad, vscode, atom...), localisez le fichier '.env.example', dupliquez le et renommez le nouveau fichier en '.env'.
    Ouvrez .env et modifier les identifiants de la base de donnée mysql (ligne 10 a 15) avec vos identifiants créés lors de l'installation de mysql (l'utilisateur devrait toujours etre root a moins que vous n'ayez creez un nouvel utilisateur).
    [Ajoutez le mot de passe et enregistrez](https://github.com/007nicky/007nicky.github.io/blob/main/Steps/20.jpg).
    
6. Allez dans cmd (toujours daans le dossier du projet) et roulez: 'php artisan key:generate'. Une clé sera généré.

7. Toujours dans cmd (toujours daans le dossier du projet), roulez: 'php artisan migrate' et ensuite
     'php artisan serve' pour rouler le serveur, ouvrez le navigateur et rendez vous a 'http://127.0.0.1:8000'
     
     [Etapes 4,6 et 7]((https://github.com/007nicky/007nicky.github.io/blob/main/Steps/21.jpg))

## Liens utiles
[Se familiariser avec Github](https://m.youtube.com/watch?v=8JJ101D3knE)
[Se familiariser avec Laravel](https://www.youtube.com/watch?v=MFh0Fd7BsjE&t=3125s)


