<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
}
$successimg = null;
$errorimg = null;
$maxSize = 2097152;
$totalMaxSize = 125829120;
$datetime = date("Y-m-d H:i:s");
$allowedExt = array('jpg', 'jpeg', 'png', 'svg');
$totaluploads = $_SESSION['total_uploads'];
if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
    include("../includes/bdd_init.php");
    if (isset($_POST['game_name'])) {
        $gameName = $_POST['game_name'];
        foreach ($_FILES['img']['tmp_name'] as $key => $value) {
            $imgTempName = $_FILES['img']['tmp_name'][$key];
            $imgName = $_FILES['img']['name'][$key];
            $imgSize = $_FILES['img']['size'][$key];
            $imgTotalSize = array_sum($_FILES['img']['size']);
            $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
            $totaluploads++;
            $_SESSION['total_uploads'] = $totaluploads;
            $serialNo = $_SESSION['ID'] . $_SESSION['total_uploads'];
            $path = "../../img/games/screenshots_pending/" . 'SerialNo' . $_SESSION['ID'] . $_SESSION['total_uploads'] . '#' . '.' . $imgExt;
            if (in_array(strtolower($imgExt), $allowedExt)) {
                if ($imgSize < $maxSize) {
                    if ($imgTotalSize < $totalMaxSize) {
                        if (move_uploaded_file($imgTempName, $path)) {
                            $updateLog = $bdd->prepare('UPDATE users_logs SET total_uploads = :total_uploads WHERE ID = :ID');
                            $updateLog->execute(array(
                                'ID' => $_SESSION['ID'],
                                'total_uploads' => $_SESSION['total_uploads']
                            ));
                            $insertImg = $bdd->prepare('INSERT INTO uploaded_files_pending(user_token, game_name, category, title, descript, extension, serial_no, file_path, date_time)
                                VALUES (:user_token, :game_name, :category, :title, :descript, :extension, :serial_no, :file_path, :date_time)');
                            $insertImg->execute(array(
                                'user_token' => $_SESSION['token'],
                                'game_name' => $gameName,
                                'category' => "screenshot",
                                'title' => NULL,
                                'descript' => NULL,
                                'extension' => $imgExt,
                                'serial_no' => $serialNo,
                                'file_path' => $path,
                                'date_time' => $datetime
                            ));
                            $successimg = "Upload effectué !";
                        } else {
                            $errorimg = "Erreur lors du transfert";
                        }
                    } else {
                        $errorimg = "Taille totale dépassée";
                    }
                } else {
                    $errorimg = "Image trop volumineuse => 2Mo maximum";
                }
            } else {
                $errorimg = "Format non autorisé";
            }
        };
    } else {
        $errorimg = "Choisissez le jeu en question";
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
    <link rel="stylesheet" href="../../styles/user_contents.css">
</head>

<body id="imgUpload">
    <?php
    include("../includes/header.php");
    include("../includes/login.php");
    include("../includes/usermenu.php");
    ?>

    <section class="contents_wrapper">
        <div class="contents_title">Upload du contenu image</div>
        <div class="contents_container">

            <?php if ($successimg) : ?>
                <div class="alertUserSettings success">
                    <?= $successimg ?>
                </div>
            <?php endif ?>
            <?php if ($errorimg) : ?>
                <div class="alertUserSettings error">
                    <?= $errorimg ?>
                </div>
            <?php endif ?>

            <p>Le contenu sera affiché sur le site après validation.</p>
            <p>L'image doit être au format .jpg .jpeg .png ou .svg et ne pas dépasser 2Mo.</p>
            <p>Pour un upload multiple la taille totale maximum est de 120Mo.</p>

            <form method="post" action="" enctype="multipart/form-data" style="width:100%">
                <SELECT name="game_name">
                    <OPTION disabled selected value>--- Quel jeu ? ---</OPTION>
                    <OPTION value='Furi'>Furi</OPTION>
                    <OPTION value='Kurtzpel'>Kurtzpel</OPTION>
                    <OPTION value='Rainbow Six Siege'>Rainbow Six Siege</OPTION>
                    <OPTION value='Elden Ring'>Elden Ring</OPTION>
                    <OPTION value='The Cycle'>The Cycle</OPTION>
                    <OPTION value='Tarkov'>Tarkov</OPTION>
                    <OPTION value='Apex'>Apex</OPTION>
                    <OPTION value='propal'>--- Proposer un jeu ---</OPTION>
                </SELECT>
                <div class="inputUpload_wrapper">
                    <input type="file" name="img[]" id="uploads" class="inputUpload inputStyle" accept="image/*" data-multiple-caption="{count} fichiers sélectionné" multiple style="display:none" />
                    <label for="uploads"><i class="fa-solid fa-file-arrow-up"></i> <span> Choisir les fichiers..</span></label>
                </div>
                <output id='output'></output>
                <div class="button_wrapper">
                    <button class="cancelButton" type="button" onclick="window.location.reload(true);">Annuler la selection</button>
                    <button class="submitButton" type="submit">Envoyer</button>
                </div>
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