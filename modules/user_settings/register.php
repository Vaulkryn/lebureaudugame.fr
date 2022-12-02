<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location:http://localhost/lebureaudugame.fr');
}
$successRegister = null;
$errorRegister  = null;
if (!empty($_POST['emailReg']) && !empty($_POST['pseudoReg']) && !empty($_POST['passwordReg']) && !empty($_POST['password-repeatReg'])) {
    include("../includes/bdd_init.php");
    $useremail = htmlspecialchars($_POST['emailReg']);
    $userpseudo = htmlspecialchars($_POST['pseudoReg']);
    $userpassword = htmlspecialchars($_POST['passwordReg']);
    $userpassword_repeat = htmlspecialchars($_POST['password-repeatReg']);
    $queryMail = $bdd->prepare('SELECT email, pseudo, passwd FROM users WHERE email = ?');
    $queryMail->execute(array($useremail));
    $rowMail = $queryMail->rowCount();
    $queryPseudo = $bdd->prepare('SELECT email, pseudo, passwd FROM users WHERE pseudo = ?');
    $queryPseudo->execute(array($userpseudo));
    $rowPseudo = $queryPseudo->rowCount();
    $useremail = strtolower($useremail);
    $userpseudo = strtolower($userpseudo);
    if ($rowMail == 0) {
        if ($rowPseudo == 0) {
            if (strlen($userpseudo) <= 18) {
                if (filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
                    if ($userpassword === $userpassword_repeat) {
                        $cost = ['cost' => 12];
                        $userpassword = password_hash($userpassword, PASSWORD_BCRYPT, $cost);
                        $usertoken = bin2hex(random_bytes(12));
                        $insert = $bdd->prepare('INSERT INTO users(email, pseudo, passwd, avatar_path, user_token) VALUES(:email, :pseudo, :passwd, :avatar_path, :user_token)');
                        $insert->execute(array(
                            'email' => $useremail,
                            'pseudo' => $userpseudo,
                            'passwd' => $userpassword,
                            'avatar_path' => NULL,
                            'user_token' => $usertoken
                        ));
                        $insertLog = $bdd->prepare('INSERT INTO users_logs(total_uploads) VALUE (:total_uploads)');
                        $insertLog->execute(array(
                            'total_uploads' => NULL
                        ));
                        $successRegister  = "Inscription réussie !";
                    } else {
                        $errorRegister  = "Les mots de passes ne correspondent pas";
                    }
                } else {
                    $errorRegister  = "Email invalide";
                }
            } else {
                $errorRegister  = "Pseudo de 18 caractères maximum";
            }
        } else {
            $errorRegister  = "Ce pseudo est déjà pris";
        }
    } else {
        $errorRegister  = "Un compte avec cet email existe déjà";
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

    <section class="settings_wrapper">
        <div class="settings_title">s'inscrire</div>
        <div class="settings_container">

            <form method="post" action="">

                <?php if ($successRegister) : ?>
                    <div class="alertUserSettings success">
                        <?= $successRegister  ?>
                    </div>
                <?php endif ?>

                <?php if ($errorRegister) : ?>
                    <div class="alertUserSettings error">
                        <?= $errorRegister  ?>
                    </div>
                <?php endif ?>

                <label for="email"><i class="fa-solid fa-at"></i> Email</label>
                <input type="email" name="emailReg" autocomplete="email" required>

                <label for="pseudo"><i class="fa-solid fa-user"></i> Pseudo</b></label>
                <input type="text" name="pseudoReg" autocomplete="off" required>

                <label for="password"><i class="fa-solid fa-lock"></i> Mot de passe</label>
                <input type="password" name="passwordReg" autocomplete="off" required>

                <label for="password-repeat"><i class="fa-solid fa-lock"></i> Confirmer le mot de passe</label>
                <input type="password" name="password-repeatReg" autocomplete="off" required>

                <button type="submit">S'inscrire</button>

            </form>
        </div>
        <div class="divider"></div>
    </section>

    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" src="../../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>