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
        <form action="index.php?action=etudiant" method="POST">
                <label for="Rechercher">Rechercher des etudiants :</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Rechercher">
        </form>
    </div>
    <div class="chercher-un-stage">
        {if $setudiants|@count>0}
            <div class="nboffresdispo">{$setudiants|@count} etudiants disponibles</div>
            {foreach $setudiants as $etudiant}
                    <div class="gigabox">
                        <div class="box">
                            
                            <div class="le_fameuxh1">{$etudiant->nom}  {$etudiant->prenom}</div>
                            <p>{$etudiant->centre} {$etudiant->promotion} 
                            {$etudiant->mail} 
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
