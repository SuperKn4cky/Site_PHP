<?php
if (isset($_SESSION["username"])) {
    header("Location: index.php");
}
?>
<main>
    <form class="m-5" action="#" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
    require("./inc/db.php");
    $request = $pdo->prepare("SELECT * FROM `utilisateur` WHERE `email`= ?;");
    $request->execute([$_POST['email']]);
    $user = $request->fetch(PDO::FETCH_ASSOC);
    if ($user == false) {
        echo "L'utilisateur ou le mot de passe est invalide";
    } else {
        if ($user["password"] == hash("sha512", $_POST["password"])) {
            echo "vous êtes connecté";
            $_SESSION['username'] = $user["firstname"];
            $_SESSION['role'] = $user["role"];
            header("Location: index.php");
        } else {
            echo "L'utilisateur ou le mot de passe est invalide";
        }
    }

}
?>