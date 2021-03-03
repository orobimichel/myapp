<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'app.css' ?>">
</head>
<body>

    <nav class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts">Les derniers articles</a>
        </li>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</body>
</html>
