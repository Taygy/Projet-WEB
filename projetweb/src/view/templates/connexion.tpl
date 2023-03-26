<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="connexion.css" />
    <link rel="stylesheet" href="header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="connexion">
        <header>
           {include file="src/view/templates/header.tpl"}
        </header>

        <div class="connexion1">Connexion</div>
        <form id="MyForm" action="index.php?action=ajouteroffre" method="post">
            <div class="vector-parent">
                <img class="support7" src="contact1.png" />
                <div>
                    <label class="e-mail1" for="email-input">E-mail :</label>
                    <input class="email" type="email" id="email-input" name="email-input" required>
                </div>
                <div>
                    <label class="mot-de-passe1" for="password-input">Mot de passe :</label>
                    <input class="mdp" type="password" id="password-input" name="password-input" required>
                </div>
            </div>
            <input type="submit" value="Envoyer">
        </form>

        <div class="contact-btn12">
            <button class="connexion2">Connexion</button>
        </div>
        <div class="connectez">Connectez-vous</div>
        <div class="textee">Vous n’avez pas de compte?</div>
        <div class="contact-btn11">
            <button class="sinscrire">S’inscrire</button>
        </div>
    </div>
    <!--footer-->
    <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>