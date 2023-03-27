<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creeretudiant.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="crer-tudiant">
        <header>
        {include file="src/view/templates/header.tpl"}
       </header>

        <div class="crer-un-compte">Créer un compte étudiant</div>
        <div class="desc55">
            Facilitez l'accès des étudiants aux offres d'emploi en créant des
            profils complets et ciblés, et permettez-leur d'explorer facilement des
            milliers d'opportunités professionnelles.
        </div>
        <img class="support" src="contact1.png" />
        <div class="descccc">
            Vous souhaitez aider vos étudiants à trouver des offres d'emploi plus
            facilement ? Découvrez nos outils pour faciliter leur recherche et leur
            permettre de postuler en quelques clics.
        </div>
        <div class="crer_etudiant"></div>
        <form id="MyForm" action="creer_etudiant" method="post">
            <div>
                <label class="prnom1" for="prenom-input">Prenom :</label>
                <input class="prenom" type="text" id="prenom-input" name="prenom-input" required>
            </div>
            <div>
                <label class="nom1" for="nom-input">Nom :</label>
                <input class="nom" type="text" id="nom-input" name="nom-input" required>
            </div>
            <div>
                <label class="promotion" for="promotion-input">Promotion :</label>
                <input class="promotion1" type="text" id="promotion-input" name="promotion-input" required>
            </div>
            <div>
                <label class="centre-de-formation" for="formation-input">Centre de formation:</label>
                <input class="centre-de-formation1" type="text" id="formation-input" name="formation-input" required>
            </div>
            <div>
                <label class="niveau-scolaire" for="niveau-input">Niveau scolaire :</label>
                <input class="niveau-scolaire1" type="text" id="niveau-input" name="niveau-input" required>
            </div>
            <div>
                <label class="tlphone1" for="tel-input">Téléphone :</label>
                <input class="tel" type="number" id="tel-input" name="tel-input" required>
            </div>
            <div>
                <label class="ville1" for="ville-input">Ville :</label>
                <input class="ville" type="text" id="ville-input" name="ville-input" required>
            </div>
            <div>
                <label class="code-postal1" for="code-input">Code postal :</label>
                <input class="code-postal" type="number" id="code-input" name="code-input" required>
            </div>
            <div>
                <label class="adresse1" for="adress-input">Adresse:</label>
                <input class="adresse" type="text" id="adress-input" name="adress-input" required>
            </div>
            <div>
                <label class="e-mail2" for="mail-input">E-mail :</label>
                <input class="email" type="text" id="mail-input" name="mail-input" required>
            </div>
            <div>
                <label class="competence" for="competence-input">Compétences :</label>
                <input class="compet" type="text" id="competence-input" name="competence-input" required>
            </div>
            <div>
                <label class="mot-de-passe" for="mdp-input">Mot de passe :</label>
                <input class="mdp" type="password" id="mdp-input" name="mdp-input" required>
            </div>
            <div>
                <label class="comptences1" for="confmdp-input">Confirmer votre mot de passe :</label>
                <input class="confmdp" type="password" id="confmdp-input" name="confmdp-input" required>
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
        </form>
        <div class="bouton1">
            <button class="sinscrire">S'inscrire</button>
        </div>
        <div>
            <div class="titre3">Diffusez vos offres avec nous</div>
            <img class="img-time" src="Time management Customizable Flat Illustrations _ Rafiki Style.png" />
            <div class="en1">
                Pilotez facilement les candidatures de vos étudiants
            </div>
            <img class="img-ag" src="Agreement Customizable Flat Illustrations _ Rafiki Style (1).png" />
            <div class="desc">
                Aidez vos étudiants à recevoir des candidatures qualifiées
            </div>
            <img class="img-read" src="Reading list Customizable Flat Illustrations _ Rafiki Style.png" />
            <div class="description">
                Facilitez la recherche d'entreprises pour les étudiants.
            </div>
        </div>
        <div>
            <div class="titre2">Des questions ?</div>
            <div class="bouton">
                <button class="contact">Contactez-nous</button>
            </div>
        </div>

        <footer>
        {include file="src/view/templates/footer.tpl"}
        </footer>
    </div>

</body>

</html>