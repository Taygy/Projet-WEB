<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="styles.css">
    <titre>Document</titre>
</head>

<body>
    <div class="result">
        <div class="result-content">
            <a href="index.php">Ajouter une entreprise</a>
            <h3>Liste des entreprises</h3>
            <div class="liste-entreprises">
                <?php 
                //afficher tous les entreprises
                //connexion à la basee de donnée
                  $con = mysqli_connect("localhost","root","","entreprises");
                  $req3 = mysqli_query($con,"SELECT * FROM entreprise");
                  if(mysqli_num_rows($req3)==0){
                    //si aucune entreprise n'existe dans la bdd
                    echo "Aucune entreprise trouvé !!";
                  }
                  else{
                    //si oui
                    while($row = mysqli_fetch_assoc($req3)){
                        //afichage des informations
                        echo'
                        <div class="produit">
                            <div class="image-prod">
                               <img src="images/'.$row['image'].'" alt="">
                            </div>
                            <div class="text">
                               <strong>
                               <p class="titre">'.$row['titre'].'</p>
                            </strong>
                               <p class="description">'.$row['descrip'].'</p>
                            </div>
                        </div>';
                    }
                  }
                ?>
               
            </div>
        </div>
    </div>
</body>

</html>