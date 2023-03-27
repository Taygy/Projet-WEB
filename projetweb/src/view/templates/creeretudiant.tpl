<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creeretudiant.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
<header>
        {include file="src/view/templates/header.tpl"}
    </header>
<div class="crer-tudiant">
    
    <div class="crer-un-compte">Créer un compte étudiant</div>
        <div class="desc55">
            Facilitez l'accès des étudiants aux offres d'emploi en créant des
            profils complets et ciblés, et permettez-leur d'explorer facilement des
            milliers d'opportunités professionnelles.
        </div>
        <img class="support" src="public\logo/contact1.png" />
        <div class="descccc">
            Vous souhaitez aider vos étudiants à trouver des offres d'emploi plus
            facilement ? Découvrez nos outils pour faciliter leur recherche et leur
            permettre de postuler en quelques clics.
        </div>
        <div class="crer_etudiant"></div>
        <form id="MyForm" action="index.php?action=creeretudiant" method="post">
            <div>
                <label class="promotion" for="prenom">Prenom :</label>
                <input class="promotion1" type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label class="centre-de-formation" for="nom">Nom :</label>
                <input class="centre-de-formation1" type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label class="niveau-scolaire" for="promotiont">Promotion :</label>
                <input class="niveau-scolaire1" type="text" id="promotion-input" name="promotion-input" required>
            </div>
            <div>
                <label class="tlphone1" for="centre">Centre de formation:</label>
                <input class="tel" type="number" id="formation-input" name="formation-input" required>
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
                <label class="competence" for="competence">Compétences :</label>
                <input class="compet" type="text" id="competence-input" name="competence" required>
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
            <button type="submit" class="sinscrire">S'inscrire</button>
        </div>
        </form>
        <div>
            <div class="titre3">Diffusez vos offres avec nous</div>
            <img class="img-time" src="public\logo/time.png" />
            <div class="en1">
                Pilotez facilement les candidatures de vos étudiants
            </div>
            <img class="img-ag" src="public\logo/agreement.png" />
            <div class="desc">
                Aidez vos étudiants à recevoir des candidatures qualifiées
            </div>
            <img class="img-read" src="public\logo/reading.png" />
            <div class="description">
                Facilitez la recherche d'entreprises pour les étudiants.
            </div>
        </div>
        <div>
            <div class="bouton">
                <button class="contact">Contactez-nous</button>
            </div>
        </div>
 </div>
    <footer>
            {include file="src/view/templates/footer.tpl"}
    </footer>

    <script src="public/ajaxCodePostal"></script>
</body>

</html>




