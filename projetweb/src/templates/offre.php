<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>Offre de stage</title>
    	<link href="style.css" rel="stylesheet" />
	</head>

	<body>
    	<h1>Bienvenue sur notre site !</h1>
    	<p>Toutes les offres de stages : </p>

    	<?php
    	foreach ($offres as $offre) {
    	?>
        	<div class="news">
            	<p>
					<img src="<?= $offre->lien_logo ?>">
                	<?= $offre->titre; ?> / Durée :
                	<em> <?= $offre->duree; ?></em>
                    <br>
                    <?=$offre->description;?>
                    <br>
                	<em><a href="index.php?action=detailoffre&id=<?= urlencode($offre->id_offre) ?>">Détails</a></em>
            	</p>
        	</div>
    	<?php
    	} // The end of the posts loop.
    	?>
	</body>
</html>