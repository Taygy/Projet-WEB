<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="script" href="script.js"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>
<header>
    {include file='src/view/templates/header.tpl'}
</header>
<body>
    <div class="gigabox">
        <div class="filtres">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form action="index.php?action=offre" method="POST">
                    <label for="Rechercher">Rechercher des offres :</label>
                    <input type="text" id="search" name="search">
                </form>
        </div>
    </div>
    <div class="gigabox">
        <div class="box">
            {foreach $offres as $offre}
                <h4>{$offre->nom}</h4>
                <img src="{$offre->lien_logo}" class="cap">
                <h1>{$offre->titre}</h1>
                <p>{$offre->description_offre} pour une durée de : <em>{$offre->duree}</em></p>
                <em><a href="index.php?action=detailoffre&id={$offre->id_offre|urlencode}">Détails</a></em>
                </p>
                </div>
            {/foreach}
        </div>
    </div>
    {include file='src/view/templates/footer.tpl'}
</body>
</html>