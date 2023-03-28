# Projet-WEB
Projet Web Thomas Malek Valentin

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
