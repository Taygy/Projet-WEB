<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>

    <div class="contacter">
        <header>
            <div class="header">
                <div class="navbar">
                    <div class="menu">
                        <div class="acc .valign-text-middle"></div>
                        <ul>
                            <li><a href="accueilprojet.html"">Accueil</a></li>
                            <li><a href=" #">Services</a></li>
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
        <form id="MyForm" action="contacter" method="post">
            <div>
                <img class="contact-child" src="contact1.png" />
            </div>
            <div>
                <label class="e-mail4" for="email-input">E-mail :</label>
                <input class="e-mail" type="email" id="email-input" name="email-input" required>
            </div>
            <div>
                <label class="prnom3" for="prenom-input">Prénom :</label>
                <input class="prenom" type="text" id="prenom-input" name="prenom-input" required>
            </div>
            <div>
                <label class="nom3" for="nom-input">Nom :</label>
                <input class="nom" type="text" id="nom-input" name="nom-input" required>
            </div>
            <div>
                <label class="objet">Objet :</label>
                <select class="objet-1" name="objet-1" required>
                    <option value="probléme">Probléme</option>
                    <option value="question">Question</option>
                    <option value="autre">Autres</option>
                </select>
            </div>
            <div>
                <label class="votre-message" for="message-input">Votre message</label>
                <textarea class="msg" id="message-input" name="message-input" required></textarea>
            </div>
            <div class="contactbtn">
                <button type="submit" class="contact-btn">Contacter</button>
            </div>
        </form>
        <div class="titre2">Nous contacter</div>
        <div class="media">Trouvez nous sur</div>
        <div class="texte">
            N'hésitez pas à nous contacter pour toute question ou demande
            d'information complémentaire. Nous sommes disponibles pour vous aider
            dans votre recherche de stage ou dans votre processus de recrutement.
        </div>
        <img class="instaa-1-icon11" src="instaa.png" />
        <img class="twitter-1-icon11" src="twitter.png" />
        <img class="fb-1-icon11" src="fb.png" />
    </div>
    <!--footer-->
    <div class="footer-dark">
        <footer>
            <div class="container-footer">
                <div class="col-etudiant">
                    <h3>ETUDIANT</h3>
                    <ul>
                        <li><a href="#">Chercher une offre</a></li>
                        <li><a href="#">Décourvrir les entreprises</a></li>
                    </ul>
                </div>
                <div class="col-entreprise">
                    <h3>ENTREPRISE</h3>
                    <ul>
                        <li><a href="#">Trouver des stagiaires</a></li>
                        <li><a href="#">Créer votre offre</a></li>
                    </ul>
                </div>
                <div class="col-cesi">
                    <h3>CESI</h3>
                    <ul>
                        <li><a href="#">Qui sommes nous ?</a></li>
                        <li><a href="#">Avis sur les entreprises</a></li>
                        <li><a href="#">Contactez nous</a></li>
                    </ul>
                </div>
            </div>
            <img src="logoce.png" alt="Logo de CESI" id="my-image">
            <p class="copyright">CESI © 2023</p>
        </footer>
</body>

</html>