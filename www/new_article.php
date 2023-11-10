<?php
require("./templates/header.php");
if ($_SESSION["role"] == "admin"):
    require("./templates/new_article.php");
else:
    header("Location: ./index.php");
endif;
require("./templates/footer.php");
?>