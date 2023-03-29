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
                <label for="Rechercher">Rechercher des offres :</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Rechercher">
        </form>
    </div>
    <div class="chercher-un-stage">
        <div class="nboffresdispo">{$soffres|@count} offres disponibles</div>
            <button class="wish">Ma wishlist</button>
			{foreach $soffres as $soffre}
					<div class="gigabox">
						<div class="box">
							<h4>{$soffre->nom}</h4>
							<img src="public\logo/{$soffre->logo}" class="cap">
							<div class="le_fameuxh1">{$soffre->titre}</div>
							<p>{$soffre->description_offre} pour une durée de : <em>{$soffre->duree}</em></p>
							<em class="det"><a class="ho" href="index.php?action=detailoffre&id={$soffre->id_offre}">Détails</a></em>  
						</div>
					</div>
			{/foreach}

		
	</div>
	<footer>
    	{include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>
