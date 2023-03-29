<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
    <link rel="stylesheet" href="public\css\detailoffre.css" />
    <link rel="stylesheet" href="public/ajaxCodePostal.js" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>

<body>
    <div class="dtails-offre">
        <div class="boorder">
         <header>
        {include file="src/view/templates/header.tpl"}
        </header>
           <form id="MyForm" action="index.php?action=detailoffre" method="post">
            <img class="capge" src="public\logo/{$offre[0]->logo}" />
            <b class="note">Note : </b>
            <div class="desc-entreprise">
                {$offre[0]->description_entreprise}
            </div>
            <div>
            <img class="support" src="public\logo/contact1.png" />
            <div>
            <button class="option" > 
            <a href="index.php?action=supprimeroffre&id={$offre[0]->id_offre}">Supprimer</a>
            <button class="modif"> 
            <a href="index.php?action=modifieroffre&id={$offre[0]->id_offre}">Modifier</a>
            </div>
            </div>
            <div class="titre-offre">{$offre[0]->titre}</div>
            
            <div class="dure-de-loffre">Durée de l’offre : {$offre[0]->duree}</div>
            <div class="date">Email de l'entreprise : {$offre[0]->mail} </div>
            <div class="adresse">Adresse :{$offre[0]->adresse_complete}</div>
            <div class="ville">Ville :{$offre[0]->ville}</div>
            <div class="code-postal">Code postal :{$offre[0]->code_postal}</div>
            <div class="rmunration">Rémunération :{$offre[0]->remuneration} €/h</div>
            <div class="nb-places">Nombre de places disponibles :{$offre[0]->nombre_places}</div>
            <div class="description-de-loffres">Description de l’offre :</div>
            <div class="description">{$offre[0]->description_offre}</div>
            <div class="postuler">
                <button class="btn-pos"> <a href="#"> Postuler
            </div>
            <div class="whishlist">
                <button class="boutonsajout"> <a href="index.php?action=ajouterwishlist&id={$offre[0]->id_offre}">Ajouter à la wishlist
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
            <button class="btn-ret"> <a href="index.php?action=offre">Retour</a>
        </div>
        
    </div>
    <!--footer-->
    <footer>
    {include file="src/view/templates/footer.tpl"}  
    </footer>    
</body>
</html>