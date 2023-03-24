<?php
if(isset($_POST['btn-ajouter'])){
    //connexion à la basee de donnée
    $con = mysqli_connect("localhost","root","","entreprises");
   //recuperation des donnees du formulaire 
   $titre = $_POST['titre'];
   $description = $_POST['description'];
   if(!empty($titre)&& !empty($description)){
    //vérifier si le produit existe
    $req1 = mysqli_query($con,"SELECT titre ,descrip FROM entreprise WHERE titre='$titre' AND descrip='$description'");
    if(mysqli_num_rows($req1) > 0) {
        //si le produit existe deja :
        $message = '<p style="color:red">Le produit existe déja</p>';
        }else{
            //sinon
            if(isset($_FILES['image'])){
                //si une image a été télécharger :
                $img_nom = $_FILES['image']['name']; // on récupere le nom de l'image
                $tmp_nom = $_FILES['image']['tmp_name'];//on définit un nom temporaire
                $time = time(); //on recupere l'heure actuel
                //on rename limage
                $nouveau_nom_img = $time.$img_nom;
                //on deplace limage dans le dossier image qu'on a creer
                $deplacer = move_uploaded_file($tmp_nom,"images/".$nouveau_nom_img);
                if($deplacer){
                    //si l'image a ete deplacer avec succes :
                    //on commence par inserer le titre , la description et le nom de l'image dans la bases de données
                    $req2 = mysqli_query($con,"INSERT INTO entreprise VALUES(NULL,'$titre','$description','$nouveau_nom_img')");
                    if($req2){
                        //si les donnes ont ete ajouter a la bdd avec succes 
                        $message = '<p style="color:green">Entreprise ajoutee avec succes!</p>';
                    }
                    else{
                        $message = '<p style="color:red">Entreprise existe deja!!!</p>';
                    }
                }

            }
        }
   }
   else{
    //si tous les champs ne sont pas remplie on a : 
    $message = '<p style="color:red">Veuillez remplir tous les champs:</p>';
   }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="styles.css">
    <title>Creer entreprise</title>
</head>

<body>
    <section class="input_add">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="message">
                <?php 
                if (isset($message)){
                    // si la variable message existe , on affiche le contenue de la variable
                    echo $message;
                }
                ?>
            </div>
            <label>Nom de l'entreprise</label>
            <input type="text" name="titre">
            <label>Description</label>
            <textarea name="description" cols="30" rows="10"></textarea>
            <label>Ajouter une image</label>
            <input type="file" name="image">
            <input type="submit" value="Ajouter" name="btn-ajouter">
            <a class="btn-liste-prod" href="resultat.php">Liste des entreprises</a>
        </form>
    </section>
</body>

</html>