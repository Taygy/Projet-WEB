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
        <div class="nboffresdispo">{$pilotes|@count} pilotes disponibles</div>
{foreach $pilotes as $pilote}
        <div class="gigabox">
            <div class="box">
                <img src="public\logo/{$pilote->logo}" class="cap">
                <div class="le_fameuxh1">{$pilote->nom}  {$pilote->prenom}</div>
                <p>{$pilote->centre} {$pilote->promotion} 
                {$pilote->mail} 
                </p>
            </div>
        </div>
{/foreach}
		
        <footer>
    {include file="src/view/templates/footer.tpl"}
    </footer>
        </div>
</body>

</html>