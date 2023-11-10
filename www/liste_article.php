<?php
require("./templates/header.php");
require("./inc/db.php");
$sql = "SELECT * FROM `article`;";
$request = $pdo->query($sql);
$postsList = $request->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <?php
    foreach ($postsList as $post) {
        ?>
        <ul class="list-group-item">
            <li class="list-group-item">
                <h2>
                    <?= $post['titre'] ?>
                </h2>
                <p>
                    <?= $post['contenu'] ?>
                </p>
                <p>Publié le :
                    <?= $post['date_publication'] ?> par
                    <?= ucfirst($post['auteur']) ?>
                </p>
            </li>
        </ul>
        <br>
        <?php
    }
    ?>
</div>
<?php
require("./templates/footer.php");