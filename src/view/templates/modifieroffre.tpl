<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creeroffre.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="crer-offre">
       <header>
        {include file="src/view/templates/header.tpl"}
    </header>

        <div class="vector-parent1">
            <div>
                <img class="cadre" src="contact1.png" />
            </div>
            <div>
                <h1 class="grandtitre">Modifier votre offre</h1>
            </div>
            <form id="MyForm" action="modifier_offre" method="post">
                <div>
                    <label class="titre1" for="titre">Titre :</label>
                    <input class="titre" type="text" id="titre" name="titre" required>
                </div>
                <div>
                    <label class="durestage1" for="duree_stage">Durée du stage :</label>
                    <input class="durestage" type="text" id="duree_stage" name="duree_stage" required>
                </div>
                <div>
                    <label class="competence1" for="competences">Compétence requises :</label>
                    <input class="competence" type="text" id="competences" name="competences" required>
                </div>
                <div>
                    <label class="nvscolaire" for="niveau_scolaire">Niveau scolaire visé :</label>
                    <input class="scolaire" type="text" id="niveau_scolaire" name="niveau_scolaire" required>
                </div>
                <div>
                    <label class="nbplaces" for="nb_places">Nombre de places :</label>
                    <input class="places" type="text" id="nb_places" name="nb_places" required>
                </div>
                <div>
                    <label class="remuneration1" for="remuneration">Rémunération :</label>
                    <input class="remuneration" type="text" id="remuneration" name="remuneration" required>
                </div>
                <div>
                    <label class="description1" for="description">Description de l’offre :</label>
                    <input class="description" type="text" id="description" name="description" required>
                </div>
                <div class="check">
                    Je certifie que toutes les informations entrées sont correctes
                    <input type="checkbox" id="certify" name="certify" required>
                </div>
                <div class="pub">
                    <button class="btn-pub" type="submit">Modifier</button>
                </div>
            </form>
        </div>

    </div>
    <!--footer-->
    <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>