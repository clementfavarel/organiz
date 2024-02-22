<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription | Organiz</title>
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>

<body>
    <div class="card">
        <h1 class="title">Inscription</h1>
        <form action="index.php?page=register" method="post">
            <div class="input-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" />
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="input-group">
                <label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" />
            </div>
            <div class="input-group">
                <label for="pwd_confirm">Confirmez le mot de passe</label>
                <input type="password" name="pwd_confirm" id="pwd_confirm" />
            </div>
            <input type="submit" class="auth-btn" value="Inscription" />
        </form>
        <p class="small">
            Vous avez un compte ?<br />
            <a href="index.php?page=login" class="link">Connectez-vous</a>
        </p>
    </div>
</body>

</html>