<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/creerpilote.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>



<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>

    <h1>Signup</h1>

    <div class="crer_etudiant"></div>
        <form id="MyForm" action="index.php?action=creerpilote" method="post">
            <div>
                <label class="prnom1" for="prenom">Prenom :</label>
                <input class="prnom1" type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label class="nom1" for="nom">Nom :</label>
                <input class="nom1" type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label class="promotion" for="promotion">Promotion :</label>
                <input class="promotion1" type="text" id="promotion-input" name="promotion" required>
            </div>
            <div>
                <label class="centre-de-formation" for="centre">Centre de formation:</label>
                <input class="centre-de-formation1" type="text" id="formation-input" name="centre" required>
            </div>
            <div>
                <label class="ville1" for="ville-input">Ville :</label>
                <input class="ville" type="text" id="ville-input" name="ville" required>
            </div>
            <div>
                <label class="code-postal1" for="code-postal">Code postal :</label>
                <input class="code-postal" type="text" id="code-input" name="code_postal" required>
            </div>
            <div>
                <label class="adresse1" for="adresse_complete">Adresse:</label>
                <input class="adresse" type="text" id="adress-input" name="adresse_complete" required>
            </div>
            <div>
                <label class="e-mail2" for="email">E-mail :</label>
                <input class="email" type="text" id="mail-input" name="email" required>
            </div>
            <div>
                <label class="mot-de-passe" for="password">Mot de passe :</label>
                <input class="mdp" type="password" id="mdp-input" name="password" required>
            </div>
            <div>
                <label class="comptences1" for="password_confirmation">Confirmer votre mot de passe :</label>
                <input class="confmdp" type="password" id="confmdp-input" name="password_confirmation" required>
            </div>
            <div class="condition">
                J'accepte les conditions d'utilisation et la politique de
                confidentialité
                <input type="checkbox" id="certify" name="certify">
            </div>
            <div class="condition2">
                Je certifie que toutes les informations entrées sont correctes
                <input type="checkbox" id="certify" name="certify">
            </div>
            <div class="bouton1">
            <button type="submit" class="sinscrire">Envoyer</button>
        </div>
        </form>
    <footer>
            {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>