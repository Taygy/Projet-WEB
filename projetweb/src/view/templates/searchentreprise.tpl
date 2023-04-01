<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/blablabla.css" />
    <link rel="stylesheet" href="public/css/bouton.css" />
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
    <div class="chercher-un-stage">
        <div class="search-bar">
            <form action="index.php?action=entreprise" method="POST">
                    <label for="Rechercher">Rechercher des entreprises :</label>
                    <input type="text" id="search" name="search">
                    <input type="submit" value="Rechercher">
            </form>
        </div>
            {if $sentreprises|@count>0}
                <div class="nboffresdispo">{$sentreprises|@count} entreprises disponibles</div>
                    <button class="ajouter" > <a href="index.php?action=ajouterentreprise">Ajouter entreprise</a></button>
                    {foreach $sentreprises as $entreprise}
                        <div class="gigabox">
                            <div class="box">
                                <h4>Note : </h4>
                                <img src="public\logo/{$entreprise->logo}" class="cap">
                                <div class="le_fameuxh1">{$entreprise->nom}</div>
                                <p>{$entreprise->description_entreprise}</p>
                                <em class="det"><a class="ho" href="index.php?action=detailentreprise&id={$entreprise->id_entreprise}">Détails</a></em>
                            </div>
                        </div>
                    {/foreach}
                </div>
            {else}
                {include file="src/view/templates/aucunresultat.tpl"}
            {/if}
    </div>
	<footer>
    	{include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>
