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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>
     <div class="chercher-un-stage">
        <div class="nboffresdispo">{$etudiants|@count} etudiants disponibles</div>
{foreach $etudiants as $etudiant}
        <div class="gigabox">
            <div class="box">
                
                <div class="le_fameuxh1">{$etudiant->nom}  {$etudiant->prenom}</div>
                <p>{$etudiant->centre} {$etudiant->promotion} 
                {$etudiant->mail} 
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


        </div>
		
        <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>