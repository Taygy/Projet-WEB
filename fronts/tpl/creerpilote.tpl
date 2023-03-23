<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="creerpilote.css" />
    <link rel="stylesheet" href="header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="crer-pilote">
        <header>
            <div class="header">
                <div class="navbar">
                    <div class="menu">
                        <div class="acc .valign-text-middle"></div>
                        <ul>
                            <li><a href="accueilprojet.html">Accueil</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="apropos1.html">A propos</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <button class="mon-compte">Mon compte</button>
                    <div class="image-1">
                        <img src="logoce.png" alt="Logo de CESI" id="my-image">
                    </div>
                </div>
            </div>
        </header>
        <div class="titre">Créer un compte pilote</div>
        <img class="support" src="contact1.png" />
        <form id="MyForm" action="creer_pilote" method="post">
            <div>
                <label class="prnom2" for="prenom-input">Prénom :</label>
                <input class="prenom" type="text" id="prenom-input" name="prenom-input" required>
            </div>
            <div>
                <label class="nom2" for="nom-input">Nom :</label>
                <input class="nom" type="text" id="nom-input" name="nom-input" required>
            </div>
            <div>
                <label class="e-mail3" for="email-input">E-mail :</label>
                <input class="e-mail" type="text" id="email-input" name="email-input" required>
            </div>
            <div>
                <label class="centreforma" for="centreformation-input">Centre de formation :</label>
                <input class="centre" type="text" id="centreformation-input" name="centreformation-input" required>
            </div>
            <div>
                <label class="adresse3" for="adress-input">Adresse :</label>
                <input class="adresse" type="text" id="adress-input" name="adress-input" required>
            </div>
            <div>
                <label class="ville3" for="ville-input">Ville :</label>
                <input class="ville" type="text" id="ville-input" name="ville-input" required>
            </div>
            <div>
                <label class="code-postal" for="postal-input">Code postal :</label>
                <input class="cdpos" type="text" id="postal-input" name="postal-input" required>
            </div>
            <div>
                <label class="promotions1" for="promotion">Les promotions gérées :</label>
                <select class="promotions" name="objet-1">
                    <option value="cpia1">CPIA1</option>
                    <option value="cpia2">CPIA2</option>
                    <option value="fisea3">Fise A3</option>
                    <option value="fisaa3">Fisa A3</option>
                    <option value="fisea4">Fise A4</option>
                    <option value="fisaa4">Fisa A4</option>
                    <option value="fisea5">Fise A5</option>
                    <option value="fisaa4">Fisa A5</option>
                </select>
            </div>
            <div>
                <label class="mot-de-passe" for="password-input">Mot de passe :</label>
                <input class="mdp1" type="password" id="password-input" name="password-input" required>
            </div>
            <div>
                <label class="confmdp" for="confpassword-input">Confirmez le mot de passe :</label>
                <input class="mdp" type="password" id="confpassword-input" name="confpassword-input" required>
            </div>
            <div class="texte">
                Je certifie que toutes les informations entrées sont correctes
                <input type="checkbox" id="certify" name="certify">
            </div>
        </form>
        <div class="bouton">
            <button class="sinscrire">S'inscrire</button>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container-footer">
                <div class="col-entreprise">
                    <h3>ENTREPRISE</h3>
                    <ul>
                        <li><a href="#">Trouver des stagiaires</a></li>
                        <li><a href="#">Créer votre offre</a></li>
                    </ul>
                </div>
                <div class="col-cesi">
                    <h3>Etudiant</h3>
                    <ul>
                        <li><a href="#">Chercher une offre</a></li>
                        <li><a href="#">Découvrir les entreprises</a></li>
                    </ul>
                </div>
                <div class="col-trouvez-nous">
                    <h3>Trouvez-nous sur</h3>
                    <img class="insta" src="instaa.png" />
                    <img class="twitter" src="twitter.png" />
                    <img class="fb" src="fb.png" />
                </div>
            </div>
            <img src="logoce.png" alt="Logo de CESI" class="my-image1">
            <p class="copyright">CESI © 2023</p>
        </footer>
    </div>
</body>

</html>