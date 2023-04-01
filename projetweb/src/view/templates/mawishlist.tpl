<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/blablabla.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>

<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>
    <div class="chercher-un-stage">
        {if $wishlists|@count>0} 
            <div class="nboffresdispo">Ma wishlist</div>
            {foreach $wishlists as $wishlist}
                    <div class="gigabox">
                        <div class="box">
                            <button class="option" ><a href="index.php?action=deletewishlist&id={$wishlist->id_offre}">Supprimer</a></button>
                            <h4>{$wishlist->nom}</h4>
                            <img src="public\logo/{$wishlist->logo}" class="cap">
                            <div class="le_fameuxh1">{$wishlist->titre}</div>
                            <p>{$wishlist->description_offre} pour une durée de : <em>{$wishlist->duree}</em></p>
                            <em><a class="ho" href="index.php?action=detailoffre&id={$wishlist->id_offre}">Détails</a></em>
                            </p>
                        </div>
                    </div>
            {/foreach}
        {else}
            {include file="src/view/templates/aucunresultat.tpl"}
        {/if}
    </div>
    <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>