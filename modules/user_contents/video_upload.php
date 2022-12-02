<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
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
    <link rel="stylesheet" href="../../styles/user_contents.css">
</head>

<body>
    <?php
    include("../includes/header.php");
    include("../includes/login.php");
    include("../includes/usermenu.php");
    ?>

    <section class="contents_wrapper wrappvideo">
        <div class="contents_title">Upload une video</div>
        <div class="contents_container">
            <p>En développement</p>
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