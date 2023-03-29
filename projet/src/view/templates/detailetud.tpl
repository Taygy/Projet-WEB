<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/detailentre.css" />
    <link rel="stylesheet" href="public/css/detailetudiant.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>

<body>
    <div class="dtails-dune-entreprise">
        <div class="container">
            <header>
                {include file="src/view/templates/header.tpl"}
            </header>

            <img class="cadres2" src="public\logo/contact1.png" />
            <select class="select" name="Option">
                <option value="supp">Supprimer</option>
                <option value="mod">Modifier</option>
            </select>
            <div class="secteur2">Pilote : {$etudiant[0]->id_membre}</div>
            <div class="adresse2">Adresse : {$etudiant[0]->adresse_complete}</div>
            <div class="ville-nice2">Ville : {$etudiant[0]->ville}</div>
            <div class="e-mail2">
                e-mail : {$etudiant[0]->mail} 
            </div>
            <div class="niveau-scolaire3">Centre : {$etudiant[0]->centre}</div>
            <div class="code-postal2">Code postal : {$etudiant[0]->code_postal}</div>
            <div class="comptences2">Compétences : {$etudiant[0]->competence} </div>
            <div class="contact-btcontainer">
                <button class="contact-btn2">Contacter</button>
            </div>
            <div class="fille">{$etudiant[0]->nom} {$etudiant[0]->prenom}</div>
            
            
        </div>
        <div class="group-container">
            <div class="group">
                <div class="support2"></div>
                <div class="autres">Chercher d'autres profils</div>
                <button class="btn-ret">Retour</button>
            </div>
        </div>
    </div>
    </div>

    </div>
    <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>