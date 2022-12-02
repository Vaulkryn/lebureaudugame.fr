<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
} else {
    include("../includes/bdd_init.php");
    $userToken = $_SESSION['token'];
    $query = $bdd->prepare('SELECT * FROM uploaded_files_pending WHERE user_token = ?');
    $query->execute(array($userToken));
    $row = $query->rowCount();
    $queryOutput = $query->fetchAll();
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

    <section class="contents_wrapper wrappupp">
        <div class="contents_title">Uploads en attente</div>
        <div class="contents_container containupp">
            <?php
            if ($row > 0) {
                foreach ($queryOutput as $output) {
                    echo '<p style="margin:18px;font-size:22px">' . $output['serial_no'] . '#' . '.' . $output['extension'] . ' -------- ' . $output['game_name'] . '</p>';
                }
            } else {
                echo '<p> Il n\'y a aucun fichier en attente </p>';
            }
            ?>
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