<main>
    <form class="m-5" action="#" method="post">
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="col">
                    <label for="autor" class="form-label">Auteur</label>
                    <input type="text" class="form-control" id="autor" name="autor">
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="form-label">Contenu</label>
                <textarea class="form-control" id="content" name="content" rows="7"></textarea>
            </div>
        </div>
        <label for="date" id="date" class="form-label"> Date de publication :
            <?php echo date("d/m/Y") ?>
        </label>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    // var_dump($_POST);
    $erreur = [];
    $message = [];
    // test titre
    if (isset($_POST['title']) && preg_match('/[a0-z9]+$/', $_POST['title'])) {
        array_push($message, 'ok pour le titre');
    } else {
        array_push($erreur, 'Le titre n\'est pas valide');
    }
    // test auteur
    if (isset($_POST['autor']) && preg_match('/[a0-z9]+$/', $_POST['autor'])) {
        array_push($message, 'ok pour l\'auteur');
    } else {
        array_push($erreur, 'L\'auteur n\'est pas valide');
    }
    // test contenu
    if (isset($_POST['content'])) {
        array_push($message, 'ok pour le contenu');
    } else {
        array_push($erreur, 'Le contenu n\'est pas valide');
    }

    if ($erreur == []) {
        require("./inc/db.php");

        $request = $pdo->prepare("INSERT INTO article (titre, contenu, date_publication, auteur) VALUES (?, ?, ?, ?);");
        $request->execute([$_POST['title'], $_POST['content'], date('Y/m/d'), $_POST['autor']]);
    }
    ?>

    <ul>
        <?php
        foreach ($message as $value) {
            echo "<li>" . $value . "</li>";
        }
        ?>
    </ul>
    <ul>
        <?php
        foreach ($erreur as $item) {
            echo "<li>" . $item . "</li>";
        }
        ?>
    </ul>
</main>