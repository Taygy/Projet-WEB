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
            <img src="{$entreprise[0]->logo}">
            <br>
            {$entreprise[0]->nom}
            <br> Secteur : 
            {$entreprise[0]->secteur}
            <br>Description :
            {$entreprise[0]->description_entreprise}
            <br>Mail :
            {$entreprise[0]->mail}
            <br>Confiance donnée :
            {$entreprise[0]->confiance}
            <br>Nombre d'employés :
            {$entreprise[0]->nombre_employes}
        </p>
        </form>
        <p><a href="index.php?action=ajouteroffre&id={$entreprise[0]->id_entreprise}">Vous voulez ajouter une offre ?</a></p>
        <p><a href="index.php?action=modifierentreprise&id={$entreprise[0]->id_entreprise}">Vous voulez modifiez cette entreprise ?</a></p>
        <p><a href="index.php?action=deleteentreprise&id={$entreprise[0]->id_entreprise}">Supprimer cette entreprise ?</a></p>
        
    </div>
</body>

</html>