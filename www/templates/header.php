<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exercice php</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./new_article.php">Ecrire un article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./liste_article.php">Liste des articles</a>
                        </li>
                        <?php
                        if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin"): ?>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Administrator</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="me-5">
                        <?php
                        if (isset($_SESSION["username"])) {
                            echo "Bienvenue " . ucfirst($_SESSION["username"]);
                        }
                        ?>
                    </div>
                    <form class="d-flex" role="search" action="./liste_resultat.php">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="criteria">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <?php if (isset($_SESSION["username"])): ?>
                            <a class="btn btn-outline-danger" style="margin-left:15px" href="./logout.php">Deconnexion</a>
                        <?php else: ?>
                            <a class="btn btn-outline-success" style="margin-left:15px" href="./connexion.php">Login</a>
                            <a class="btn btn-outline-primary" style="margin-left:15px" href="./register.php">Register</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </nav>
    </header>