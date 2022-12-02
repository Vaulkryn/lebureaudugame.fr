<?php
$errorRecov = null;
$showmodalRecov = false;
include("../includes/bdd_init.php");
if (!empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    $check = $bdd->prepare('SELECT token FROM users WHERE emailUser = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    if ($row) {
        $token_recov = bin2hex(openssl_random_pseudo_bytes(24));
        $token_user = $data['token'];
        $insert = $bdd->prepare('INSERT INTO passwordrecover(tokenUser, tokenRecov) VALUES(?,?)');
        $insert->execute(array($token_user, $token_recov));
        $link = 'getpassrecover.php?u=' . base64_encode($token_user) . '&token=' . base64_encode($token_recov);
        $showmodalRecov = true;
    } else {
        $errorRecov = "Ce compte n'existe pas";
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
    <link rel="icon" href="../../img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/user_settings.css">
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/login.php"); ?>
    <?php include("../includes/usermenu.php"); ?>

    <?php if ($showmodalRecov) : ?>
        <div class="alert_modal" id="alertModal">
            <div class="alertModal_content">
                <p><?php echo "<a class='link' href='$link'><i class='fa-solid fa-arrow-right'></i> Suivez ce lien</a>" ?></p>
            </div>
        </div>
    <?php endif ?>

    <section class="settings_wrapper paddWrappPassword">
        <div class="settings_title">Entrez votre adresse email</div>
        <div class="settings_container ">

            <?php if ($errorRecov) : ?>
                <div class="alertUserSettings error">
                    <?= $errorRecov ?>
                </div>
            <?php endif ?>

            <form action="" method="POST" style="width:100%">
                <input type="email" name="email" autocomplete="email" required>
                <button type="submit">envoyer</button>
            </form>
        </div>
        <div class="divider bottom"></div>
    </section>
    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" src="../../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/user_interaction.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>