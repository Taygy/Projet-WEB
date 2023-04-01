<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/blablabla.css" />
    <link rel="stylesheet" href="public/css/pagination.css" />
    <link rel="stylesheet" href="public/css/responsive.css" />
    <link rel="stylesheet" href="public/css/recherche.css" />
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
    <div class="search-bar">
        <form action="index.php?action=offre" method="POST">
                <label for="rechercher">Rechercher des offres :</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Rechercher">
        </form>
    </div>
    <div class="chercher-un-stage">
        {if $offres|@count>0}
            <div class="nboffresdispo">{$offres|@count} offres disponibles</div>
                {if isset($smarty.session.etudiant) && $smarty.session.etudiant}
                    <button class="wish"><a class="ho" href="index.php?action=mawishlist">Ma wishlist</a></button>
                {/if}
            {foreach $offres as $offre}
                    <div class="gigabox">
                        <div class="box">
                            <h4>{$offre->nom}</h4>
                            <img src="public\logo/{$offre->logo}" class="cap">
                            <div class="le_fameuxh1">{$offre->titre}</div>
                            <p>{$offre->description_offre} pour une durée de : <em>{$offre->duree}</em></p>
                            <em class="det"><a class="ho" href="index.php?action=detailoffre&id={$offre->id_offre}">Détails</a></em>  
                        </div>
                    </div>
            {/foreach}
            <ul class="pagination">
                {foreach item=page from=range(1, $totalPages)}
                    {if $page == $currentPage}
                        <li class="active">{$page}</li>
                    {else}
                        <li><a href="index.php?action=offre&page={$page}">{$page}</a></li>
                    {/if}
                {/foreach}
            </ul>
        {else}
            {include file="src/view/templates/aucunresultat.tpl"}
        {/if}
    </div>
    <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>