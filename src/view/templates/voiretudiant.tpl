<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/offressssssssssss.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="chercher-un-stage">
        <header>
            {include file="src/view/templates/header.tpl"}
        </header>

        <div>
            <div class="nboffresdispo">XX entreprises disponibles</div>
            <div>
                <div class="rectangle"></div>
                <b class="entreprise1">Note : </b>
                <div class="contenu">
                    <div class="titre">Capgemini</div>
                    <div class="description">
                        Capgemini est une entreprise française de services
                        informatiques et de conseil en management. Elle est spécialisée
                        dans la transformation digitale, la gestion des données, le cloud
                        computing, la cybersécurité et d'autres domaines
                    </div>
                </div>
                <img class="image1" src="public\logo\fb.png" />
            </div>
            <div>
                <div class="encouragement"></div>
                <div class="texte">
                    Permettez aux entreprises de vous découvrir
                </div>
            </div>
        </div>
    </div>

    <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>