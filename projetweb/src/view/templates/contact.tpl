<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>

<body>

    <div class="contacter">
        <header>
           {include file="src/view/templates/header.tpl"}
        </header>
        <form id="MyForm" action="" method="post">
            <div>
                <img class="contact-child" src="contact1.png" />
            </div>
            <div>
                <label class="e-mail4" for="email-input">E-mail :</label>
                <input class="e-mail" type="email" id="email-input" name="email-input" required>
            </div>
            <div>
                <label class="prnom3" for="prenom-input">Prénom :</label>
                <input class="prenom" type="text" id="prenom-input" name="prenom-input" required>
            </div>
            <div>
                <label class="nom3" for="nom-input">Nom :</label>
                <input class="nom" type="text" id="nom-input" name="nom-input" required>
            </div>
            <div>
                <label class="objet">Objet :</label>
                <select class="objet-1" name="objet-1" required>
                    <option value="probléme">Problème</option>
                    <option value="question">Question</option>
                    <option value="autre">Autres</option>
                </select>
            </div>
            <div>
                <label class="votre-message" for="message-input">Votre message</label>
                <textarea class="msg" id="message-input" name="message-input" required></textarea>
            </div>
            <div class="contactbtn">
                <button type="submit" class="contact-btn">Contacter</button>
            </div>
        </form>
        <div class="titre2">Nous contacter</div>
        <div class="media">Trouvez nous sur</div>
        <div class="texte">
            N'hésitez pas à nous contacter pour toute question ou demande
            d'information complémentaire. Nous sommes disponibles pour vous aider
            dans votre recherche de stage ou dans votre processus de recrutement.
        </div>
        <img class="instaa-1-icon11" src="public\logo/instaa.png" />
        <img class="twitter-1-icon11" src="public\logo/twitter.png" />
        <img class="fb-1-icon11" src="public\logo/fb.png" />
    </div>
    <!--footer-->
    <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>
