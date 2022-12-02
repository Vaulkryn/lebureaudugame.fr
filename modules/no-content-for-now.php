<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Le Bureau du Game</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/no-content-for-now.css">
</head>

<body>
    <?php
    include("includes/header.php");
    include("includes/login.php");
    include("includes/usermenu.php");
    ?>

    <section class="noContent_wrapper">
        <div class="noContent_title">oups !</div>
        <div class="noContent_container">
            <p>Le contenu n'a pas encore été uploadé !</p>
            <p>En attendant visites ces pages !</p>
            <ul>
                <li><a href="games/kurtzpel.php"><i class="fa-solid fa-arrow-right-long"></i> Kurtzpel</a></li>
                <li><a href="games/furi.php"><i class="fa-solid fa-arrow-right-long"></i> Furi</a></li>
            </ul>
        </div>
        <div class="divider bottom"></div>
    </section>

    <?php include("includes/footer.php"); ?>

    <script type="text/javascript" src="../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>