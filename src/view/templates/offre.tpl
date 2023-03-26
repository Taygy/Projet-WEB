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

        <div class="filtres">
            <input type="text" class="rechercher" name="search">
            <div>
                <select class="niveau-scholaire" name="niv">
                    <option value="bac">Bac</option>
                    <option value="bac+1">Bac+1</option>
                    <option value="bac+2">Bac+2</option>
                    <option value="bac+3">BAc+3</option>
                </select>
            </div>
            <div>
                <select class="entreprisee" name="entreprise">
                    <option value="it">IT</option>
                    <option value="gene">Généraliste</option>
                    <option value="btp">BTP</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <div>
                <select class="localisation" name="loc">
                    <option value="nice">Nice</option>
                    <option value="cannes">Cannes</option>
                    <option value="cagnes-sur-mer">Cagnes sur mer</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <div>
                <select class="competence" name="comp">
                    <option value="excel">Excel</option>
                    <option value="langues">Langues</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <div>
                <select class="secteur" name="sec">
                    <option value="autres">Autres</option>
                </select>
            </div>
        </div>
        <div class="nboffresdispo">XX offres disponibles</div>
        {foreach $offres as $offre}
        <div>
            <div class="rectangle"></div>
            <b class="entreprise1">$entreprise[0]->nom</b>
            <div class="contenu">
                <div class="titre">$offre[0]->titre</div>
                <div class="description">
                   $offre[0]->description_offre
                </div>
            </div>
            <img class="image1" src="public\logo\images/$entreprise[0]->logo " />
        </div>
        {/foreach}
        <div>
            <div class="encouragement"></div>
            <div class="texte">
                Permettez aux entreprises de vous découvrir
            </div>
        </div>
    </div>

   <footer>
	{include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>