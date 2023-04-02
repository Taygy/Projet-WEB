# Projet-WEB à lire avant de télécharger le projet !
Projet Web Thomas Malek Valentin

# Smarty
Il va falloir que vous installiez smarty sur votre ordinateur. Téléchargez-le directement dans le fichier htdocs ou www, dans le dossier dans lequel vous allez mettre tout le code. Le fichier contenant les classes Smarty doit respecter l'arborescence : libs/smarty/smarty-master/libs/Smarty-class.php
Ou vous pouvez le changer directement dans le code dans la partie https://github.com/Taygy/Projet-WEB/tree/main/projetweb/src/view
Il faut alors changer tous les fichiers php.

# Base de données
Pour une meilleure expérience directe, la base de données que nous avons utilisées pour les tests est disponible sous le nom de 'livrable3'. Pour utiliser le site nous utilisons des sessions, c'est donc normal de ne pas avoir accès à toutes les fonctionnalités du site. Nous vous recommendons de prendre un des profils suivant pour mieux comprendre son fonctionnement:
Thomas, administrateur, mot de passe : thomas06
Sylvain, pilote mot de passe : lesylv06
Malek, étudiant, mot de passe : malek06
Attention cependant, vous devrez sûrement changer le nom d'utilisateur et le mot de passe pour accéder à la base de données dans le modèle disponible ici : https://github.com/Taygy/Projet-WEB/blob/main/projetweb/src/modele/model.php

# Vhost
Configuration de Vhost dans une configuration type apache sur Xamp.
Ouvrez le fichier de configuration d'Apache httpd.conf situé dans le dossier C:\xampp\apache\conf

Recherchez la ligne qui contient la directive "Include conf/extra/httpd-vhosts.conf" et décommentez-la en supprimant le caractère # au début de la ligne. Cette ligne permet d'inclure le fichier de configuration des vhosts.

Ouvrez le fichier de configuration des vhosts httpd-vhosts.conf situé dans le dossier C:\xampp\apache\conf\extra.

Ajoutez le bloc de configuration ci dessous :

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/Projet-WEB/projetweb"
    ServerName cesi.stage
    <Directory "C:/xampp/htdocs/Projet-WEB/projetweb">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

Dans ce bloc de configuration, nous avons simplement modifié la directive ServerName pour qu'elle contienne maintenant "cesi.stage".

Enregistrez le fichier httpd-vhosts.conf et redémarrez Apache pour prendre en compte les modifications.

Ajoutez l'entrée correspondante dans le fichier hosts situé dans C:\Windows\System32\drivers\etc pour que votre nom de domaine pointe vers votre serveur local. Ajoutez la ligne suivante à la fin du fichier :

127.0.0.1   cesi.stage

Accédez à votre site en ouvrant votre navigateur et en saisissant l'adresse http://cesi.stage/ dans la barre d'adresse.
Votre vhost pour votre site "cesi.stage" est maintenant configuré et accessible via votre navigateur.
