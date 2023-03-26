<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Détail de l'entreprise</title>
        <link href="style.css" rel="stylesheet" />
    </head>
 
    <body>
        <h1>Détails de l'entreprise</h1>
        <p><a href="index.php?action=entreprise">Retour à la liste des entreprises</a></p>

        <div class="news">
            	<p>
					<img src="<?= $entreprise[0]->lien_logo ?>">
                    <br>
                    <?=$entreprise[0]->nom ?> / Secteur :
                	<em> <?= $entreprise[0]->secteur; ?></em>
                    <br>Description :
                    <?=$entreprise[0]->description ?>
                    <br>Mail :
                    <?=$entreprise[0]->mail ?>
                    <br>Confiance donnée :
                    <?=$entreprise[0]->confiance ?>
                    <br>Nombre d'employés :
                    <?=$entreprise[0]->nombre_employes ?>
            	</p>
        	</div>
    </body>
</html>