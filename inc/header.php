<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/" class="<?= $title === "Accueil" ? "active" : ""; ?>">Accueil</a>
            </li>
            <li>
                <a href="/register.php" class="<?= $title === "Enregistrez-vous" ? "active" : ""; ?>">Enregistrez-vous</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h1><?= $title ?></h1>