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
                    <br>
                    <?=$offre[0]->titre ?> / Durée :
                	<em> <?= $offre[0]->duree; ?></em>
                    <br>Description :
                    <?=$offre[0]->description ?>
                    <br>Compétences requises :
                    <?=$offre[0]->competence ?>
                    <br>Rémunération attendue :
                    <?=$offre[0]->remuneration ?>
                    <br>Nombre de places pour cette offre :
                    <?=$offre[0]->nombre_places ?>
            	</p>
        	</div>
    </body>
</html>