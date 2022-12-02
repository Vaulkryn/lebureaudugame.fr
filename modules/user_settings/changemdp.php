<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
}
$successPasswd = null;
$errorPasswd = null;
if (!empty($_POST['currentpasswd']) && !empty($_POST['newpasswd']) && !empty($_POST['newpasswd-repeat'])) {
    include("../includes/bdd_init.php");
    $currentpasswd = htmlspecialchars($_POST['currentpasswd']);
    $newpasswd = htmlspecialchars($_POST['newpasswd']);
    $newpasswd_repeat = htmlspecialchars($_POST['newpasswd-repeat']);
    $checkpasswd = $bdd->prepare('SELECT passwd FROM users WHERE ID = :ID');
    $checkpasswd->execute(array(
        ':ID' => $_SESSION['ID']
    ));
    $datapasswd = $checkpasswd->fetch();
    if (password_verify($currentpasswd, $datapasswd['passwd'])) {
        if ($newpasswd == $newpasswd_repeat) {
            $cost = ['cost' => 12];
            $newpasswd = password_hash($newpasswd, PASSWORD_BCRYPT, $cost);
            $update = $bdd->prepare('UPDATE users SET passwd = :passwd WHERE ID = :ID');
            $update->execute(array(
                'passwd' => $newpasswd,
                'ID' => $_SESSION['ID']
            ));
            $successPasswd = "Le mot de passe a été changé avec succès";
        } else {
            $errorPasswd = "Les mots de passe ne correspondent pas";
        }
    } else {
        $errorPasswd = "Le mot de passe actuel est incorrect";
    }
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
    <?php
    include("../includes/header.php");
    include("../includes/login.php");
    include("../includes/usermenu.php");
    ?>

    <section class="settings_wrapper paddWrappPasswordChnge">
        <div class="settings_title">Changer de mot de passe</div>
        <div class="settings_container">

            <form method="post" action="">

                <?php if ($successPasswd) : ?>
                    <div class="alertUserSettings success">
                        <?= $successPasswd ?>
                    </div>
                <?php endif ?>

                <?php if ($errorPasswd) : ?>
                    <div class="alertUserSettings error">
                        <?= $errorPasswd ?>
                    </div>
                <?php endif ?>

                <label><b>Mot de passe actuel</b></label>
                <input type="password" name="currentpasswd" required>

                <label><b>Nouveau mot de passe</b></label>
                <input type="password" name="newpasswd" required>

                <label><b>Confirmer le nouveau mot de passe</b></label>
                <input type="password" name="newpasswd-repeat" required>

                <button type="submit">sauvegarder</button>

            </form>
        </div>
        <div class="divider bottom"></div>
    </section>

    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" src="../../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/user_contents.settings.js"></script>
    <script type="text/javascript" src="../../scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>