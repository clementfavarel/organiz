<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $errorMessage ?> | Organiz</title>
</head>

<body>
    <div class="card">
        <h1><?= $errorCode ?></h1>
        <h3><?= $errorMessage ?></h1>
            <p class="small">
                <a href="<?= $errorLink ?>" class="link">Retour à l'inscription</a>
            </p>
    </div>
</body>

</html>