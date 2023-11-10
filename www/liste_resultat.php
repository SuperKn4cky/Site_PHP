<?php
require("./templates/header.php");
require("./inc/db.php");
$sql = "SELECT * FROM `article` WHERE titre LIKE \"%" . $_GET['criteria'] . "%\" OR contenu LIKE \"%" . $_GET['criteria'] . "%\"; ";

$request = $pdo->query($sql);
$postsList = $request->fetchAll(PDO::FETCH_ASSOC);
if ($_GET['criteria'] == "") {
    $postsList = [];
}
?>
<div class="container">
    <?php
    if ($postsList != []):
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
            <?php
        }
    else:
        echo "<h2>Pas de résultat pour cette recherche</h2>";
    endif;
    ?>
</div>
<?php
require("./templates/footer.php");