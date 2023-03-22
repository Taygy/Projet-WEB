<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="creer-entreprise.css" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="crer-une-entreprise">
        {include file="header.tpl"}

        <div class="titre">ajouter une entreprise</div>

        <div class="rectangle-container">
            <div class="sous-titre">
                Créer des offres d'emploi en quelques clics grâce à notre plateforme
            </div>
            <div class="sous-titre2">
                Gagnez du temps et de l'efficacité dans la création et la diffusion de
                vos offres d'emploi grâce à notre plateforme intuitive. En quelques
                clics seulement, vous pouvez créer une offre complète avec toutes les
                informations nécessaires, et la diffuser simultanément sur notre
                réseau de partenaires écoles et universités.
            </div>

            <img class="support" src="contact1.png" />
            <div class="vous-cherchez">
                Vous cherchez à simplifier le recrutement de stagiaires, d'alternants
                ou de jeunes diplômés pour votre entreprise ? Découvrez nos outils
                pour publier vos offres facilement.
            </div>

            <label class="nom-de-lentreprise" for="text-input">Nom de l’entreprise :</label>
            <input class="noment" type="text" id="text-input" name="text-input">

            <label class="email1" for="text-input">Email :</label>
            <input class="email" type="text" id="text-input" name="text-input">

            <label class="telephone" for="text-input">Téléphone :</label>
            <input class="tel" type="text" id="text-input" name="text-input">

            <label class="confiance" for="text-input">Confiance :</label>
            <input class="conf" type="text" id="text-input" name="text-input">

            <label class="adresse" for="text-input">Adresse :</label>
            <input class="adres" type="text" id="text-input" name="text-input">

            <label class="ville" for="text-input">Ville :</label>
            <input class="vill" type="text" id="text-input" name="text-input">

            <label class="code-postal" for="text-input">Code postal :</label>
            <input class="code" type="text" id="text-input" name="text-input">

            <label class="secteur" for="text-input">Secteur :</label>
            <input class="sec" type="text" id="text-input" name="text-input">

            <label class="taille-de-lentreprise" for="text-input">Taille de l’entreprise :</label>
            <input class="taille" type="text" id="text-input" name="text-input">

            <label class="descriptionentre" for="text-input">Description de l’entreprise :</label>
            <input class="description" type="text" id="text-input" name="text-input">

            <label class="mdp" for="text-input">Mot de passe :</label>
            <input class="mdpp" type="text" id="text-input" name="text-input">

            <label class="confirmezmdp" for="text-input">Confirmez le mot de passe :</label>
            <input class="cmdpp" type="text" id="text-input" name="text-input">

            <button class="create-btn">Créer</button>

            <div class="check">
                J’accepte les conditions d’utilisation et la politique de
                confidentialité
                <input type="checkbox" id="certify" name="certify">
            </div>
            <div class="check2">
                Je cértifie que toutes les informations entrées sont correctes
                <input type="checkbox" id="certify" name="certify">
            </div>
        </div>

        <div class="support-image"></div>
        <div class="sous-titre3">Diffusez vos offres avec nous</div>
        <img class="image-reading" src="Reading list Customizable Flat Illustrations _ Rafiki Style.png" />
        <img class="image-agreement" src="Agreement Customizable Flat Illustrations _ Rafiki Style (1).png" />
        <img class="image-management" src="Time management Customizable Flat Illustrations _ Rafiki Style.png" />
        <div class="texte-1">
            Pilotez facilement les recrutements
        </div>
        <div class="texte-2">
            Aidez les entreprises à trouver des candidats qualifiés.
        </div>
        <div class="texte-3">
            Multi-diffusez les offres d'emploi de différentes entreprises.
        </div>

        <div class="questions">Des questions ?</div>
        <div class="contact-btn19">
            <button class="contact-btn">Contactez-nous</button>
        </div>
    </div>

    <footer>
        <div class="support-footer"></div>
        <img class="image-footer" src="logoce.png" />
        <div class="texte-4">
            *Les informations recueillie font l’objet d’un traitement informatique
            de notre part afin de nous permettre de répondre à vos demandes, et
            éventuellement de vous proposer nos services qui peuvent vous
            intéresser. Vous bénéficiez d’un droit d’accès, de rectification,
            d’effacement et de portabilité aux informations vous concernantque vous
            pouvez exercer conformément aux modalités décrites dans notre politique
            de confidentialité. Vous pouvez également, pour des motifs légitimes,
            vous opposer au traitement des données vous concernant. Pour toute
            information supplémentaire, vous pouvez nous contacter.*
        </div>
    </footer>
</body>

</html>