

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="src\public\css\global.css" />
    <link rel="stylesheet" href="src\public\css\header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>


<body>
    <div class="dtails-offre">
        <div class="boorder">
           {include file="src/view/templates/header.tpl"}

            <img class="capge" src="capgemini.png" />
            <b class="note">Note : </b>
            <div class="desc-entreprise">{$offre[0]->description_entreprise}</div>

            <img class="support" src="contact1.png" />
            <select class="option" name="Option">
                <option value="supp">Supprimer</option>
                <option value="mod">Modifier</option>
            </select>
            <div class="titre-offre">{$offre[0]->titre}</div>
            <div class="dure-de-loffre">Durée de l’offre : {$offre[0]->duree}</div>
            <div class="adresse">Adresse :{$offre[0]->adresse_complete}</div>
            <div class="ville">Ville :{$offre[0]->ville}</div>
            <div class="code-postal">Code postal :{$offre[0]->code_postal}</div>
            <div class="rmunration">Rémunération :{$offre[0]->remuneration} €/h</div>
            <div class="nb-places">Nombre de places disponibles :{$offre[0]->nombre_places}</div>
            <div class="description-de-loffres">Description de l’offre :</div>
            <div class="description">{$offre[0]->description_offre}</div>
            <div class="postuler">
                <button class="btn-pos">Postuler</button>
            </div>
            <div class="whishlist">
                <button class="boutonsajout">Ajouter à la wishlist</button>
            </div>
            <div class="en-savoir-plus">
                <ul>
                    <a href="#">En savoir plus sur l’entreprise</a>
                </ul>
            </div>
        </div>

        <div class="accueil">
            <div class="support2"></div>
            <div class="autres">Voir les autres offres</div>
            <button class="btn-ret">Retour</button>
        </div>
    </div>
    <!--footer-->
    <div class="footer-dark">
    {include file="src/view/templates/footer.tpl"}
    
        
</body>

</html>