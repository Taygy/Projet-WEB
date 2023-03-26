<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\gigabox.css" />
    <link rel="stylesheet" href="public\css\contact.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <header>
        {include file='src/view/templates/header.tpl'}
    </header>
    <div class="gigabox">
        <div class="filtres">
                <input type="text" id="search" name="search" >

        </div>
    </div>
    <div class="gigabox">
{foreach $entreprises as $entreprise}
    <div class="box">
        <h4>{$entreprise->confiance}</h4>
        <img src="{$entreprise->logo}" class="cap">
        <h1>{$entreprise->nom}</h1>
        <p>{$entreprise->description_entreprise} </p>
        <em><a href="index.php?action=detailentreprise&id={$entreprise->id_entreprise}">Détails</a></em>
        </p>
    </div>
{/foreach}
        <div class="box" id="bas">
            <h1>Permettez au entreprises de<br>  vous découvrir</h1>
        </div>
    </div>
    <footer>
        {include file='src/view/templates/footer.tpl'}
    </footer>
</body>

</html>