<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | Organiz</title>
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>

<body>
    <div class="card">
        <h1 class="title">Connexion</h1>
        <form action="index.php?page=login" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="input-group">
                <label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" />
            </div>
            <input type="submit" class="auth-btn" value="Connexion" />
        </form>
        <p class="small">
            Pas encore de compte ?<br />
            <a href="index.php?page=register" class="link">Inscrivez-vous</a>
        </p>
    </div>
</body>

</html>