<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Détail de l'offre</title>
        <link href="style.css" rel="stylesheet" />
    </head>
 
    <body>
        <h1>Détails de l'offre</h1>
        <p><a href="index.php?action=offre">Retour à la liste des offres</a></p>

        <div class="news">
            	<p>
					<img src="<?= $offre[0]->lien_logo ?>">
                    <?=$offre[0]->nom ?> :
                    <?=$offre[0]->description_entreprise ?>
                    <br>
                    <?=$offre[0]->titre ?> / Durée :
                	<em> <?= $offre[0]->duree; ?></em>
                    <br>Adresse :
                    <?=$offre[0]->adresse_complete ?>
                    <br>Ville :
                    <?=$offre[0]->ville ?> Code postal :
                    <?=$offre[0]->code_postal ?>
                    <br>Description :
                    <?=$offre[0]->description_offre ?>
                    <br>Compétences requises :
                    <?=$offre[0]->competences ?>
                    <br>Rémunération attendue :
                    <?=$offre[0]->remuneration ?> €/h
                    <br>Nombre de places pour cette offre :
                    <?=$offre[0]->nombre_places ?>
            	</p>
        	</div>
    </body>
</html>