<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\creeroffre.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>
    <br>
    <br>
    <br>
    <br>
    <div class="crer-offre">
        <div class="vector-parent1">
            <img class="cadre" src="contact1.png" />
            <h1 class="grandtitre">Créer votre offre</h1>
            <form id=MyForm action="index.php?action=ajouteroffre" method="post">
            <div>
                <label class="titre1" for="titre">Titre :</label>
                <input class="titre" type="text" id="titre" name="titre" required>
            </div>
            <div>
                <label class="durestage1" for="duree">Durée du stage :</label>
                <input class="durestage" type="text" id="duree" name="duree" required>
            </div>
            <div>
                <label class="competence1" for="competence">Compétence requises :</label>
                <input class="competence" type="text" id="competence" name="competence" required>
            </div>
            <div>
                <label class="nbplaces" for="competence">Nombre de places :</label>
                <input class="places" type="text" id="nombre_places" name="nombre_places" required>
            </div>
            <div>
                <label class="remuneration1" for="remuneration">Rémunération :</label>
                <input class="remuneration" type="text" id="remuneration" name="remuneration" required>
            </div>
            <div>
                <label class="description1" for="description_offre">Description de l offre :</label>
                <input class="description" type="text" id="description_offre" name="description_offre" required>
            </div>

                <div class="check">
                    Je cértifie que toutes les informations entrées sont correctes
                    <input type="radio" id="certify" name="certify" value="1">
                </div>
                <div class="pub">
                    <button class="btn-pub" type="submit">Publier</button>
                    
                </div>
            </form>
        </div>

    </div>
</div>

    <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>