<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
}
$successPseudo = null;
$errorPseudo = null;
if (!empty($_POST['currentpseudo']) && !empty($_POST['newpseudo']) && !empty($_POST['newpseudo_repeat'])) {
    include("../includes/bdd_init.php");
    $currentpseudo = htmlspecialchars($_POST['currentpseudo']);
    $newpseudo = htmlspecialchars($_POST['newpseudo']);
    $newpseudo_repeat = htmlspecialchars($_POST['newpseudo_repeat']);
    $currentpseudo = strtolower($currentpseudo);
    $newpseudo = strtolower($newpseudo);
    $newpseudo_repeat = strtolower($newpseudo_repeat);
    $queryPseudo = $bdd->prepare('SELECT email, pseudo, passwd FROM users WHERE pseudo = ?');
    $queryPseudo->execute(array($newpseudo));
    $rowPseudo = $queryPseudo->rowCount();
    $checkpseudo = $bdd->prepare('SELECT pseudo FROM users WHERE ID = :ID');
    $checkpseudo->execute(array(
        ':ID' => $_SESSION['ID']
    ));
    $datapseudo = $checkpseudo->fetch();
    if ($rowPseudo == 0) {
        if ($currentpseudo == $datapseudo['pseudo']) {
            if ($newpseudo == $newpseudo_repeat) {
                $update = $bdd->prepare('UPDATE users SET pseudo = :pseudo WHERE ID = :ID');
                $update->execute(array(
                    'pseudo' => $newpseudo,
                    'ID' => $_SESSION['ID']
                ));
                $successPseudo = "Le pseudo a été changé avec succès";
            } else {
                $errorPseudo = "Les pseudo ne correspondent pas";
            }
        } else {
            $errorPseudo = "Le pseudo n'a pas changé";
        }
    } else {
        $errorPseudo = "Ce pseudo est déjà pris";
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

    <section class="settings_wrapper paddWrappPseudo">
        <div class="settings_title">Changer de pseudo</div>
        <div class="settings_container">

            <form method="post" action="">
                <?php if ($successPseudo) : ?>
                    <div class="alertUserSettings success">
                        <?= $successPseudo ?>
                    </div>
                <?php endif ?>

                <?php if ($errorPseudo) : ?>
                    <div class="alertUserSettings error">
                        <?= $errorPseudo ?>
                    </div>
                <?php endif ?>

                <label><b>Pseudo actuel</b></label>
                <input type="text" name="currentpseudo" required autocomplete="off">

                <label><b>Nouveau pseudo</b></label>
                <input type="text" name="newpseudo" required autocomplete="off">

                <label><b>Confirmer le nouveau pseudo</b></label>
                <input type="text" name="newpseudo_repeat" required autocomplete="off">

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