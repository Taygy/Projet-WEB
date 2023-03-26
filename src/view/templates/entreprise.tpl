<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/avis.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
  </head>

  <body>
  <div class="main-content">
   <header>
	 {include file="src/view/templates/header.tpl"}
    </header>
    <div class="filtres">
        <input type="text" id="search" name="search" >
    <label class="dispo">
        XX offres disponibles
    </label>
    <form id="MyForm" action="index.php?action=voiroffre" method="post">
    {foreach $entreprises as $entreprise}
     <div class="gigabox">
        <div class="box">
            <img src="public\logo\images/<?= $entreprise->logo ?>">
            <h4>offre de stage</h4>
            <div class="sous-titre"><?=$entreprise->nom?></div>
            <div class="contenu">
                <?= $entreprise->description_entreprise; ?>
	        </div>
        </div>
        <em><a href="index.php?action=detailentreprise&id=<?= urlencode($entreprise->id_entreprise) ?>">Détails</a></em>

    </div>
		  {/foreach}
	<p><a href="index.php?action=ajouterentreprise">Vous voulez ajouter une entreprise ?</a></p>
	<p><a href="index.php?action=modifierentreprise">Vous voulez modifier une entreprise ?</a></p>
	</form>
  </div>
 
  <footer>
	{include file="src/view/templates/footer.tpl"}
    </footer>
</body>
</html>