<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <h1>Signup</h1>

    <form action="routeur.php?action=creeretudiant" method="post" id="signup" novalidate>
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

</body>

</html>