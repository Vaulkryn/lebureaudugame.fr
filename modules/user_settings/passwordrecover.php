<?php
$successPassRecov = null;
$errorPassRecov = null;
include("../includes/bdd_init.php");
if (!empty($_GET['u'])) {
    $token = htmlspecialchars(base64_decode($_GET['u']));
    $check = $bdd->prepare('SELECT * FROM passwordrecover WHERE tokenUser = ?');
    $check->execute(array($token));
    $row = $check->rowCount();
    if ($row == 0) {
        echo "Lien non valide";
        die();
    }
}
if (!empty($_POST['mdp']) && !empty($_POST['mdp-repeat']) && !empty($_POST['token'])) {
    $password = htmlspecialchars($_POST['mdp']);
    $password_repeat = htmlspecialchars($_POST['mdp-repeat']);
    $token = htmlspecialchars($_POST['token']);
    $check = $bdd->prepare('SELECT * FROM users WHERE token = ?');
    $check->execute(array($token));
    $row = $check->rowCount();
    if ($row) {
        if ($password === $password_repeat) {
            $cost = ['cost' => 12];
            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
            $update = $bdd->prepare('UPDATE users SET mdpUser = ? WHERE token = ?');
            $update->execute(array($password, $token));
            $delete = $bdd->prepare('DELETE FROM passwordrecover WHERE tokenUser = ?');
            $delete->execute(array($token));
            $successPassRecov = "Le mot de passe a bien été modifié";
            header('refresh:2;url=http://localhost/lebureaudugame.fr/index.php');
        } else {
            $errorPassRecov = "Les mots de passes ne correspondent pas";
        }
    } else {
        $errorPassRecov = "Ce compte n'existe pas";
    }
} else {
    $errorPassRecov = "Merci de renseigner un mot de passe";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Le Bureau du Game</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/user_settings.css">
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/login.php"); ?>
    <?php include("../includes/usermenu.php"); ?>

    <section class="settings_wrapper paddWrappPasswordRecov">
        <div class="settings_title">Reinitialiser mon mot de passe</div>
        <div class="settings_container">

            <?php if ($successPassRecov) : ?>
                <div class="alertUserSettings success">
                    <?= $successPassRecov ?>
                </div>
            <?php endif ?>
            <?php if ($errorPassRecov) : ?>
                <div class="alertUserSettings error">
                    <?= $errorPassRecov ?>
                </div>
            <?php endif ?>

            <form method="post" action="">
                <input type="hidden" name="token" value="<?php echo base64_decode(htmlspecialchars($_GET['u'])); ?>" />
                <label><b>Mot de passe</b></label>
                <input type="password" name="mdp" autocomplete="off" required>
                <label><b>Confirmer le mot de passe</b></label>
                <input type="password" name="mdp-repeat" autocomplete="off" required>
                <button type="submit">envoyer</button>
            </form>
        </div>
        <div class="divider"></div>
    </section>

    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" src="../../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/user_interaction.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>