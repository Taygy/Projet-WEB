<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/header.css" />
    <link rel="manifest" href="/manifest.json"/>
</head>
<body>
    <header>
        <div class="header">
            <div class="navbar">
                <div class="logo">
                    <div class="image-1">
                    <a href="http://cesi.stage"><img src="public/logo/logoce.png" alt="Logo de CESI" id="my-image"></a>
                    </div>
                </div>
                {if isset($smarty.session.id_membre)}
                    <button class="mon-compte"><a href="index.php?action=logout">Deconnexion</a></button>
                {else}
                    <button class="mon-compte"><a href="index.php?action=login">Connexion</a></button>
                {/if}
                <div class="menu-icon">
                    <ul class="nav-links">
                        <li><a href="index.php?action=homepage">Accueil</a></li>
                        <li><a href="index.php?action=apropos">A propos</a></li>
                        <li><a href="index.php?action=avis">Avis</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>

</html>