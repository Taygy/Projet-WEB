<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="dtails-offre">
        <div class="boorder">
           {include file="src/view/templates/header.tpl"}
           <form id="MyForm" action="index.php?action=detailoffre" method="post">
            <img class="capge" src="public/view/capgemini.png" />
            <b class="note">Note : </b>
            <div class="desc-entreprise">{$offre[0]->description_entreprise}</div>
            <div>
            <img class="support" src="contact1.png" />
            <select class="option" name="Option">
                <option value="supp"><a href="index.php?action=supprimeroffre&id={$offre[0]->id_offre}">Supprimer ?</a></option>
                <option value="mod"><a href="index.php?action=modifieroffre&id={$offre[0]->id_offre}">Modifier</a></option>
            </select>
            </div>
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
            </form>
        </div>

        <div class="accueil">
            <div class="support2"></div>
            <div class="autres">Voir les autres offres</div>
            <button class="btn-ret">Retour</button>
        </div>
        <p><a href="index.php?action=ajouteroffre&id={$entreprise[0]->id_entreprise}">Vous voulez ajouter une offre ?</a></p>
    </div>
    <!--footer-->
    {include file="src/view/templates/footer.tpl"}      
</body>
</html>