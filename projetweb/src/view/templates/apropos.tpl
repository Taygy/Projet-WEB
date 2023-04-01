<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/apropos.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>

<body>
    <div class="a-propos">
        <div class="hero-section">
            <div class="hero-left">
            
                <div class="qui-sommes-nous">Qui sommes-nous ?</div>
                <div class="nous-sommes-une">
                    Nous sommes une entreprise passionnée par l'avenir des étudiants et
                    des jeunes professionnels. Nous croyons que tout le monde devrait
                    avoir la possibilité de trouver un stage qui correspond à ses
                    aspirations et à ses compétences, et nous mettons tout en œuvre pour
                    aider à rendre cela possible. Notre plateforme intuitive et
                    conviviale relie les étudiants à des milliers d'offres de stage et
                    permet aux entreprises de trouver des stagiaires talentueux pour
                    leurs projets.
                </div>
                <img class="image-4-icon" src="public\logo\aproposimage1.png" />
            </div>
        </div>
        <div class="education">
            <div class="education-child"></div>
            <img class="right-icon" src="public\logo\aproposimage2.png" />
            <div class="left">
                <b class="plus-sur-nous">Plus sur nous</b>
                <div class="notre-mission">Notre mission</div>
                <img class="side-line-icon" src="public\logo\aproposimage3.png" />
                <div class="faciliter-la-recherche">
                    Faciliter la recherche de stage
                </div>
                <div class="notre-plateforme-vise">
                    Notre plateforme vise à simplifier et à faciliter la recherche de
                    stage pour les étudiants, en mettant à leur disposition une base de
                    données complète d'offres de stage et en leur proposant des outils
                    pour affiner leur recherche selon leurs critères.
                </div>
                <div class="simplifier-le-processus">
                    Simplifier le processus de recrutement pour les entreprises
                </div>
                <div class="notre-plateforme-facilite">
                    Notre plateforme facilite également le processus de recrutement pour
                    les entreprises en leur permettant de publier facilement des offres
                    de stage et de trouver les candidats qui correspondent le mieux à
                    leurs besoins. Grâce à notre système de filtrage, les entreprises
                    peuvent rapidement identifier les profils qui répondent à leurs
                    critères et ainsi gagner du temps dans leur processus de sélection.
                </div>
            </div>
        </div>
        <header>
                {include file="src/view/templates/header.tpl"}
        </header>
        <div class="skills">
            <div class="left1">
                <div class="envie-den-savoir">Envie d’en savoir plus ?</div>
            </div>
        </div>
        <div class="contact-btn">
            <button class="contact-btn-child"><a href="index.php?action=contact">Contactez-nous</a></button>
        </div>
    </div>
    <!--footer-->
     <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>
