<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Offre de stage</title>
	<link href="style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<h1>Bienvenue sur notre site !</h1>
	<p>Toutes les entreprises :</p>

	<?php
	foreach ($entreprises as $entreprise) {
	?>
		<div class="news">
			<img src="<?= $entreprise->logo ?>">
			<p>
				<?= $entreprise->nom ?> / Confiance :
				<?= $entreprise->confiance; ?>
				<br>
				<?= $entreprise->description_entreprise; ?>
				<br>
				<em><a href="index.php?action=detailentreprise&id=<?= urlencode($entreprise->id_entreprise) ?>">Détails</a></em>
			</p>
		</div>
	<?php
	} // The end of the posts loop.
	?>
	<p><a href="index.php?action=ajouterentreprise">Vous voulez ajouter une entreprise ?</a></p>
	<p><a href="index.php?action=modifierentreprise">Vous voulez modifier une entreprise ?</a></p>
	<p><a href="index.php?action=supprimerentreprise">Vous voulez supprimer une entreprise ?</a></p>
</body>

</html>