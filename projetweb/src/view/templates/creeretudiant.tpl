<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creeretudiant.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>



<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>

    <h1>Signup</h1>

    <form action="index.php?action=creeretudiant" method="post" id="signup" novalidate>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
        </div>

        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button>Sign up</button>
    </form>
    <footer>
            {include file="src/view/templates/footer.tpl"}
    </footer>
</body>

</html>