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
    
     <div class="gigabox">
                <div class="box">
                    <img class="cap" src="cap.png" alt="Logo Offre de stage" />
                    <h4>offre de stage</h4>
                    <div class="sous-titre">Developpeur</div>
                    <p class="contenu">
                        Nous recherchons un développeur Full-Stack pour rejoindre .notre équipe de développement et
                        travailler sur notre plateforme de e-commerce.
                    </p>
                </div>
                <div class="gigabox">
                    <div class="box">
                        <img class="cap" src="cap.png" alt="Logo Offre de stage" />
                        <h4>offre de stage</h4>
                        <div class="sous-titre">Développeur Full-Stack</div>
                        <p>
                            Nous recherchons un développeur Full-Stack pour rejoindre .notre équipe de développement et
                            travailler sur notre plateforme de e-commerce.
                        </p>
                    </div>

                </div>
            </div>
  </div>
  <footer>
        {include file="src/view/templates/footer.tpl"}
    </footer>
</body>
</html>

