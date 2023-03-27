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
</head>

<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>
     <div class="chercher-un-stage">
        <div class="nboffresdispo">{$offres|@count} offres disponibles</div>
        <button class="wish">Ma wishlist</button>
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
		
        </div>
        <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>