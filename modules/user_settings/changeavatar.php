<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
}
$successAvatar = null;
$errorAvatar = null;
if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
    include("../includes/bdd_init.php");
    $maxSize = 2097152;
    $availableFormat = array('jpg', 'jpeg', 'png', 'svg', 'gif');
    if ($_FILES['avatar']['size'] <= $maxSize) {
        $formatUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if (in_array($formatUpload, $availableFormat)) {
            $path = "../../img/avatar/" . $_SESSION['user'] . '.' . $formatUpload;
            $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
            if ($result) {
                $insertAvatar = $bdd->prepare('UPDATE users SET avatar_path = :avatar_path WHERE ID = :ID');
                $insertAvatar->execute(array(
                    'avatar_path' => $path,
                    'ID' => $_SESSION['ID']
                ));
                $successAvatar = "L'avatar a été changé avec succès !";
            } else {
                $errorAvatar = "Erreur lors de l'importation";
            }
        } else {
            $errorAvatar = "Format non valide";
        }
    } else {
        $errorAvatar = "Image trop volumineuse - 2Mo maximum";
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

    <section class="settings_wrapper paddWrappAvatar">
        <div class="settings_title">Changer d'avatar</div>
        <div class="settings_container">

            <?php if ($successAvatar) : ?>
                <div class="alertUserSettings success">
                    <?= $successAvatar ?>
                </div>
            <?php endif ?>
            <?php if ($errorAvatar) : ?>
                <div class="alertUserSettings error">
                    <?= $errorAvatar ?>
                </div>
            <?php endif ?>

            <p>L’image doit être au format .jpg .jpeg .png .svg ou .gif et ne doit pas dépasser 2 Mo.</p>

            <form method="post" action="" enctype="multipart/form-data" style="width:100%">
                <label class="avatarLabel" for="upload_avatar"><img id="outputAvatar" /></label>
                <input class="avatarInput" type="file" id="upload_avatar" name="avatar" accept="image/*" onchange="loadAvatar(event)">
                <button type="submit">Envoyer</button>
                <p style="margin-top:8px;color:darkorange">Tu auras peut-être besoin de deco/reco pour mettre à jour le profil</p>
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