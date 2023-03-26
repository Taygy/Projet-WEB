<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="connexion.css" />
    <link rel="stylesheet" href="header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="connexion">
        <header>
           {include file="src/view/templates/header.tpl"}
        </header>

        <h1>Login</h1>
        <div class="connexion1">Connexion</div>
        <form id="MyForm" method="post">
            <div class="vector-parent">
                <img class="support7" src="contact1.png" />
                <div>
                    <label class="e-mail1" for="email-input">E-mail :</label>
                    <input class="email" type="email" id="email-input" name="email" required>
                </div>
                <div>
                    <label class="mot-de-passe1" for="password-input">Mot de passe :</label>
                    <input class="mdp" type="password" id="password-input" name="password" required>
                </div>
            </div>
            <button class="connexion2" type="submit">Connexion</button>
        </form>
    </div>
    <!--footer-->
    <div class="footer-dark">
        <footer>
            {include file="src/view/templates/footer.tpl"}
        </footer>
</body>

</html>