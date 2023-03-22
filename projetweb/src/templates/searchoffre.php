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
		<form action="index.php?action=offre" method="POST">
			<label for="Rechercher">Rechercher des offres :</label>
			<input type="text" id="search" name="search">
			<input type="submit" value="Rechercher">
		</form>
    	<?php
    	foreach ($soffres as $soffre) {
    	?>
        	<div class="news">
            	<p>
					<img src="<?= $soffre->lien_logo ?>">
                	<?= $soffre->titre; ?> / Durée :
                	<em> <?= $soffre->duree; ?></em>
                    <br>
                    <?=$soffre->description_offre;?>
                    <br>
                	<em><a href="index.php?action=offre">Retour à toutes les offres</a></em>
            	</p>
        	</div>
    	<?php
    	} // The end of the posts loop.
    	?>
	</body>
</html>