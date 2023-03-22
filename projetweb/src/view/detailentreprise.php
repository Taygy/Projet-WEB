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
                    <?=$entreprise[0]->description_entreprise ?>
                    <br>Mail :
                    <?=$entreprise[0]->mail ?>
                    <br>Confiance donnée :
                    <?=$entreprise[0]->confiance ?>
                    <br>Nombre d'employés :
                    <?=$entreprise[0]->nombre_employes ?>
            	</p>
                <form action="index.php?action=detailentreprise&id=<?= $identifier ?>" method="post">
                    <div>
                        <label for="commentaire">Commentaire</label><br />
                        <textarea id="commentaire" name="commentaire" ></textarea>
                    </div>
                    <div>
                        <label for="note">Note</label><br />
                        <input type="text" id="note" name="note"/>
                    </div>
                    <div>
                        <label for="id_membre">Id de l'utilisateur</label><br />
                        <input type="text" id="id_membre" name="id_membre"/>
                    </div> 
                    <div>
                        <input type="submit" />
                    </div>
                    </form>
                <?php $i=0 ?>
                <?php foreach ($commentaire as $commentaires) { ?>
                    <p><?=$commentaire[$i]->nomauteur." ".$commentaire[$i]->prenomauteur ?> pour l'entreprise : <?=$commentaire[$i]->nomentreprise?> avec la note de : <?=$commentaire[$i]->note?>/10<br>Commentaire : <?=$commentaire[$i]->commentaire?></p>
                    <?php $i=$i+1 ?>
                <?php } ?>
        	</div>
    </body>
</html>