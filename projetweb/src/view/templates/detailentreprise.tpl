<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/detailentre.css" />
    <link rel="stylesheet" href="public/css/bouton.css" />
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
            <div class="cadre">
                <img class="support" src="public\logo/contact1.png" />
                <button class="btn-ret2"><a href="index.php?action=modifierentreprise&id={$entreprise[0]->id_entreprise}">Modifier</a></button>
                <button class="supp3"><a href="index.php?action=supprimerentreprise&id={$entreprise[0]->id_entreprise}">Supprimer</a></button>
                <div class="monaco-digital">{$entreprise[0]->nom}</div>
                <div class="secteur">Secteur : {$entreprise[0]->secteur}</div>
                <div class="adresse">Adresse : </div>
                <div class="ville">Ville : </div>
                <div class="email">
                    Email : {$entreprise[0]->mail}
                </div>
                <div class="code-postal">Code postal : </div>
                <div class="nb_postes">
                    Nombre d’employés : {$entreprise[0]->nombre_employes}
                </div>
                <div class="description">
                    Description de l’entreprise : 
                </div>
                <div class="descrip-entre">
                    {$entreprise[0]->description_entreprise}
                </div>
                <button class="btn2">Voir les offres</button>
                <div class="voir_avis">
                    <ul>
                        <a href="#">Voir les avis sur cette entreprise</a>
                    </ul>
                </div>
                <b class="note">Note de l’entreprse : </b>
            </div>
            <div class="group-container">
                <div class="group">
                    <div class="support2"></div>
                    <div class="autres">Chercher d'autres entreprises</div>
                    <button class="btn-ret"><a href="index.php?action=entreprise">Retour</a></button>
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