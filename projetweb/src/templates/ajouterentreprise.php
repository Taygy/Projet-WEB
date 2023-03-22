<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ajouter une entreprise</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <H1>Ajoutez votre entreprise :</H1>
    <form id="MyForm" action="index.php?action=ajouterentreprise" method="post">
        <div>
            <label for="nom">Nom de l'entreprise :</label><br />
            <input type="text" id="nom" name="nom" required />
        </div>
        <div>
            <label for="mail">Email :</label><br />
            <input type="email" id="mail" name="mail" required />
        </div>
        <div>
            <label for="confiance">Confiance :</label><br />
            <input type="number" id="confiance" name="confiance" required />
        </div>
        <div>
            <label for="adresse_complete">Adresse :</label><br />
            <input type="text" id="adresse_complete" name="adresse_complete" required />
        </div>
        <div>
            <label for="code_postal">Code postal :</label><br />
            <input type="text" id="code_postal" name="code_postal" required />
        </div>
        <div>
            <label for="ville">Ville :</label><br />
            <input type="text" id="ville" name="ville" required />
        </div>

        <div>
            <label for="secteur">Secteur :</label><br />
            <select id="secteur" name="secteur" required>
                <option value="Informatique">Informatique</option>
                <option value="BTP">BTP</option>
                <option value="Généraliste">Généraliste</option>
                <option value="Electronique">Electronique</option>
                <option value="Electronique">Autre</option>
            </select>
        </div>
        <div>
            <label for="nombre_employes">Nombre d'employés :</label><br />
            <input type="texte" id="nombre_employes" name="nombre_employes" required />
        </div>
        <div>
            <label for="description_entreprise">Description de l'entreprise :</label><br />
            <textarea id="description_entreprise" name="description_entreprise" required></textarea>
        </div>
        <div>
            <label for="mot_de_passe">Mot de passe :</label><br />
            <input type="password" id="mot_de_passe" name="mot_de_passe" required />
        </div>
        <div>
            <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label><br />
            <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required />
        </div>
        <div>
            <label for="lien_logo">Lien du Logo de l'entreprise</label><br />
            <textarea id="lien_logo" name="lien_logo" required></textarea>
        </div>
        <div>
            <label for="accept_term">J'accepte les conditions d'utilisation et la politique de
                confidentialité</label><br />
            <input type="radio" id="accept_term" name="accept_term" value="1" />
        </div>
        <div>
            <label for="certify_info">Je certifie que toutes les informations entrées sont correctes</label><br />
            <input type="radio" id="certify_info" name="certify_info" value="1" />
        </div>
        <button type="submit">Envoyer</button>
        <button type="reset">Reset</button>
    </form>
</body>