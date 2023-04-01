<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/blablabla.css" />
    <link rel="stylesheet" href="public/css/recherche.css" />
    <link rel="stylesheet" href="public/css/pagination.css" />
    <link rel="stylesheet" href="public/css/responsive.css" />
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
        <form action="index.php?action=pilote" method="POST">
                <label for="Rechercher">Rechercher des pilotes :</label>
                <input type="text" id="search" name="search">
                <input type="submit" value="Rechercher">
        </form>
    </div>
     <div class="chercher-un-stage">
        <div class="nboffresdispo">{$pilotes|@count} pilotes disponibles</div>
{foreach $pilotes as $pilote}
        <div class="gigabox">
            <div class="box">
                <div class="le_fameuxh1">{$pilote->nom}  {$pilote->prenom}</div>
                <p>{$pilote->centre} {$pilote->promotion} 
                {$pilote->mail} 
                </p>
            </div>
        </div>
{/foreach}
<ul class="pagination">
    {foreach item=page from=range(1, $totalPages)}
        {if $page == $currentPage}
            <li class="active">{$page}</li>
        {else}
            <li><a href="index.php?action=etudiant&page={$page}">{$page}</a></li>
        {/if}
    {/foreach}
</ul>
		
        <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
        </div>
</body>

</html>